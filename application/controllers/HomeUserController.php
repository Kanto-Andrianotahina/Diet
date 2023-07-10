<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    class FormUserController extends CI_Controller{

        public function index(){
            $this->load->view('FO/home-user.php');
        }

        
        
    }
?>