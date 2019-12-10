


        <?php  
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
       // $this->session->set_userdata('lastvisited',current_url());
        //$this->load->view('template/header');
        $this->load->view('home_view');
        $this->load->view('template/footer');
    }

    function lang_load($lang){
        $this->session->set_userdata('language',$lang);
        redirect($this->session->userdata('lasviseted'));
}
}?>