<?php
class staff extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('login');
    }

    function dynamic_view(){
        $data['firstName'] = 'Dynamic View';
        $data['lastName'] = 'A view for Dynamic contents!';
        $this->load->view('some_view',$data);
    }
     
    function admin_login(){
        $this->load->view('login');
        $this->load->model('staff_model');
        $uname = $this->input->post('uname');
		$pass = $this->input->post('pass');
        $data = $this->staff_model->login($uname,$pass);
        // print_r($uname);
        // print_r($pass);
        if(!$data){
            echo "not login ";
        }else{
            redirect('home/index');
        }
    }

    function get_staff(){
        $this->load->view('template/header');
        $this->load->model('staff_model');
        $data['staff']=$this->staff_model->get_staff();
        $this->load->view('staff_view',$data);
        
       // $this->load->view('template/footer');

    }

    function add_staff(){
        $this->load->view('template/header');
        //$data['error']=$err;
        $this->load->view('add_staff');
        $this->load->view('template/footer');
    }

    function add(){
        $this->load->model('staff_model');
        $data = array('staffID' =>$this->input->post('staffID'),
        'firstName' =>$this->input->post('firstName'),
        'lastName' =>$this->input->post('lastName'),
        'workingTime' =>$this->input->post('workingTime'),
        'departmentId' =>$this->input->post('departmentId'),
        'address' =>$this->input->post('address'),
        'staffJob' =>$this->input->post('staffJob'),
        'salary' =>$this->input->post('salary'),
        'age' =>$this->input->post('age'),
        'gendeer' =>$this->input->post('gendeer'),
        //'photo' =>$user_image,
        //'UserPassword'=>$ec_pass

    );
    $this->staff_model->add_staff($data);
    redirect('staff/get_staff');
           
    }

/*
            $this->load->view('user_view');

            $this->load->helper('date');
            if($this->input->post('submit')){
            // load the form validation library
            $this->load->library('form_validation');
            // set rules for desired inputes
            $config = array(
            array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'required'
            ),
            array(
                'field' => 'lastName',
                'label' => 'Last Name',
                'rules' => 'required'
                ),
            array(
            'field' => 'workingTime',
            'label' => 'work of time',
            'rules' => 'required|callback'
            ),
            array(
            'field' => 'departmentId',
            'label' => 'departmentId',
            'rules' => 'required'
            ),
            array(
                'field' => 'address',
                'label' => 'address',
                'rules' => 'required'
            ),
            array(
            'field' => 'staffJob',
            'label' => 'job',
            'rules' => 'required'
            ),
            array(
                'field' => 'salary',
                'label' => 'salary',
                'rules' => 'required'
                ),
                array(
                    'field' => 'age',
                    'label' => 'age',
                    'rules' => 'required'
                    ),
                 array(
                    'field' => 'gendeer',
                    'label' => 'gendeer',
                    'rules' => 'required'
                    ),
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
            //if ( ! $this->upload->do_upload())
           // {
           // $error = $this->upload->display_errors();
            //$this->add($error);
//}
           /* else
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
        }
            $this->staff_model->add_staff($data);
    redirect('staff/get_staff');
    
    }*/

    function delete_staff($id){
        $this->load->model('staff_model');
        $this->staff_model->delete_staff($id);
        redirect('staff/get_staff');
        }

    

    function update_staff($id){
        $this->load->view('template/header');
        $this->load->model('staff_model');
        $data['staff'] = $this->staff_model->read_staff($id);
        $this->load->view('update_staff',$data);
        $this->load->view('template/footer');
    }

    function update($x){
        $this->load->model('staff_model');
        $data = array(
        'staffID' =>$this->input->post('staffID'),
        'firstName' =>$this->input->post('firstName'),
        'lastName' =>$this->input->post('lastName'),
        'workingTime' =>$this->input->post('workingTime'),
        'departmentId' =>$this->input->post('departmentId'),
        'address' =>$this->input->post('address'),
        'staffJob' =>$this->input->post('staffJob'),
        'salary' =>$this->input->post('salary'),
        'age' =>$this->input->post('age'),
        'gendeer' =>$this->input->post('gendeer'),
        'photo' =>$this->input->post('photo'),

        );
        $this->staff_model->update_staff($x,$data);
        redirect('staff/get_staff');

    }

    function department1(){
        $this->load->view('template/header');

        //$this->load->model('staff_model');
       // $data['staff']=$this->staff_model->result();
        $this->load->view('departrment/department1');
        //$this->load->view('template/footer');
        //$this->load->model('staff_model');



    }

    function department2(){
        $this->load->view('template/header');

        //$this->load->model('staff_model');
       // $data['staff']=$this->staff_model->department_get();
        $this->load->view('departrment/department2');
        //$this->load->view('template/footer');
        //$this->load->model('staff_model');



    }
    function department3(){
        $this->load->view('template/header');
        $this->load->view('departrment/department3');
    }

    function department4(){
        $this->load->view('template/header');
        $this->load->view('departrment/department4');
    }

    function doctor(){
        $this->load->view('template/header');
        $this->load->view('departrment/doctor');
    }

    function nars(){
        $this->load->view('template/header');
        $this->load->view('departrment/nars');
    }


}