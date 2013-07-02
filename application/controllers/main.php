<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $data["sites"] = $this->sites->load_sites();
        $this->load->view('header', $data);
    }
}