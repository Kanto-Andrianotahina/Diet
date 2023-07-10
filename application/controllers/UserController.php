<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    class UserController extends CI_Controller{

        public function login(){
            $this->load->model('User');
        }
    }
?>