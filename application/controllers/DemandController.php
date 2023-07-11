<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class DemandController extends CI_Controller{

        public function index(){
            $this->load->model('Demand');
            $data['demand'] = $this->Demand->get_all_demand();
            $this->load->view('list-demand',$data);
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
