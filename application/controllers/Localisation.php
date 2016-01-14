<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Localisation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*$this->output->enable_profiler(TRUE);*/
    }

    public function index()
    {
        $this->load->view('localisation');
    }
}
