<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    
    private $id;
    private $name;
    private $first_name;
    private $birthday;
    private $email;
    private $id_gender;
    private $password;

    public function getInstance(
        $id = 0,
        $names = '',
        $first_names = '',
        $birthdays = '',
        $emails = '',
        $id_genders = 0,
        $passwords = '',
        $state
    ){
        $user = new User();
        $user->set_id($id);
        $user->set_name($names);
        $user->set_first_name($first_names);
        $user->set_birthday($birthdays);
        $user->set_email($emails);
        $user->set_id_gender($id_genders);
        $user->set_password($passwords);
        $user->set_state($state);
        return $user;
    }

    public function getInstance(
        $id_user = '',
        $size = 0,
        $weigth = 0
    ) {
        $user = new User();
        $user->set_id_user($id_user);
        $user->set_size($size);
        $user->set_weigth($weigth);
        return $user;
    }

    public function set_id_user($id_user) {
        if (empty($$id_user)) throw new Exception("Champ nom est vide");
        $this->id_user = $id_user;
    }

    public function get_id_user() {
        return $this->id_user;
    }

    public function set_size($size) {
        if ($size < 0) throw new Exception('Taille doit etre positif');
        $this->size = $size;
    }

    public function get_size() {
        return $this->size;
    }

    public function set_weigth($weigth) {
        if ($weigth < 0) throw new Exception("Poids doit etre positif");
        $this->weigth = $weigth;
    }

    public function set_name($name = '') {
        if (empty($name)) throw new Exception("Champ nom est vide");
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_id($id) {
        if (empty($id)) throw new Exception("Aucune d'identite retrouvee");
        $this->id = $id;
    }

    public function get_id() {
        return $this->id;
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

    public function set_password($password) {
        if (empty($password)) throw new Exception("Password est vide");
        $this->password = $password;
    }

    public function get_password() {
        return $this->password;
    }

    public function set_state($state) {
        if (empty($state)) throw new Exception("Etes - vous Admin ou Utilisateur?");
        $this->state = $state;
    }

    public function get_state() {
        return $this->state;
    }

    public function insert() {
        $this->load->database();
        $sql = "INSERT INTO user (firstname, name, birthday, mail, id_gender, password) VALUES (%s, %s, %s, %s, %d, %s)";
        $this->db->query(sprintf($sql, $this->db->escape($this->get_first_name()), $this->db->escape($this->get_name()), $this->db->escape($this->get_birthday()), $this->db->escape($this->get_email()), $this->get_id_gender(), $this->db->escape($this->get_password())));
        var_dump(sprintf($sql, $this->db->escape($this->get_first_name()), $this->db->escape($this->get_name()), $this->db->escape($this->get_birthday()), $this->db->escape($this->get_email()), $this->get_id_gender(), $this->db->escape($this->get_password())));
        $this->db->close();
    }

    public function checkUser($mail, $password) {
        $this->load->database();
        $sql = "SELECT * FROM user WHERE mail = '%s' AND password = '%s'";
        $request = sprintf($sql, $mail, $password);
        $query = $this->db->query($request);
    
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $user = $this->getInstance($row->id,$row->name, $row->firstname, $row->birthday, $row->mail, $row->id_gender, $row->password, $row->STATE);
            return $user;
        } else {
            throw new Exception("Aucun utilisateur correspondant");
        }
    }    

    public function getUserById($id) {
        $this->load->database();
        $sql = "SELECT * FROM user WHERE id = '%s'";
        $request = sprintf($sql, $id);
        $query = $this->db->query($request);
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $user = $this->getInstance($row->id,$row->name, $row->firstname, $row->birthday, $row->mail, $row->id_gender, $row->password, $row->STATE);
            return $user;
        } else {
            throw new Exception("Aucun utilisateur correspondant");
        }
    }


    public function check_password($pwd1,$pwd2) {
        if ($pwd1 == $pwd2){
            return $pwd1;
        } else throw new Exception("Mot de passe incorrect");
    }

    public function add_info() {
        $this->load->database();
        $sql = "INSERT INTO details_user (id_user, size, weigth, date) VALUES (%d, %d, %d, NOW());";
        $this->db->query(sprintf($sql, $this->db->escape($this->get_id_user()), $this->db->escape($this->get_size()), $this->db->escape($this->get_weigth())));
        $this->db->close();
    }
    

}
