<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Optin extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if($this->facebook->getUser()){
            try {
                $this->data['user_profile'] = $this->facebook
                    ->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }
        $this->load->view('optin', $this->data);
    }
/*    public function login_fb(){
        $fb = new Facebook();
        redirect($fb->login_url());

    }*/
}
