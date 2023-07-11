<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class DemandController extends CI_Controller{

        public function index(){
            $this->load->model('Demand');
            $data['demand'] = $this->Demand->get_all_demand();
            $this->load->view('list-demand',$data);
    class DemandController extends CI_Controller {
        
        public function demand() {
            $this->load->model("Code");
            $numero = $this->input->get("numero");
            $code = $this->Code->verify_code($numero);
            $code->demand_code(2);
            redirect(base_url("homeUserController"));
        }

        public function List_demand(){
            $this->load->model('Demand');
            $data['demand'] = $this->Demand->get_all_demand();
            $this->load->view('DemandController/index',$data);
        }
        public function validate($id,$state){
            $this->load->model('Demand');
            $this->Demand->change_state($id,$state);
            redirect('DemandController/index');
        }
    }
?>
