<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*$this->output->enable_profiler(TRUE);*/
        $this->CI = get_instance();
        $this->data['logout_url'] = site_url($this->CI->router->fetch_class()).'/logout';
    }

    public function logout()
    {
        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.

        redirect('welcome/login');
    }

}
