<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Wallet extends CI_Model {

        private $id;
        private $id_user;
        private $id_code;
        private $code;
        private $date;
        private $profit;
        private $wallets;
        private $loss;
        private $total;

        public function set_id($id) {
            if (empty($id)) throw new Exception("Id est vide");
            $this->id = $id;
        }

        public function get_id() {
            return $this->id;
        }

        public function set_id_user($id_user) {
            if (empty($id_user)) throw new Exception("ID user est vide");
            $this->id_user = $id_user; 
        }

        public function get_id_user() {
            return $this->id_user;
        }

        public function set_id_code($id_code) {
            if (empty($id_code)) throw new Exception("ID user est vide");
            $this->id_code = $id_code; 
        }

        public function get_id_code() {
            return $this->id_code;
        } 

        public function set_code($code) {
            $this->code = $code;
        }

        public function get_code() {
            return $this->code;
        }

        public function set_date($date) {
            if (empty($date)) throw new Exception("Date est vide");
            $this->date = $date; 
        }

        public function get_date() {
            return $this->date;
        }

        public function set_profit($profit) {
            if ($profit < 0) throw new Exception("Profit doit etre positif");
            $this->profit = $profit;
        }

        public function get_profit() {
            return $this->profit;
        }
        
        public function set_loss($loss) {
            if ($loss < 0) throw new Exception("Depense doit etre positif");
            $this->loss = $loss;
        }

        public function get_loss() {
            return $this->loss;
        }

        public function set_wallets($wallets) {
            $this->wallets = $wallets;
        }

        public function get_wallets() {
            return $this->wallets;
        }

        public function set_total($total) {
            $this->total = $total;
        }

        public function get_total() {
            return $this->total;
        }

        public function getInstace (
            $id = '',
            $id_user = '',
            $code = '',
            $date = '',
            $profit = 0,
            $loss = 0
        ) {
            $wallet = new Wallet();
            $wallet->set_id($id);
            $wallet->set_id_user($id_user);
            $wallet->set_code($code);
            $wallet->set_date($date);
            $wallet->set_profit($profit);
            $wallet->set_loss($loss);
            return $wallet;
        }

        public function get_wallet_by_id($id_user) {
            $this->load->database();
            $sql = "SELECT * 
                    FROM wallet w
                        JOIN code c ON w.id_code=c.id
                    WHERE id_user = %d;";
            $request = sprintf($sql, $id_user);
            $result = $this->db->query($request);
            $data = array();
            $this->load->model("Code");
            foreach ($result->result() as $row) {
                $data[] = $this->getInstace($row->id, $row->id_user, $this->Code->getInstace($row->id_code, $row->num_code, $row->price, $row->state), $row->date, $row->profit, $row->loss);
            }
            $this->db->close();
            return $data;
        }
        
        public function create_wallet($id_user) {
            $this->load->model("Wallet");
            $wallet = new Wallet();
            $wallet->set_wallets($wallet->get_wallet_by_id($id_user));
            $profit = 0;
            $loss = 0;
            foreach ($wallet->get_wallets() as $money) {
                $profit += $money->get_profit();
                $loss += $money->get_loss();
            }
            var_dump($profit);
            var_dump($loss);
            $wallet->set_total($profit - $loss);
            return $wallet;
        }

    }