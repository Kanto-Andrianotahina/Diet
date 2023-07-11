<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class StatistiqueController extends CI_Controller{
        public function __construct() {
            parent::__construct();
            session_start();

            if (!isset($_SESSION['id_user'])) {
                redirect('UserController/');
            }
        }

        public function index(){
            $this->load->view('chart');
        }

    }
?>