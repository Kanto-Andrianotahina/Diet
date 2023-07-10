<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class HomeUserController extends CI_Controller {
        
        public function index() {
            $this->load->model('Code');
            $data['codes'] = $this->Code->get_all_code_dispo(1);
            $this->load->view("FO/acceuil.php", $data);
        }

    }

?>