
<?php

class  patient extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
//		$this->lang->load('main',$this->session->userdata('language'));
        //if (!$this -> session -> userdata('language'))
        //$this -> lang -> load('main');
        //else
        //$this -> lang -> load('main', $this -> session -> userdata('language'));
    }

   /* function lang_load($lang){
        $this->session->set_userdata('language',$lang);
        redirect($this->session->userdata('lastvisited'));
    }*/

    function get_patients(){
        $this->load->view('template/header');
        $this->load->model('patients_model');
        $data['patients']=$this->patients_model->get_patients();
        $this->load->view('something',$data);
        //$this->load->view('template/footer');
        $this->load->model('patients_model');
/*
        //first we need to load the pagination library
        $this->load->library('pagination');
        //second specify which segment of URI should be sent as offset
        $offset=$this->uri->segment(3);
        //third specify the base URL
        $config['base_url'] = base_url().'index.php/patient/get_patients';
        //fourth specifying total rows so we can count it

        $config['total_rows'] =$this->patients_model->count_patient();
        //fifth to specify how many posts in one page should be shown
        $config['per_page'] = 3;
        //six we need to know according to which segment of URI pagination proceeded
        $config['uri_segment'] = 3;
        //we need to initialize the settings
        $this->pagination->initialize($config);
        //call a function from the model to return posts
        $data['patient']=$this->Patients_model->get_patients($config['per_page'],$offset);
        $this->load->view('something',$data);
       */
    }
    
    function details($id){
        $this->load->model('patients_model');
        $data['patient']=$this->patients_model->get_patients($id);
        $this->load->view('show_d',$data);
    }

    function add_patient(){
        $this->load->view('template/header');
        $this->load->view('new_patient');
        $this->load->view('template/footer');
    }

    function add(){
        $this->load->model('patients_model');
        $data = array('id' =>$this->input->post('id'),
        'date' =>$this->input->post('date'),
        'name' =>$this->input->post('name'),
        'fhaterName'=>$this->input->post('fhaterName'),
        'address' =>$this->input->post('address'),
        'gender' =>$this->input->post('gender'),
        'age' =>$this->input->post('age'),
        'typeOfEvent' =>$this->input->post('TypeOfEvent'),
        'takenthrowback' =>$this->input->post('takenthrowback'),
        'giventhrowback' =>$this->input->post('giventhrowback'),
        'Estate' =>$this->input->post('Estate'),
        'detectionID' =>$this->input->post('detectionID'));
        $this->patients_model->add_patient($data);
        redirect('patient/get_patients');
    }

    function delete($id){
        $this->load->model('patients_model');
        $this->patients_model->delete_patient($id);
        redirect('patient/get_patients');
    }

    function update_patient($id){
        $this->load->view('template/header');
        $this->load->model('patients_model');
        $data['patient']= $this->patients_model->read_patient($id);
        $this->load->view('update_patient',$data);
        $this->load->view('template/footer');
    }

    function update($x){
        $this->load->model('Patients_model');
        $data = array(
        'date' =>$this->input->post('date'),
        'name' =>$this->input->post('name'),
        'fhaterName' =>$this->input->post('fhaterName'),
        'address' =>$this->input->post('address'),
        'gender' =>$this->input->post('gender'),
        'age' =>$this->input->post('age'),
        'typeOfEvent' =>$this->input->post('typeOfEvent'),
        'takenthrowback' =>$this->input->post('takenthrowback'),
        'giventhrowback' =>$this->input->post('giventhrowback'),
        'estate' =>$this->input->post('estate'),
        'detectionID' =>$this->input->post('detectionID')
        );
        $this->Patients_model->update_patient($x, $data);
        redirect('patient/get_patients');
        }

        public function view($page = 'patient'){
            
            if(!file_exists(APPPATH.'view/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);
            $this->load->view('template/header');
            $this->load->view('patient/'.$page, $data);
            $this->load->view('template/footer');
            
        }  
        
        function result(){
            $this->load->view('template/header');
            $this->load->view('result');
            $this->load->view('template/footer');
        }

        function history(){
            $this->load->view('template/header');
            $this->load->view('add_diagnosis');
            $this->load->view('template/footer');
        }


}

?>

