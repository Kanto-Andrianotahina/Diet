<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class DemandController extends CI_Controller {
        
        public function demand() {
            $this->load->model("Code");
            $numero = $this->input->get("numero");
            $code = $this->Code->verify_code($numero);
            $code->demand_code(2);
            redirect(base_url("homeUserController"));
        }

    }

?>