<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gender extends CI_Model {
    
    private $id_gender;
    private $name;

    function set_name($name) {
        if (empty($name)) throw new Exception("Champ nom est vide");
        $this->$name = $name;
    }

    function get_name() {
        return $this->$name;
    }

    function set_id_gender($id_gender) {
        if (!isset($id_gender)) throw new Exception("Champ id est vide");
        $this->$id_gender = $id_gender;
    }

    function get_id_gender() {
        return $this->$id_gender;
    }

    function __construct($id_gender, $name) {
        $this->set_id_gender($id_gender);
        $this->set_name($name);
    }

    function get_all_gender() {
        $sql = "SELECT * FROM gender";
        $query = $this->db->query($sql);
        $genders = [];
        foreach ($query->result() as $row) {
            $genders[] = new Gender($row->id, $row->name);
        }
        return $genders;
    }

    function get_gender_by_id() {
        $sql = "SELECT * FROM gender WHERE id = %d";
        $query = $this->db->query(sprintf($sql, $this->$db->escape($this->get_id_gender())));
        $genders = [];
        foreach ($query->result() as $row) {
            $genders[] = new Gender($row->id, $row->name);
        }
        return $genders[0];
    }

}
