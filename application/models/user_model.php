<?php
class user_model extends CI_Model{

    function add_user($data){
        $this->db->insert('user',$data);
    }

    // this function check the database for existing record of user name
   function check_username($username){
    $this->db->where('uname',$username);
    $this -> db -> select('uname');
    $query = $this -> db -> get('user');
    if ($query -> num_rows() > 0) {
    return true;
    } else{
    return FALSE;
    }
    }

}
