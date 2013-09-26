<?php

Class Panel_model extends CI_Model {

    public function selectMarcas() {
        $result = $this->db->query("SELECT idmarca,marca_descripcion FROM marcas");
        return $result->result_array();
    }

    public function ArregloYears($arreglo) {
        foreach ($arreglo as $a) {
            $data[$a]=$a;
        }
        return $data;
    }

}

?>
