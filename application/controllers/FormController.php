<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    class FormController extends CI_Controller{

        public function form(){
            // $this->load->
            $this->load->view('FO/form-User');
        }

        
        
    }
?>