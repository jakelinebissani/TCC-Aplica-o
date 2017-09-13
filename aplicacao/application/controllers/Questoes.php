<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Questoes extends CI_Controller {
    public function novaQuestao() {
        $this->output->enable_profiler(TRUE);
        $questao = array(
            "descricao" => $this->input->post("descricao"),

        );

        $this->load->model("questoes_model");
        $this->questoes_model->salvar($questao);
        redirect('/');
    }
}