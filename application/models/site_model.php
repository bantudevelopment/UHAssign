<?php

class Site_model extends CI_Model {
    
    function get_records(){
        //$query = $this->db->get('data');
        $data['records'] = $this->db->get('data', $config['per_page'],$this->uri->segment(3));
        return $query->result();
    }
    function add_record($data)
    {
        $this->db->insert('data',$data);
        return;
    }
    
    function update_record($data)
    {
        $this->db->where('id',6);
        $this->db->update('data',$data);
        
    }
    function  delete_row()
    {
        $this->db->where('id',$this->uri->segment(3));
        $this->db->delete('data');
    }
}

