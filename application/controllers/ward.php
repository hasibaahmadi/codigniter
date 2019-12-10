<?php
class Ward extends CI_Controller {
    function __construct() {
    parent::__construct();
    }

    function get_ward(){
        $this->load->view('template/header');
        $this->load->model('ward_model');
        $data['wards']=$this->ward_model->get_ward();
        $this->load->view('ward_view',$data);
        //$this->load->view('template/footer');
    }

    function add_ward(){
        $this->load->view('template/header');
        $this->load->view('new_ward');
        $this->load->view('template/footer');
    }

    function add(){
        $this->load->model('ward_model');
        $data = array('id' =>$this->input->post('id'),
        'wardName' =>$this->input->post('wardName'),
        'numberOfBed' =>$this->input->post('numberOfBed'),
        'numberOfStaff' =>$this->input->post('numberOfStaff'),
        'numberOfPatient' =>$this->input->post('numberOfPatient'));
        $this->ward_model->add_ward($data);
        redirect('ward/get_ward');
        }

     function delete($id){
        $this->load->model('ward_model');
        $this->ward_model->delete_ward($id);
        redirect('ward/get_ward');
        }

        function update_ward($id){
            $this->load->view('template/header');
            $this->load->model('ward_model');
            $data['ward'] = $this->ward_model->read_ward($id);
            $this->load->view('update_ward',$data);
            $this->load->view('template/footer');
        }

        function update($x){
            $this->load->model('ward_model');
            $daat=array('id'=>$this->input->post('id'),
            'wardName'=>$this->input->post('wardName'),
            'numberOfBed'=>$this->input->post('numberOfBed'),
            'numberOfStaff'=>$this->input->post('numberOfStaff'),
            'numberOfPatient'=>$this->input->post('numberOfPatient'));
            $this->ward_model->update_ward($x,$data);
        }
}