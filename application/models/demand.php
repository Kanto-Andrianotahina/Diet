<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Demand extends CI_Model{
        private $id;
        private $id_user;
        private $id_code;
        private $num_code;
        private $price;
        private $state;
        private $firstname;
        private $date;


        public function getInstance(
            $id = '',
            $id_user ='',
            $id_code = '',
            $state = -10,
            $date =''
        ){
            $demand = new Demand();
            $demand->set_id($id);
            $demand->set_id_user($id_user);
            $demand->set_id_code($id_code);
            $demand->set_state($state);
            $demand->set_date($date);
        }
        public function set_id($id) {
            $this->id = $id;
        }
        public function get_id() {
            return $this->id;
        }
    
        public function set_id_user($id_user) {
            $this->id_user = $id_user;
        }
    
        public function get_id_user() {
            return $this->id_user;
        }
    
        public function set_id_code($id_code) {
            $this->id_code = $id_code;
        }
    
        public function get_num_code() {
            return $this->num_code;
        }
    
        public function set_num_code($num_code) {
            $this->num_code = $num_code;
        }
    
        public function get_id_code() {
            return $this->num_code;
        }
    
        public function set_price($price) {
            $this->price = $price;
        }
    
        public function get_price() {
            return $this->price;
        }
        
        public function set_state($state) {
            $this->state = $state;
        }
    
        public function get_state() {
            return $this->state;
        }

        public function set_date($date) {
            $this->date = $date;
        }
    
        public function get_date() {
            return $this->date;
        }

        public function set_firstname($fristname) {
            $this->firstname = $fristname;
        }
    
        public function get_firstname() {
            return $this->firstname;
        }


        public function get_all_demand(){
            $this->load->database();
            $query = $this->db->query("select demand.*, code.num_code, code.price, user.firstname from demand join code on code.id = demand.id_code join user on user.id = demand.id_user where demand.state = -10");
            $data = array();
            if ($query->num_rows() > 0) {
                $demand = new Demand();
                foreach ($query->result() as $row) {
                    $demand->set_num_code($row->num_code);
                    $demand->set_date($row->date);
                    $demand->set_price($row->price);
                    $demand->set_firstname($row->firstname);
                    $demand->set_id($row->id);
                    $data[] = $demand;
                }
            }else {
                $error = $this->db->error();
                echo "Error occurred: " . $error['message'];
            }
            return $data;
        }

        public function change_state($id_demande, $state) {
            $this->load->database();
            $query = sprintf("UPDATE demand SET state = '%s' WHERE id = %d", $state, $id_demande);
            $this->db->query($query);
        }

        public function get_demand_by_Id($id){
            $this->load->database();
            $query = $this->db->query("SELECT demand.id_user,demand.id_code,demand.state as state_demand, code.num_code FROM demand JOIN code ON demand.id_code = code.id WHERE demand.state = -10 AND demand.id = 1;"); 
            $data = array();
            if ($query->num_rows() > 0) {
                $data[] = $query->result();
            }else {
                $error = $this->db->error();
                echo "Error occurred: " . $error['message'];
            }
            return $data;
        }
    }
?>