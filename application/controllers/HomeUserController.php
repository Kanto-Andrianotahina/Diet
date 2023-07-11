<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class HomeUserController extends CI_Controller {
        
        public function index() {
            $this->load->model('Code');
            $data['codes'] = $this->Code->get_all_code_dispo(-10);
            $data['page'] = "FO/acceuil.php";
            if(isset($_GET['message'])) $data['error'] = $_GET['message'];
            
            $this->load->view("FO/acceuil", $data);
        }
    }

?>