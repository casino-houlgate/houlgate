<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gambling extends MY_Controller
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


        $this->load->view('gambling');
    }
}
