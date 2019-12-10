<?php
    class pages extends CI_controller{
        public function view($page = 'index'){
            
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();

            }

            $data['name'] = ucfirst($page);

            $this->load->view('template/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('template/footer');
            
        }
    }