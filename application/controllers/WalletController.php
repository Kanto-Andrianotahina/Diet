<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class WalletController extends CI_Controller {
        public function __construct() {
            parent::__construct();
            session_start();
    
            if (!isset($_SESSION['id_user'])) {
                redirect('UserController/');
            }
        }

        public function index() {
            $this->load->model("Wallet");
            $data['wallet'] = $this->Wallet->create_wallet(2);
            $data['page'] = 'FO/wallet.php';
            $this->load->view("page.php", $data);
        }

    }

?>