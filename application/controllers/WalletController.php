<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class WalletController extends CI_Controller {
        
        public function index() {
            $this->load->model("Wallet");
            $data['wallet'] = $this->Wallet->create_wallet(2);
            $data['page'] = 'FO/wallet.php';
            $this->load->view("page.php", $data);
        }

    }

?>