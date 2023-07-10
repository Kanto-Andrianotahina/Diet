<?php

use function PHPSTORM_META\map;

defined('BASEPATH') OR exit('No direct script access allowed');
    
    class FormController extends CI_Controller{

        public function index() {
            try {
                $this->load->model('Gender');
                $gender = $this->Gender->get_all_gender();
                $data['gender'] = $gender;
                $this->load->view('FO/form-User', $data);
            } catch (\Exception $e) {

            }map(4)
        }        

        
        
    }
?>