<?php
    class homeController extends DBControllers{
    public function __construct(){
        $data = array();
        parent::__construct();

    }
    public function homepage(){
        $this->load->view('header');
        $homemodel = $this->load->model('homemodel');
        $data['theloai'] = $homemodel->theloai();
        $this->load->view('home',$data);
        $this->load->view('footer');
    }

        
}
    

?>