<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class FoodChoiceController extends CI_Controller{
        
        public function index(){
            $this->load->model('Food');
            $this->load->model('Regime');
            $regime = $this->input->post('regime');
            $objectif = $this->input->post('objectif');
            $weightMin = $this->input->post('weight_min');
            $weightMax = $this->input->post('weigth_max');
            $dure = $this->input->post('dure');
            $price = $this->input->post('price');

            $regime = $this->Regime->addNewDiet($regime,$objectif,$weightMin,$weightMax,$dure,$price);
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