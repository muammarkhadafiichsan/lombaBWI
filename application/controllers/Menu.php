
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{


    public function profil()
    {
        $this->load->view('menu/profil');
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    }
}