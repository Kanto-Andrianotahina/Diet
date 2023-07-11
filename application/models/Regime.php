<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Regime extends CI_Model{
        private $id;
        private $diet;
        private $id_target;
        private $weigth_start;
        private $weigth_end;
        private $dure;
        private $price;


        public function getInstance(
            $id = '',
            $diet = '',
            $id_target ='',
            $weigth_start = 1,
            $weigth_end = '',
            $dure ='',
            $price =''
        ){
            $regime = new Regime();
            $regime->set_id($id);
            $regime->set_diet($diet);
            $regime->set_id_target($id_target);
            $regime->set_weigth_start($weigth_start);
            $regime->set_weigth_end($weigth_end);
            $regime->set_dure($dure);
            $regime->set_price($price);
        }
        public function set_id($id) {
            $this->id = $id;
        }
        public function get_id() {
            return $this->id;
        }
        public function set_diet($diet) {
            $this->diet = $diet;
        }
        public function get_diet() {
            return $this->diet;
        }
        public function set_id_target($id_target) {
            $this->id_target = $id_target;
        }
        public function get_id_target() {
            return $this->id_target;
        }
        public function set_weigth_start($weigth_start) {
            $this->weigth_start = $weigth_start;
        }
        public function get_weigth_start() {
            return $this->weigth_start;
        }
        public function set_weigth_end($weigth_end) {
            $this->weigth_end = $weigth_end;
        }
        public function get_weigth_end() {
            return $this->weigth_end;
        }
        public function set_dure($dure) {
            $this->dure = $dure;
        }
        public function get_dure() {
            return $this->dure;
        }
        public function set_price($price) {
            $this->price = $price;
        }
        public function get_price() {
            return $this->price;
        }
        


        public function addNewDiet($diet,$target,$min,$max,$dure,$price){
            $this->load->database();
            $sql = "insert into diet (diet,id_target,weigth_start,weigth_end,dure,price) values (%s,%d,%d,%d,%d,%d)"; 
            
            $this->db->close();
        }
    }
?>
