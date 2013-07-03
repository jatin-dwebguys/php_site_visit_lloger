<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Res extends CI_Controller {

    public function index($site_id)
    {
        $logs = $this->logs->load_all($site_id);
        
        $this->load_log($logs);

        $this->load->view('update_script', $this->site_status($logs));
    }

    public function load_part($site_id, $log_id = 0)
    {

        $logs = $this->logs->load_part($site_id, $log_id);

        $this->load_log($logs);
    }


    private function load_log($logs)
    {

        foreach ($logs as $key => $log)
        {
            $l = json_decode($log['content'], true);
            // if($l['i'] == $_SERVER["REMOTE_ADDR"])
            // {
            //     continue;
            // }
            $l['id'] = $log['id'];

            $this->load->view('parse_log',$l);
            // }

        }
    }

    private function site_status($logs)
    {
        $current_time = strtotime(date('Y-m-d H:i:s'));

        $stt['total_visit'] = 0;
        $stt['current_online'] = 0;
        $stt['visit_today'] = 0;

        foreach ($logs as $key => $log)
        {
            $stt['total_visit']++;
            
            $l = json_decode($log['content'], true);
            
            // if($l['i'] == $_SERVER["REMOTE_ADDR"])
            // {
            //     continue;
            // }

                $l['id'] = $log['id'];

                if( ($current_time - strtotime($l['t'])) < 120 )
                {
                    $stt['current_online']++;
                }

                if( ($current_time - strtotime($l['t'])) < 86400 )
                {
                    $stt['visit_today']++;
                }
        }

        return $stt;
    }
}