<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class RegimeController extends CI_Controller{

        public function index(){
            $this->load->view('regime');
        }

        public function list_objectif(){
            $this->load->model('Regime');
            $regimes['regime']->
        }
    }
?>