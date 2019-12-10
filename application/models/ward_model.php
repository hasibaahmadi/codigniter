<?php
    class Ward_model extends CI_Model{
    function get_ward(){
    $wards = $this->db->get('wards');
    return $wards->result();
    }

    function add_ward($data){
        $this->db->insert('wards',$data);
        }

        function delete_ward($x){
            $this->db->where('id',$x);
            $this->db->delete('wards');
            }

            function update_ward($x,$data){
                $this->db->where('id',$x);
                $this->db->update('wards',$data);
            }
            function read_ward($id){
                $query=$this->db->get_where('wards',array('id'=>$id));
                return $query->row_array();
            }
}