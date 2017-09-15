<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

    public function index()
    {
        $this->load->view("login/login");
    }

    public function novoUsuario() {
        $this->load->view("usuarios/novo");
    }

    public function novaQuestao() {
        $this->load->view("questoes/nova");
    }

}