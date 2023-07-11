<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    class UserController extends CI_Controller{

        public function index() {
            $this->load->view('FO\Login-User.php');
        }

        public function login() {
            try {
                $mail = $this->input->post('mail');
                $password = $this->input->post('password');
        
                $this->load->model('User');
                $user = $this->User->checkUser($mail, $password);
                session_start();
                $_SESSION['user'] = $user;
                if($user->get_state() == 1){
                    redirect('HomeUserController/index');
                }
                redirect('DemandController/');
            } catch (\Exception $e) {
                $data['error'] = $e->getMessage();
                $this->load->view('FO/Login-User', $data);
            }
        }
        
        
        public function sign_up() {
            try {
                $this->load->model('User');
                $name = $this->input->post('name');
                $first_name = $this->input->post('firstname');
                $birthday = $this->input->post('birthday');
                $email = $this->input->post('mail');
                $id_gender = $this->input->post('id_gender');
                $state = $this->input->post('state');
                $password =$this->User->check_password($this->input->post('password1'),$this->input->post('password2')) ;
                $user = $this->User->getInstance($name, $first_name, $birthday, $email, $id_gender, $password,$state);
                $user->insert();
                redirect('UserController/');
            } catch (\Exception $e) {
                redirect('FormController/index/'.$e->getMessage());
            }
        }

    }
?>
