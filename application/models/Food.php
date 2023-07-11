<?php
    defined('BASEPATH') OR exit('No direct script access allowed');   
    class Food extends CI_Model{
        private $id;
        private $food;
        private $id_type;

        public function getInstance(
            $id = '',
            $foodName='',
            $id_type = ''
        ){
            $food = new Food();
            $food->set_id($id);
            $food->set_food($foodName);
            $food->set_id_type($id_type);
            return $food;
        }
        
        public function set_id($id) {
            $this->id = $id;
        }

        public function get_id() {
            return $this->id;
        }
        public function set_food($food) {
            $this->food = $food;
        }

        public function get_food() {
            return $this->food;
        }
        public function set_id_type($id_type) {
            $this->id_type = $id_type;
        }

        public function get_id_type() {
            return $this->id_type;
        }

    
        public function get_All_Food(){
            $sql= "select * from food";
            $query = $this->db->query($sql);
            $food = array();
            foreach ($query->result() as $row) {  
                $food[] = $this->getInstance($row->id,$row->food,$row->id_type);
            }
            return $food;
        }

        public function add_Food(){
            $sql = "insert into ";
        }


    } 
?>