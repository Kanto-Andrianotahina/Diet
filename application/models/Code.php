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
        $id_state = 1
    ){
        $code = new Code();
        $code->set_id($id);
        $code->set_num_code($num_code);
        $code->set_price($price);
        $code->set_id_state($id_state);
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

    public function set_id_state($id_state) {
        $this->id_state = $id_state;
    }

    public function get_id_state() {
        return $this->id_state;
    }

    public function get_all_code_dispo($state){
        $this->load->database();
        $sql = "select * from code where id = '%s'";
        $request = sprintf($sql,$state);
        $this->db->query($request);
        $data = array();
        if ($request->num_rows() > 0) {
            $data = $request->result();
        }else {
            $error = $this->db->error();
            echo "Error occurred: " . $error['message'];
        }
    }

}

?>