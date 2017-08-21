<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }

    public function logar()
    {

        $usuario = $this->input->post("usuario");
        $senha = ($this->input->post("senha"));

        if ($usuario == "jak@mail.com" && $senha == '123') {
            $this->session->set_userdata("logado", 1);
            redirect(base_url());
        } else {
            $dados['erro'] = "Usuário/Senha incorretos";
            $this->load->view("login", $dados);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("logado");
        redirect(base_url());

    }

}
