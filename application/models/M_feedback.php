<?php
class M_feedback extends CI_Model   
{
    public function simpanData($data = null)
    {
        $this->db->insert('feedback',$data);
    }
}