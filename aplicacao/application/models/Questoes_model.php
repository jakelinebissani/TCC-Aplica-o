<?php
class Questoes_model extends CI_Model {
    public function salvar($questao) {
        $this->db->insert("questoes", $questao);
    }
}