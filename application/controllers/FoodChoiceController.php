<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class FoodChoiceController extends CI_Controller{
        
        public function index(){
            $this->load->model('Food');
            $temp = $this->Food->get_All_Food();
            $data['food']= $temp; 
            $this->load->view('food-choice',$data);
        }
        public function dropListFood(){
            $this->load->model('Food');
            $data['food'] = $this->Food->get_All_Food();
            $this->load->view('food-choice',$data);
        }
    }

?>