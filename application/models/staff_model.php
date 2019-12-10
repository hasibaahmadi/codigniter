<?php
class staff_model extends CI_Model{

    function get_staff(){
        $staff = $this->db->get('staff');
        return $staff->result();

        //$re=$this->db->select('*')->from('staff')->where('departmentId=2');
        //return $re->result();
    }
/*
    function login1($uname,$pass){
		$data['UserName']=$uname;
		$data['UserPassword']=$pass;
		$query=$this->db->get_where('staff',array('UserName'=>$uname,'UserPassword'=>$pass));
		if($query->num_rows()>0){
			return $query->first_row()->staffID;
		} else {
			return 0;
		}
    }*/
    /*
    function login($uname,$pass){
        $data = array('
        UserName'=>$uname,
        'UserPassword'=>$pass);
        $this->db->select("*")->from('staff')->where($data);
        $q = $this->db->get();
        return $q->first_row('array');
        
    }
	function new_staff($data){
		return $this->db->insert('staff',$data);
	
}*/

 
    function login($uname,$pass){
        $data = array('
        uname'=>$uname,
        'pass'=>$pass);
        $this->db->select("*")->from('user')->where($data);
        $q = $this->db->get();
        return $q->first_row('array');
        
    }
	function new_staff($data){
		return $this->db->insert('staff',$data);
	
}

    /*function get_staff($x){
        $staff = $this->db->select()->from('staff')->where('id',$x)->get();
        return $staff->row();
    }*/

    function add_staff($data){
        $this->db->insert('staff',$data);
    }

    function delete_staff($x){
        $this->db->where('staffID',$x);
        $this->db->delete('staff');
        }

    function update_staff($x,$data){
        $this->db->where('staffID',$x);
        $this->db->update('staff',$data);
    }
    function read_staff($id){
        $query=$this->db->get_where('staff',array('staffID'=>$id));
        return $query->row_array();
    }

    function result(){
            
            $staff = $this->db->select("*")->from('staff')->where('DepartmentId=1');
            $staff = $this->db->get();
            //return $q->first_row('array');
            return $staff->result();

            
    }

    function department_get(){
            
        $staff = $this->db->select("*")->from('staff')->where('DepartmentId=1');
        $staff = $this->db->get();
        //return $q->first_row('array');
        return $staff->result();

        
}

// this function check the database for existing record of user name
function check_username($firstname){
    $this->db->where('name',$firstname);
    $this -> db -> select('name');
    $query = $this -> db -> get('staff');
    if ($query -> num_rows() > 0) {
    return true;
    } else{
    return FALSE;
    }
    }
}