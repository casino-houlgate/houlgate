<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roulette extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        /*$this->output->enable_profiler(TRUE);*/
    }

    public function index()
    {
        $this->load->model('action');
        $this->load->model('utilisateur', 'user');
        try {
            $user = (object)$this->facebook->api('/me');

            $fbid = $user->id;
            $nom = $user->last_name;
            $prenom = $user->first_name;
            $pseudo = $user->name;
            $email = $user->email;
            $newsletter = $this->input->post('newsletter');

            $this->user->setUtilisateur($fbid, $nom, $prenom, $pseudo, $email, $newsletter);

            $Objtotal = $this->action->getSumVal($fbid);
            $total = isset($Objtotal[0]) ? (empty($Objtotal[0]->valeur) ? 0 : $Objtotal[0]->valeur) : 0;

            $currentRanking = $this->getRanking($total);

            /*
             * ON RECUPERE LA DIFFERENCE ENTRE LE PALIER MIN ET NOTRE VALUE TOTAL
             * ELLE PERMETTRA DE DEFINIR L'AVANCEMENT
             */
            $diff = abs($total - $currentRanking->min);
            $max = abs($currentRanking->max - $currentRanking->min);
            $nbaction = 3 - $this->getNbAction($fbid);
            $resultDaily = $this->getDailyPoint($fbid);

            $dailyTotal = empty($resultDaily[0]->sum) ? 0 : $resultDaily[0]->sum;

            $this->data += [
                'fbId' => $fbid,
                'diff' => $diff,
                'rank' => $currentRanking,
                'max' => $max,
                'total' => empty($total) ? 0 : $total,
                'nbaction' => $nbaction,
                'dailyTotal' => $dailyTotal
            ];

            $this->load->view('roulette', $this->data);
        } catch (FacebookApiException $e) {
            redirect('/');
        }

    }

    public function getRanking($val = null)
    {
        $total = $val === null ? $this->input->post('total') : $val;
        $this->load->model('rang', 'rank');
        $currentRanking = null;

        $allRank = $this->rank->getAll();
        if (isset($allRank)) {
            if (empty($total)) {
                $currentRanking = $allRank[0];
            } else {
                foreach ($allRank as $rank) {
                    if ($total > 3000) {
                        $currentRanking = $allRank[3];
                    } else {
                        if ($total >= $rank->min && $total < $rank->max) {
                            $currentRanking = $rank;
                        }
                    }
                }
            }
        }
        if (!$this->input->is_ajax_request()) {
            return $currentRanking;
        } else {
            echo json_encode($currentRanking);
        }

    }

    public function setPoint()
    {
        $iduser = $this->input->post('iduser');
        $value = $this->input->post('value');

        if ($this->getNbAction($iduser) < 3) {
            $this->load->model('action', 'action');

            $this->action->setAction($iduser, $value);

            echo json_encode("done");
        } else {
            echo json_encode(['error' => 'Vous n\'avez plus de quota d\'action']);
        }
    }

    public function getGift()
    {
        if ($this->input->is_ajax_request()) {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'mrakotomizao@gmail.com',
                'smtp_pass' => 'Ouist24!',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->load->model('action', 'action');

            $fbid = $this->input->post('fbid');


            //STEP 1 : Send notification for casino that a user choose a gift

            $this->email->from('your@example.com', 'Moise RAKOTOMIZAO');
            $this->email->to('mrakotomizao@gmail.com');

            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');

            $this->email->send();

            /*echo $this->email->print_debugger();*/

            //STEP 2 : Set user point to 0
            $this->action->updateActions($fbid);

        } else {
            exit('No direct script access allowed');
        }
    }

    public function ajaxGetNbAction()
    {
        if ($this->input->is_ajax_request()) {
            $this->load->model('action', 'action');

            $fbid = $this->input->post('fbid');

            echo json_encode($this->action->getDailyAction($fbid));
        } else {
            exit('No direct script access allowed');
        }
    }

    private function getNbAction($iduser)
    {
        $this->load->model('action', 'action');

        return $this->action->getDailyAction($iduser);
    }

    public function getDailyPoint($iduser = null)
    {
        $this->load->model('action', 'action');
        $fbid = empty($iduser) ? $this->input->post('fbid') : $iduser;

        if ($this->input->is_ajax_request()) {
            echo json_encode($this->action->getDailyPoint($fbid));
        } else {
            return $this->action->getDailyPoint($iduser);
        }
    }
}
