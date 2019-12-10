<?php
class Addmision extends CI_Controller{
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

    function get_addmision(){
        $this->load->view('template/header');
        $this->load->model('addmision_model');
        $data['addmision']=$this->addmision_model->get_addmision();
        $this->load->view('addmision_view',$data);
        $this->load->view('template/footer');

    }

    function add_addmision(){
        $this->load->view('template/header');
        $this->load->view('add_addmision');
        $this->load->view('template/footer');
    }

    function add(){
        $this->load->model('addmision_model');
        $data = array('id' =>$this->input->post('id'),
        'date' =>$this->input->post('date'),
        'time' =>$this->input->post('time'),
        'patientId' =>$this->input->post('patientId'),
        'staffId' =>$this->input->post('staffId'),
        'wardID' =>$this->input->post('wardID'),
        'bedID' =>$this->input->post('bedId')
    );
    $this->addmision_model->add_addmision($data);
    redirect('addmision/get_addmision');
    }

    function update_addmision($id){
        $this->load->view('template/header');
        $this->load->model('addmision_model');
        $data['addmision'] = $this->addmision_model->read_addmision($id);
        $this->load->view('update_addmision',$data);
        $this->load->view('template/footer');
    }

    function update($x){
        $this->load->model('addmision_model');
        $data = array(
        'id' =>$this->input->post('id'),
        'date' =>$this->input->post('date'),
        'time' =>$this->input->post('time'),
        'patientId' =>$this->input->post('patientId'),
        'staffId' =>$this->input->post('staffId'),
        'wardID' =>$this->input->post('wardID'),
        'bedID' =>$this->input->post('bedID'),
        );
        $this->addmision_model->update_addmision($x,$data);
        redirect('addmision/get_addmision');
    }

    function delete_addmision($id){
        $this->load->model('addmision_model');
        $this->addmision_model->delete_addmision($id);
        redirect('addmision /get_addmision');
        }
}