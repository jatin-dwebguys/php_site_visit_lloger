<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recv extends CI_Controller {

    // recieve client location, referer url, time
    /**********
        u = site id
        l = location
        r = referer url
    **/
    public function index()
    {
        $a =  array();
        $a = $_GET;

        // client ip (i), time (t),
        $a['i'] = $_SERVER["REMOTE_ADDR"];
        $a['t'] = date('Y-m-d H:i:s');


        $data['site_id'] = $a['u'];
        $data['content'] = json_encode($a);
        echo $this->logs->save($data);
    }
}