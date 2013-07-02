<?php
class Logs extends CI_Model{
    
    function save($data)
    {
        return $this->db->insert('logs',$data);
    }

    function load_all($site_id)
    {
        $this->db->where('site_id', $site_id);
        $this->db->order_by("id", "desc"); 

        $q = $this->db->get('logs');

        $r = $q->result_array();

        return @$r;
    }

    function load_part($site_id, $log_id)
    {
        $this->db->where('site_id', $site_id);
        $this->db->where('id > ', $log_id);

        $this->db->order_by("id", "desc"); 

        $q = $this->db->get('logs');

        $r = $q->result_array();

        return @$r;
    }
}
?>