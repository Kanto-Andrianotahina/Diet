<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    class UserController extends CI_Controller {

        public function login() {
        
        }
        
        public function sign_up() {
            try {
                $this->load->model('User');
                $name = "Tendry";
                $first_name = "Ny Avo";
                $birthday = "2023-09-01";
                $email = "tendry@gmail.com";
                $id_gender = 3;
                $size = 120;
                $weigth = 40;
                $password = "Tendry";
                $user = $this->User->getInstance($name, $first_name, $birthday, $email, $id_gender, $size, $weigth, $password);
                $user->insert();
            } catch (\Exception $e) {
                echo $e;
            }
        }

    }
?>