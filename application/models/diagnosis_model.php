<?php
class diagnosis_model extends CI_Model{
    function get_diagnosis(){
        $diagnosis = $this->db->get('diagnosis');
        return $diagnosis->result();
    }
    function add_diagnosis($data){
        $this->db->insert('diagnosis',$data);
    }
    function delete_diagnosis($x){
        $this->db->where('id',$x);
        $this->db->delete('diagnosis');
        }
    function update_diagnosis($x,$data){
        $this->db->where('id',$x);
        $this->db->update('diagnosis',$data);
    }
    function read_diagnosis($id){
        $query=$this->db->get_where('diagnosis',array('id'=>$id));
        return $query->row_array();
    }
}