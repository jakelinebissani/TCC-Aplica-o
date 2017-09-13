<?php
class Alternativas_model extends CI_Model {
    public function salva($alternativas) {
        $this->db->insert("alternativas", $alternativas);
    }
}