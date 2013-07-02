<?php
class Sites extends CI_Model{

    function load_sites()
    {
        $q = $this->db->get('sites');

        $r = $q->result_array();

        return @$r;
    }

}
?>