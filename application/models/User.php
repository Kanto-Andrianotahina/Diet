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

    public function getInstance(
        $names = '',
        $first_names = '',
        $birthdays = '',
        $emails = '',
        $id_genders = 0,
        $sizes = 0,
        $weigths  = 0,
        $passwords = ''
    ){
        $user = new User();
        $user->set_name($names);
        $user->set_first_name($first_names);
        $user->set_birthday($birthdays);
        $user->set_email($emails);
        $user->set_id_gender($id_genders);
        $user->set_size($sizes);
        $user->set_weigth($weigths);
        $user->set_password($passwords);
        return $user;
    }

    public function set_name($name = '') {
        if (empty($name)) throw new Exception("Champ nom est vide");
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_first_name($first_name) {
        if (empty($first_name)) throw new Exception("Champ prenom est vide");
        $this->first_name = $first_name;
    }

    public function get_first_name() {
        return $this->first_name;
    }

    public function set_birthday($birthday) {
        if (empty($birthday)) throw new Exception("Champ date de naissance est vide");
        $this->birthday = $birthday;
    }

    public function get_birthday() {
        return $this->birthday;
    }

    public function set_email($email) {
        if (empty($email)) throw new Exception("Champ email est vide");
        $this->email = $email;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_id_gender($id_gender) {
        if (empty($id_gender)) throw new Exception("Champ genre est vide");
        $this->id_gender = $id_gender;
    }

    public function get_id_gender() {
        return $this->id_gender;
    }

    public function set_size($size) {
        if ($size <= 30) throw new Exception("Taille impossible, Taille doit etre superieur a 30 cm");
        $this->size = $size;
    }

    public function get_size() {
        return $this->size;
    }

    public function set_weigth($weigth) {
        if ($weigth <= 20) throw new Exception("Poids impossible, Poids doit etre superieur a 20 kilogramme");
        $this->weigth = $weigth;
    }

    public function get_weigth() {
        return $this->weigth;
    }

    public function set_password($password) {
        if (empty($password)) throw new Exception("Password est vide");
        $this->password = $password;
    }

    public function get_password() {
        return $this->password;
    }

    public function insert() {
        $this->load->database();
        $sql = "INSERT INTO user (firstname, name, birthday, mail, id_gender, size, weigth, password) VALUES (%s, %s, %s, %s, %d, %d, %d, %s)";
        $this->db->query(sprintf($sql, $this->db->escape($this->get_first_name()), $this->db->escape($this->get_name()), $this->db->escape($this->get_birthday()), $this->db->escape($this->get_email()), $this->get_id_gender(), $this->get_size(), $this->get_weigth(), $this->db->escape($this->get_password())));
        var_dump(sprintf($sql, $this->db->escape($this->get_first_name()), $this->db->escape($this->get_name()), $this->db->escape($this->get_birthday()), $this->db->escape($this->get_email()), $this->get_id_gender(), $this->get_size(), $this->get_weigth(), $this->db->escape($this->get_password())));
        $this->db->close();
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
