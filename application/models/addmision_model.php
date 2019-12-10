<?php
class addmision_model extends CI_Model{

    function get_addmision(){
        $addmision = $this->db->get('addmision');
        return $addmision->result();
    }

    function new_addmision($data){
		return $this->db->insert('addmision',$data);
	
}

function add_addmision($data){
    $this->db->insert('addmision',$data);
}

function update_addmision($x,$data){
    $this->db->where('id',$x);
    $this->db->update('addmision',$data);
}


function read_addmision($id){
    $query=$this->db->get_where('addmision',array('id'=>$id));
    return $query->row_array();
}

function delete_addmision($x){
    $this->db->where('id',$x);
    $this->db->delete('addmision');
    }

}