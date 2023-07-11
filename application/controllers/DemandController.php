<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class DemandController extends CI_Controller {

        public function __construct() {
            parent::__construct();
            session_start();
    
            if (!isset($_SESSION['user'])) {
                redirect('UserController/');
            }
        }
    
        public function index() {
            $this->load->model('Demand');
            $data['demand'] = $this->Demand->get_all_demand();
            $this->load->view('list-demand', $data);
        }
    
        public function demand() {
            try {
                $this->load->model("Code");
                $numero = $this->input->get("numero");
                $code = $this->Code->verify_code($numero);
                $id_user = intval($_SESSION['id_user']);
                $code->demand_code($id_user);
                redirect(base_url("homeUserController"));
            } catch (\Exception $e) {
                redirect(base_url("homeUserController/index?message=".$e->getMessage()));
            }
            
        }
        
    
        public function List_demand() {
            $this->load->model('Demand');
            $data['demand'] = $this->Demand->get_all_demand();
            $this->load->view('DemandController/index', $data);
        }
    
        public function validate($id, $state) {
            $this->load->model('Demand');
            $this->Demand->change_state($id, $state);
            redirect('DemandController/index');
        }
    }
    
?>
