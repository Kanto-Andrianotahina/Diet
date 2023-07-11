<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Regime extends CI_Model{
        private $id;
        private $id_target;
        private $weigth_start;
        private $weigth_end;
        private $dure;
        private $price;


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
    }
?>
