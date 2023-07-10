<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    class UserController extends CI_Controller {

        public function login() {
        
        } 

        public function formulaire() {
            $this->load->view("FO/form-User.php");
        }
        
        public function sign_up() {
            try {
                $this->load->model('User');
                $name = $this->input->post('name');
                $first_name = $this->input->post('firstName');
                $birthday = $this->input->post('birthday');
                $email = $this->input->post('email');
                $id_gender = $this->input->post('idGender');
                $size = $this->input->post('size');
                $weigth = $this->input->post('weigth');
                $password = $this->input->post('password');
                $user = $this->User->getInstance($name, $first_name, $birthday, $email, $id_gender, $size, $weigth, $password);
                $user->insert();
            } catch (\Exception $e) {
                echo $e;
            }
        }

    }
?>
