<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class StatistiqueController extends CI_Controller{
        public function __construct() {
            parent::__construct();
            session_start();

            if (!isset($_SESSION['id_user'])) {
                redirect('UserController/');
            }
            $this->load->model('Statistique');
        }

        public function index(){
            $nb = $this->Statistique->getDataYear(2023);
            $data['nb_user'] = json_encode($this->Statistique->getDonneenb_user($nb));
            $this->load->view('chart');
        }

    }
?>