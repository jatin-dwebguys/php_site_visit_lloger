<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Res extends CI_Controller {

    public function index($site_id)
    {
        $logs = $this->logs->load_all($site_id);
        
        $opt['total_visit'] = true;
        $opt['current_online'] = true;
        $opt['visit_today'] = true;

        $this->load_log($logs, $opt);
        
    }

    public function load_part($site_id, $log_id = 0)
    {

        $logs = $this->logs->load_part($site_id, $log_id);

        $opt['current_online'] = true;
        $opt['visit_today'] = false;
        $opt['total_visit'] = false;
        
        $this->load_log($logs, $otp);
    }


    private function load_log($logs, $opt)
    {

        $stt['total_visit'] =  0;
        $stt['current_online'] = 0;
        $stt['visit_today'] = 0;

        $current_time = strtotime(date('Y-m-d H:i:s'));

        foreach ($logs as $key => $log)
        {
            $l = json_decode($log['content'], true);
            if($l['i'] != $_SERVER["REMOTE_ADDR"])
            {
                $l['id'] = $log['id'];

                if( ($current_time - strtotime($l['t'])) < 600
                    and $opt['current_online'] )
                {
                    $stt['current_online']++;
                }

                if( ($current_time - strtotime($l['t'])) < 86400
                    and $opt['visit_today'] )
                {
                    $stt['visit_today']++;
                }

                $this->load->view('parse_log',$l);
            }

            if( $opt['total_visit'] )
            {
                $stt['total_visit']++;
            }
        }

        $this->load->view('update_script', $stt);

    }
}