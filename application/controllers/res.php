<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Res extends CI_Controller {

    public function index($site_id)
    {
        $logs = $this->logs->load_all($site_id);
        
        foreach ($logs as $key => $log) {
            $l = json_decode($log['content'], true);
            if($l['i'] != $_SERVER["REMOTE_ADDR"])
            {
                $l['id'] = $log['id'];

                $this->load->view('parse_log',$l);
            }
        }
    }

    public function load_part($site_id, $log_id = 0)
    {

        $logs = $this->logs->load_part($site_id, $log_id);
        
        foreach ($logs as $key => $log) {
            $l = json_decode($log['content'], true);
            if($l['i'] != $_SERVER["REMOTE_ADDR"])
            {
                $l['id'] = $log['id'];

                $this->load->view('parse_log',$l);
            }
        }
    }
}