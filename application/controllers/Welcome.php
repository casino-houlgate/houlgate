<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        /*$this->output->enable_profiler(TRUE);*/
    }

    public function login()
    {
        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $this->data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        } else {
            $this->facebook->destroySession();
        }

        if ($user) {
            $this->data['logout_url'] = site_url('welcome/logout'); // Logs off application
        } else {
            $this->data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url(),
                'scope' => array("email") // permissions here
            ));
        }
        $this->load->view('welcome_message', $this->data);
    }
}