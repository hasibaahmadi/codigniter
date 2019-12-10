<?php
class User extends CI_Controller{

    function __construct(){
        parent::__construct();

        $this->load->model('user_model');
        $this->load->library('form_validation');
        /*if (!$this -> session -> userdata('language'))
        $this -> lang -> load('main');
        else
        $this -> lang -> load('main', $this -> session -> userdata('language'));
*/
    }

    function index(){
        //echo "hello codigniter";

//   $this->load->view('user_view');
    }

    // this function is to check the existance of user name in the database.
    function username_check($username){
    // call a User_model function for checking the user name
    $user=$this->user_model->check_username($username);
    // if user name existed in the database than show this message
    if ($user){
    $this->form_validation->set_message('username_check', 'The'.
    $username.' Already Exist in Database');
        return FALSE;
    } else
    {
        return TRUE;
        }
    }

   

    function add_user(){
       
        //$this->load->view('template/header');
        $this->load->view('user_view');
        //$this->load->view('template/footer');
    }
/*
    function add(){
        $this->load->model('user_model');
        $data = array('id' =>$this->input->post('id'),
        'name' =>$this->input->post('name'),
        'uname' =>$this->input->post('uname'),
        'pass'=>$this->input->post('pass'),
        'photo' =>$this->input->post('photo'),
    );
        
        $this->user_model->add_user($data);
        redirect('staff/admin_login');

    }*/

             function add(){
                $this->load->view('user_view');

        $this->load->helper('date');
        if($this->input->post('submit')){
        // load the form validation library
        $this->load->library('form_validation');
        // set rules for desired inputes
        $config = array(
        array(
        'field' => 'name',
        'label' => 'First Name',
        'rules' => 'required'
        ),
        array(
        'field' => 'uname',
        'label' => 'User Name',
        'rules' => 'required|callback_username_check'
        ),
        array(
        'field' => 'pass',
        'label' => 'Password',
        'rules' => 'required'
        )/*,
        array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required'
        )*/
        );
        // initialize the rules
        $this->form_validation->set_rules($config);
        // if the form do not be as in the rule call register function
        if ($this->form_validation->run() == FALSE)
        {
        $this->add();
        }


                // if the rule is fulfilled run this part
        else
        {
        /*$f_dir=config_item('base_path').'staff_images';
        //$config['upload_path'] = './staff_images/';//$f_dir;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = time();
        $config['image_library'] = 'gd2';
        $config['create_thumb'] = false;
        $config['max_size']   = 500;
        $config['max_width']  = 1024;
        $config['max_height']  = 768;
        $this->load->library('image_lib', $config);
       // $this->image_lib->resize();*/
        //$this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
        $error = $this->upload->display_errors();
        $this->add($error);
        }
        else
        {
        $data = array(
        'name'=>$this->input->post('name'),
        'uname'=>$this->input->post('uname'),
        'pass'=>$this->input->post('pass'),
        'photo'=>
        $this->input->post('photo'),
        );
        $this->user_model->add_user($data);
        redirect('staff/admin_login');
        }
        }
        }//else{echo "Not submited";}
        }

        // this function check the database for existing record of user name
       // function check_username($username){
        //$this->db->where('uname',$username);
        //$this -> db -> select('uname');
        //$query = $this -> db -> get('user');
        //if ($query -> num_rows() > 0) {
        //return true;
        //} else{
        //return FALSE;
        //}
       // }
//--------------------------------------------------------------------------

}