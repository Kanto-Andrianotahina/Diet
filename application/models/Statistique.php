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

    public static function getDataMonth($mois,$annee)
    {
        try{
            $req= "SELECT COUNT(d.id) AS nb_user, d.date as date
            FROM details_user as d
            join com
            WHERE EXTRACT(MONTH FROM d.date) = %s
            AND EXTRACT(YEAR FROM d.date) = %s
            and 
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

    public static function getDataClientsYear($annee)
    {
        try{
           
            $req = "SELECT EXTRACT(MONTH FROM sign_up_date) AS month,
            COUNT(id_client) AS nb_user_clients
            FROM client
            WHERE EXTRACT(YEAR FROM sign_up_date) = %s and id_status = 1
            GROUP BY EXTRACT(MONTH FROM sign_up_date)
            ORDER BY EXTRACT(MONTH FROM sign_up_date)";
            $req = sprintf($req,$annee);
            $category = DB::select($req);
            $res = array();
            foreach ($category as $result) {
                $statique = new Statistique();
                $statique->setnb_user($result->nb_user_clients);
                $statique->setMonth($result->month);
                // $statique->setDate($result->sign_up_date);
                $res[] = $statique;
            }
            return $res;
        }catch(Exception $e){
            throw new Exception("Impossible d'avoir ");
        }
    }

    public static function getDataUsersMonth($mois,$annee)
    {
        try{
            $req= "SELECT COUNT(id_users) AS nb_user, sign_up_date 
            FROM users
            WHERE EXTRACT(MONTH FROM sign_up_date) = %s
            AND EXTRACT(YEAR FROM sign_up_date) = %s
            GROUP BY sign_up_date
            ORDER BY sign_up_date;";
            $req = sprintf($req,$mois,$annee);
            $category = DB::select($req);
            $res = array();
            foreach ($category as $result) {
                $statique = new Statistique();
                $statique->setnb_user($result->nb_user);
                $statique->setDate($result->sign_up_date);
                $res[] = $statique;
            }
            return $res;
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public static function getDataUsersYear($annee)
    {
        try {
            $req = "SELECT EXTRACT(MONTH FROM sign_up_date) AS month,
            COUNT(id_users) AS nb_user_users
            FROM users
            WHERE EXTRACT(YEAR FROM sign_up_date) = %s
            GROUP BY EXTRACT(MONTH FROM sign_up_date)
            ORDER BY EXTRACT(MONTH FROM sign_up_date)";
            $req = sprintf($req, $annee);
            $category = DB::select($req);
            $res=[];
            foreach ($category as $result) {
                $statique = new Statistique();
                $statique->setnb_user($result->nb_user_users);
                $statique->setMonth($result->month);
                // $statique->setDate($result->sign_up_date);
                $res[] = $statique;
            }
            return $res;
        } catch (Exception $e) {
            throw new Exception("Impossible d'obtenir les données");
        }
    }

    public static function getDataTerrainsMonth($mois,$annee,$category)
    {
        try{
            $req= "SELECT COUNT(id_field) AS nb_user, insert_date 
            FROM field 
            WHERE EXTRACT(MONTH FROM insert_date) = %s
            AND EXTRACT(YEAR FROM insert_date) = %s
            and state = 1
            GROUP BY insert_date
            ORDER BY insert_date;";
            if($category > 0){
                $req= "SELECT COUNT(id_field) AS nb_user, insert_date 
                FROM field 
                WHERE EXTRACT(MONTH FROM insert_date) = %s
                AND EXTRACT(YEAR FROM insert_date) = %s
                AND id_category = %s
                GROUP BY insert_date
                ORDER BY insert_date;";
                $req = sprintf($req,$mois,$annee,$category);
            }else{
                $req = sprintf($req,$mois,$annee);
            }
            
            $category = DB::select($req);
            $res = array();
            foreach ($category as $result) {
                $statique = new Statistique();
                $statique->setnb_user($result->nb_user);
                $statique->setDate($result->insert_date);
                $res[] = $statique;
            }
            return $res;
        }catch(Exception $e){
            throw new Exception("Impossible d'avoir ");
        }
    }

    public static function getDataTerrainsYear($annee,$category)
    {
        try {
            $req = "SELECT EXTRACT(MONTH FROM insert_date) AS month,
            COUNT(id_field) AS nb_user_field
            FROM field
            WHERE EXTRACT(YEAR FROM insert_date) = %s
            and state = 1
            GROUP BY EXTRACT(MONTH FROM insert_date)
            ORDER BY EXTRACT(MONTH FROM insert_date) ";
            if($category > 0){
                $req = "SELECT EXTRACT(MONTH FROM insert_date) AS month,
                COUNT(id_field) AS nb_user_field
                FROM field
                WHERE EXTRACT(YEAR FROM insert_date) = %s
                AND id_category = %s
                GROUP BY EXTRACT(MONTH FROM insert_date)
                ORDER BY EXTRACT(MONTH FROM insert_date) ";
                $req = sprintf($req,$annee,$category);
            }else{
                $req = sprintf($req,$annee);
            }
            $category = DB::select($req);
            $res=[];
            foreach ($category as $result) {
                $statique = new Statistique();
                $statique->setnb_user($result->nb_user_field);
                $statique->setMonth($result->month);
                // $statique->setDate($result->sign_up_date);
                $res[] = $statique;
            }
            return $res;
        } catch (Exception $e) {
            throw new Exception("Impossible d'obtenir les données");
        }
    }

    public static function verifierdonnee($ini)
    {
        if($ini == 'mois' ){
            return [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        }else{
            return [0,0,0,0,0,0,0,0,0,0];
        }
    }

    public static function getDonneenb_user($database)
    {
        $res=[];
        $month = 1;
        $jour = 1;
        $ini = 'annee';
        for($k=0; $k<count($database); $k++){
            if($database[$k]->getMonth() !=null){
                for($i = 0;$i<$database[$k]->getMonth()-$month; $i++){
                    $res = [...$res,0];
                }
                $res = [...$res,$database[$k]->getnb_user()];
                if($k == count($database)-1){
                    for($i = 0;$i<12-$database[$k]->getMonth(); $i++){
                        $res = [...$res,0];
                    }
                }
                $month = count($res)+ 1;
            }else{
                $j = date("d", strtotime($database[$k]->getDate()));
                for($i = 0;$i<$j-$jour; $i++){
                    $res = [...$res,0];
                }
                $res = [...$res,$database[$k]->getnb_user()];
                if($k == count($database)-1){
                    for($i = 0;$i<31-$j; $i++){
                        $res = [...$res,0];
                    }
                }
                $jour = count($res)+ 1;
                $ini = 'mois';
            } 
        }
        if(count($database) ==0)
        {
            $res = Statistique::verifierdonnee($ini);
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

    public function StatField() {
        try{
            $requette = "select count(id_field)as id_field, f.id_category, c.category from field f
            join category c on c.id_category = f.id_category
            group by f.id_category, c.category";

            $field = DB::select($requette);
            $res = array();

            if(count($field) > 0){
                foreach($field as $result){
                    $temp = new Statistique();
                    $temp->setId_field($result->id_field);
                    $temp->setId_category($result->id_category);
                    $temp->setCategory($result->category);
                    $res[] = $temp;
                }
            }
            return $res;
        } catch(Exception $e){
            $e->getMessage();
        }
    }
}
