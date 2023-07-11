<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Code extends CI_Model {
        
        private $id;
        private $num_code;
        private $price;
        private $id_state;

        public function getInstace(
            $id = '',
            $num_code ='',
            $price = 0,
            $state = 1
        ){
            $code = new Code();
            $code->set_id($id);
            $code->set_num_code($num_code);
            $code->set_price($price);
            $code->set_state($state);
            return $code;
        }
        
        public function set_id($id) {
            $this->id = $id;
        }

        public function get_id() {
            return $this->id;
        }

        public function set_num_code($num_code = '') {
            if (empty($num_code)) throw new Exception("Champ code est vide");
            $this->num_code = $num_code;
        }

        public function get_num_code() {
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

        public function get_id_state() {
            return $this->id_state;
        }

        public function get_all_code_dispo($state) {
            $this->load->database();
            $sql = "select * from code where state = %d";
            $request = sprintf($sql,$state);
            $result = $this->db->query($request);
            $data = array();
            foreach ($result->result() as $row) {
                $data[] = $this->getInstace($row->id, $row->num_code, $row->price, $row->state);
            }
            $this->db->close();
            return $data;
        }

        public function get_code_by_num_code($num_code) {
            $this->load->database();
            $sql = "select * from code where num_code = %d";
            $request = sprintf($sql, $num_code);
            $result = $this->db->query($request);
            $data = array();
            foreach ($result->result() as $row) {
                $data[] = $this->getInstace($row->id, $row->num_code, $row->price, $row->state);
            }
            $this->db->close();
            return (count($data) > 0) ? $data[0] : null;
        }

        public function verify_code($num_code) {
            $code = $this->get_code_by_num_code($num_code);
            if ($code == null) throw new Exception("Code n'existe pas");
            if ($code->state == 10) throw  new Exception("Ce code a ete deja utilise");
            return $code;
        }

        public function demand_code($id_user) {
            $this->load->database();
            $this->db->trans_begin();
            $sql = "INSERT INTO demand (id_user, id_code, state, date) VALUES (%d, %d, 1, NOW());";
            $this->db->query(sprintf($sql, $this->db->escape($id_user), $this->get_id()));
            $sql = "UPDATE code SET state = 0 WHERE id = %d;";
            $this->db->query(sprintf($sql, $this->get_id()));
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            } else {
                $this->db->trans_commit();
            }
            $this->db->close();
        }

    }

?>