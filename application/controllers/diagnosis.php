<?php
class diagnosis extends CI_Controller{
    function __construct(){
        parent:: __construct();
    }

    function get_diagnosis(){
        $this->load->view('template/header');
        $this->load->model('diagnosis_model');
        $data['diagnosis']=$this->diagnosis_model->get_diagnosis();
        $this->load->view('diagnosis_view',$data);
        //$this->load->view('template/footer');
    }

    function add_diagnosis(){
        $this->load->view('template/header');
        $this->load->view('add_diagnosis');
        $this->load->view('template/footer');
    }

    function add(){
        $this->load->model('diagnosis_model');
        $data = array('id' =>$this->input->post('id'),
        'patientId' =>$this->input->post('patientId'),
        'date' =>$this->input->post('date'),
        'uploadBy' =>$this->input->post('uploadBy'),
        'diagnosedby' =>$this->input->post('diagnosedby'),
        'diagnosesSummary' =>$this->input->post('diagnosesSummary'),
    );
    $this->diagnosis_model->add_diagnosis($data);
    redirect('diagnosis/get_diagnosis');
    }
    
    function delete_diagnosis($id){
        $this->load->model('diagnosis_model');
        $this->diagnosis_model->delete_diagnosis($id);
        redirect('diagnosis/get_diagnosis');
        }

    function update_diagnosis($id){
        $this->load->view('template/header');
        $this->load->model('diagnosis_model');
        $data['diagnosis'] = $this->diagnosis_model->read_diagnosis($id);
        $this->load->view('update_diagnosis',$data);
        $this->load->view('template/footer');
    }

    function update($x){
        $this->load->model('diagnosis_model');
        $data = array(
        'id' =>$this->input->post('id'),
        'patientId' =>$this->input->post('patientId'),
        'date' =>$this->input->post('date'),
        'uploadBy' =>$this->input->post('uploadBy'),
        'diagnosedby' =>$this->input->post('diagnosedby'),
        'diagnosesSummary' =>$this->input->post('diagnosesSummary'),
        );
        $this->diagnosis_model->update_diagnosis($x,$data);
        redirect('diagnosis/get_diagnosis');

    }
}