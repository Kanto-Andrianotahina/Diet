<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Target extends CI_Model{
        private $id;
        private $value;

        public function getInstance(
            $id = '',
            $value =''
        ){
            $target = new Target();
            $target->set_id($id);
            $target->set_value($value);
            return $target;
        }
        
        public function set_id($id) {
            $this->id = $id;
        }
        public function get_id() {
            return $this->id;
        }
        public function set_value($value) {
            $this->value = $value;
        }
        public function get_value() {
            return $this->value;
        }


        public function get_All_Target(){
            $sql= "select * from target";
            $query = $this->db->query($sql);
            $target = array();
            foreach ($query->result() as $row) {  
                $target[] = $this->getInstance($row->id,$row->value);
            }
            return $target;
        }
    }


?>