<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Model {

    private $nb_user;
    private $price;
    private $month;
    private $date;

    public function get_nb_user()
    {
        return $this->nb_user;
    }
    public function set_nb_user($value)
    {
        $this->nb_user = $value;
    }

    public function get_month()
    {
        return $this->month;
    }
    public function set_month($value)
    {
        $this->month = $value;
    }

    public function get_price()
    {
        return $this->price;
    }
    public function set_price($value)
    {
        $this->price = $value;
    }

    public function get_date()
    {
        return $this->date;
    }
    public function set_date($value)
    {
        $this->date = $value;
    }

    public function __construct()
    {

    }

    public function getDataMonth($mois,$annee)
    {
        try{
            $req= "SELECT COUNT(d.id) AS nb_user, d.date as date
            FROM details_user as d
            WHERE EXTRACT(MONTH FROM d.date) = 4
            AND EXTRACT(YEAR FROM d.date) = 2023
            GROUP BY d.date
            ORDER BY d.date;";
            $req = sprintf($req,$mois,$annee);
            $result = $this->db->query($req);
            $res = array();
            foreach ($result->result() as $row) {
                $statique = new Statistique();
                $statique->set_nb_user($row->nb_user);
                $statique->set_date($row->date);
                $res[] = $statique;
            }
            return $res;
        }catch(Exception $e){
            throw new Exception("Impossible d'avoir ");
        }
    }

    public function getDataYear($annee)
    {
        try{
           
            $req = "SELECT EXTRACT(MONTH FROM date) AS month,
            COUNT(id) AS nb_user
            FROM details_user
            WHERE EXTRACT(YEAR FROM date) = 2023
            GROUP BY EXTRACT(MONTH FROM date)
            ORDER BY EXTRACT(MONTH FROM date)";
            $req = sprintf($req,$annee);
            $result = $this->db->query($req);
            $res = array();
            foreach ($result->result() as $row) {
                $statique = new Statistique();
                $statique->set_nb_user($row->nb_user);
                $statique->set_month($row->month);
                $res[] = $statique;
            }
            return $res;
        }catch(Exception $e){
            throw new Exception("Impossible d'avoir ");
        }
    }

    public function verifierdonnee()
    {
        return array (0,0,0,0,0,0,0,0,0,0);
    }

    public function getDonneenb_user($database)
    {
        $res = array();
        $month = 1;
        for ($k = 0; $k < count($database); $k++) {
            if ($database[$k]->get_month() != null) {
                for ($i = 0; $i < $database[$k]->get_month() - $month; $i++) {
                    $res[] = 0;
                }
                $res[] = $database[$k]->get_nb_user();
                if ($k == count($database) - 1) {
                    for ($i = 0; $i < 12 - $database[$k]->get_month(); $i++) {
                        $res[] = 0;
                    }
                }
                $month = count($res) + 1;
            }else{
                // $j = date("d", strtotime($database[$k]->getDate()));
                // for($i = 0;$i<$j-$jour; $i++){
                //     $res = [...$res,0];
                // }
                // $res = [...$res,$database[$k]->getnb_user()];
                // if($k == count($database)-1){
                //     for($i = 0;$i<31-$j; $i++){
                //         $res = [...$res,0];
                //     }
                // }
                // $jour = count($res)+ 1;
                // $ini = 'mois';
            } 
        }
        if(count($database) ==0)
        {
            $res = $this->verifierdonnee();
        }
        return $res;
    }

    public static function nombre($database)
    {
        $res = 0;
        for($i=0; $i<count($database); $i++)
        {
            $res = $res + $database[$i];
        }
        return $res;
    }
}
