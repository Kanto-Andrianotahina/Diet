<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class RegimeController extends CI_Controller{

        public function index(){
            $this->load->model('Target');
            $temp = $this->Target->get_All_Target();
            $data['target'] = $temp;
            $this->load->view('regime',$data);
        }

        public function list_objectif(){
            $this->load->model('Target');
            $temp = $this->Target->get_All_Target();
            $data['target'] = $temp;
            $this->load->view('regime',$data);
        }

    }
?>