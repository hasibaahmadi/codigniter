<?php

class Department_model extends CI_Model{
function get_department(){
//$departments = $this->db->get('departments');
//return $departments->result();

$this->db->select('*');
$this->db->from('departments');
$this->db->join('staff', 'departmentId = staffId', 'left'); 
$query = $this->db->get();
return $query->result();
}

function add_department($data){
    $this->db->insert('departments',$data);
    
    }

    function update_department($x,$data){
        $this->db->where('id',$x);
        $this->db->update('departments',$data);
        }
        function read_department($id){
            $query=$this->db->get_where('departments',array('id'=>$id));
            return $query->row_array();
        }

        function delete_department($x){
            $this->db->where('id',$x);
            $this->db->delete('departments');
            }
}