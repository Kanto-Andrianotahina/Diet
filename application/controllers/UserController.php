<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    class UserController extends CI_Controller{
        public function index(){
            $mail=$_POST['mail'];
            $password=$_POST['password'];
            $this->load->model('User');
            $this->User->checkUser($mail,$password);
        }
        
    }
?>
