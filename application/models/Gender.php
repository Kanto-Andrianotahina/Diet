<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gender extends CI_Model {
    
    private $id_gender;
    private $name;

    public function set_name($name) {
        if (empty($name)) {
            throw new Exception("Champ nom est vide");
        }
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_id_gender($id_gender) {
        if (!isset($id_gender)) {
            throw new Exception("Champ id est vide");
        }
        $this->id_gender = $id_gender;
    }

    public function get_id_gender() {
        return $this->id_gender;
    }

    public function getInstance($id_gender, $name) {
        $gender = new Gender();
        $gender->set_id_gender($id_gender);
        $gender->set_name($name);
        return $gender;
    }

    public function get_all_gender() {
        $sql = "SELECT * FROM gender";
        $query = $this->db->query($sql);
        $genders = array();
        foreach ($query->result() as $row) {
            $genders[] = $this->getInstance($row->id, $row->gender);
        }
        return $genders;
    }

    public function get_gender_by_id() {
        $sql = "SELECT * FROM gender WHERE id = %d";
        $query = $this->db->query(sprintf($sql, $this->db->escape($this->get_id_gender())));
        $genders = array();
        foreach ($query->result() as $row) {
            $genders[] = $this->getInstance($row->id, $row->name);
        }
        return $genders[0];
    }

}