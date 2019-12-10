<?php
class patients_model extends CI_model{

    /*//change this function to return posts as offsets and limit
    function get_patient($limit = 5, $offset = 0){
        return $this->db->get('patient',$limit,$offset)->result();
    }*/

    function get_patients(){
        $patients = $this->db->get('patient');
        return $patients->result();
    }

    /*function get_patient($x){
        $patient = $this->db->select()->from('patient')->where('id',$x)->get();
        return $patient->row();
    
    }*/

    function add_patient($data){
        $this->db->insert('patient',$data);

    }

    function delete_patient($x){
        $this->db->where('id',$x);
        $this->db->delete('patient');
    }

    function update_patient($x,$data){
        $this->db->where('id',$x);
        $this->db->update('patient',$data);
    }

    function read_patient($id){
        $query=$this->db->get_where('patient',array('id'=>$id));
        return $query->row_array();
    }

    function count_patient(){
        return $this->db->count_all('patient');
}
}