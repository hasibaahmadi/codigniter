<?php
class Profile extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
                $this->load->view('template/header');

        //echo "hello codigniter";

        $this->load->view('profile_view');
        $this->load->view('template/footer');

    }
    function Edit (){
        $this->load->view('template/header');
        $this->load->view('edit_profile');
        $this->load->view('template/footer');
    }


}