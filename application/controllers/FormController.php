<?php

defined('BASEPATH') OR exit('No direct script access allowed');
    
    class FormController extends CI_Controller{

        public function index($e = '') {
            try {
                $this->load->model('Gender');
                $gender = $this->Gender->get_all_gender();
                $data['gender'] = $gender;
                $data['error'] = $e;
                $this->load->view('FO/form-User', $data);
            } catch (\Exception $e) {

            }
        }  

        
        
    }
?>