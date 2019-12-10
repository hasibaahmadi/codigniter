<?php

class Department extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    

 function get_department(){
    $this->load->view('template/header');
    $this->load->model('department_model');
    $data['departments']=$this->department_model->get_department();
    $this->load->view('department_view',$data);
    //$this->load->view('template/footer');

    }

    function add_department(){
        $this->load->view('template/header');
        $this->load->view('new_department');
        $this->load->view('template/footer');
        } 

        function add(){
            $this->load->model('department_model');
            $data = array('id' =>$this->input->post('id') ,
            'departmentName' =>$this->input->post('departmentName') ,
            'departmentDescriptio' =>$this->input->post('departmentDescriptio') ,
            'numberOfEmployees' =>$this->input->post('numberOfEmployees'));
            $this->department_model->add_department($data);
            redirect('department/get_department');
        }

        function update_department($id){
            $this->load->view('template/header');
            $this->load->model('department_model');
            $data['department'] = $this->department_model->read_department($id);
            $this->load->view('update_department',$data);
            $this->load->view('template/footer');
        }

        function update($x){
            $this->load->model('department_model');
            $data = array('id' =>$this->input->post('id'),
            'departmentName' =>$this->input->post('departmentName'),
            'departmentDescriptio' =>$this->input->post('departmentDescriptio'),
            'numberOfEmployees' =>$this->input->post('numberOfEmployees')
            );
            $this->department_model->update_department($x,$data);
            redirect('department/get_department');
            }

            function delete($id){
                $this->load->model('department_model');
                $this->department_model->delete_department($id);
                redirect('department/get_department');
                }
            
}