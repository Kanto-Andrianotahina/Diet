<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class demand extends CI_Model{
        private $id;
        private $id_user;
        private $id_code;
        private $state;
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
    
        public function get_id_code() {
            return $this->id_code;
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


        public function get_all_demand(){
            $this->load->database();
            $query = $this->db->query("select * from demand where etat = -10");
            $data = array();
            if ($query->num_rows() > 0) {
                $data = $query->result();
            }else {
                $error = $this->db->error();
                echo "Error occurred: " . $error['message'];
            }
        }

        public function change_state($id_demande, $state) {
            $this->load->database();
            $query = sprintf("UPDATE demand SET state = '%s' WHERE id = %d", $state, $id_demande);
            $this->db->query($query);
        }
    }
?>