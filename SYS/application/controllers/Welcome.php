<?php

Class Welcome extends CI_Controller{
    public function index(){
        $this->load->view("Defaultheader");
        $this->load->view("Home.php");
    }

    
}

?>