<?php
class theloai extends DBControllers{
    
        
        public function __construct(){
            $data = array();
            
            parent::__construct();
    
        }
        public function list_theloai(){
            
            $this->load->view('header');
            $theloaimodel = $this->load->model('theloaimodel');
            $table_theloai = 'theloai';
            $data['theloai'] = $theloaimodel->theloai($table_theloai);
            $this->load->view('theloai', $data);
            $this->load->view('footer');
        }
        public function theloaibyid(){
            
            $this->load->view('header');
            $theloaimodel = $this->load->model('theloaimodel');
            $id = 3;
            $table_theloai = 'theloai';
            $data['theloaibyid'] = $theloaimodel->theloaibyid($table_theloai, $id);
            $this->load->view('theloaibyid', $data);
            $this->load->view('footer');
        }
    
}

?>