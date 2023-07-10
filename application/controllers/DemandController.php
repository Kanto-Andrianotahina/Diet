<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class DemandController extends CI_Controller{

        public function index(){
            $this->load->model('demand');
            $data['demand'] = $this->demand->get_all_demand();
            $this->load->view('list-demand',$data);
        }

        public function List_demand(){
            $this->load->model('demand');
            $data['demand'] = $this->demand->get_all_demand();
            $this->load->view('DemandController/index',$data);
        }
        public function validate(){
            $id_demand = $this->input->post('id_demand');
            $state = $this->input->post('state');
            $this->load->model('demand');
            $this->demand->change_state($id_demand,$state);
            redirect('DemandController/index');
        }
    }
?>
