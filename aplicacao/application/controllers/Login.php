<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function autenticar()
    {
        $this->output->enable_profiler(TRUE);
        $this->load->model("Usuarios_model");
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));
        $usuario = $this->Usuarios_model->buscaPorEmailESenha($email, $senha);
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success" ,"Logado com sucesso");
            $this->load->view("home/home");
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha inválida");
            redirect('/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("success", "Deslogado com sucesso");
        redirect('/');
    }
}