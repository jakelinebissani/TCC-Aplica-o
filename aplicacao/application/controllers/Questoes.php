<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Questoes extends CI_Controller {

    public function nova() {
        $this->output->enable_profiler(TRUE);
        $questao = array(
            "enunciado" => $this->input->post("enunciado"),

        );
        $this->load->model("questoes_model");
        $this->questoes_model->salvar($questao);
        $this->load->view("questoes/nova");
    }

    public function novasAlternativas() {
        $this->output->enable_profiler(TRUE);
        $questao = array(
            "enunciado" => $this->input->post("enunciado"),

        );
        $this->load->model("alternativas_model");
        $this->alternativas_model->salvar($questao);
        $this->load->view("questoes/nova");
    }
}