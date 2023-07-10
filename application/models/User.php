<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    
    private $name;
    private $first_name;
    private $birthday;
    private $email;
    private $id_gender;
    private $size;
    private $weigth;
    private $password;

    function set_name($name) {
        if (!isset($name)) throw new Exception("Champ nom est vide");
        $this->$name = $name;
    }

    function get_name() {
        return $this->$name;
    }

    function set_fisrt_name($first_name) {
        if (!isset($first_name)) throw new Exception("Champ prenom est vide");
        $this->$first_name = $first_name;
    }

    function get_fisrt_name() {
        return $this->$first_name;
    }

    function set_birthday($birthday) {
        if (!isset($birthday)) throw new Exception("Champ date de naissance est vide");
        $this->$birthday = $birthday;
    }

    function get_birthday() {
        return $this->$birthday;
    }

    function set_email($email) {
        if (!isset($email)) throw new Exception("Champ email est vide");
        $this->$email = $email;
    }

    function get_email() {
        return $this->$email;
    }

    function set_id_gender($id_gender) {
        if (!isset($id_gender)) throw new Exception("Champ genre est vide");
        $this->$id_gender = $id_gender;
    }

    function get_id_gender() {
        return $this->$id_gender;
    }

    function set_size($size) {
        if ($size <= 30) throw new Exception("Taille impossible, Taille doit etre superieur a 30 cm");
        $this->$size = $size;
    }

    function get_size() {
        return $this->$size;
    }

    function set_weigth($weigth) {
        if ($weigth <= 20) throw new Exception("Poids impossible, Poids doit etre superieur a 20 kilogramme");
        $this->$weigth = $weigth;
    }

    function get_weigth() {
        return $this->$weigth;
    }

    function set_password($password) {
        if (!isset($password)) throw new Exception("Password est vide");
        $this->$password = $password;
    }

    function get_password() {
        return $this->$password;
    }

    public function insert() {
        $sql = "INSERT INTO user (firstname, name, birthday, mail, id_gender, size, weigth, password) VALUES ('%s', '%s', '%s', '%s', %d, %d, %d, '%s')";
        $this->db->query(sprintf($sql, $this->$db->escape($this->get_first_name()), $this->$db->escape($this->get_name()), $this->$db->escape($this->get_birthday()), $this->$db->escape($this->get_email()), $this->$db->escape($this->get_id_gender()), $this->$db->escape($this->get_size()), $this->$db->escape($this->get_weigth()), $this->$db->escape($this->get_password())));
    }
    
    public function checkUser($mail,$password){
        $this->load->database();
        $sql = "SELECT mail, password FROM user where mail = '%s' AND password = '%s'";
        $request = sprintf($sql,$mail,$password);
        $this->db->query($request);
        $data = array();
        $data = $sql->result();
        if ($data['mail'] == $mail && $data['password'] == $password ) {
            $this->load->view('FO/home-User');
        }
        else {
            $this->load->view('FO/login-User');
        }
    }

}
