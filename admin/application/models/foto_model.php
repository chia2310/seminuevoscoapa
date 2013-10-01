<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Foto_model extends CI_Model {

    function subir($files, $id) {
        //print_r($files);
        //echo $id;
        //$articulo = $this->get_one_articulo2($id);
        $path = './fotos/' . $id . '/460x360/';
        $path2 = './fotos/' . $id . '/77x38/';
        $path3 = './fotos/' . $id . '/933x674/';
        //$path = './fotos/' . $id . '/975x457/'; //BANNER
        //$path = './fotos/' . $id . '/152x61/'; //BANNER
        $path4 = './fotos/' . $id . '/188x114/';
        ;
        //echo $path;
        if (!is_dir($path)) { //create the folder if it's not already exists
            mkdir($path, 0755, TRUE);
        }
        
        if (!is_dir($path2)) { //create the folder if it's not already exists
            mkdir($path2, 0755, TRUE);
        }
        
        if (!is_dir($path3)) { //create the folder if it's not already exists
            mkdir($path3, 0755, TRUE);
        }
        
        if (!is_dir($path4)) { //create the folder if it's not already exists
            mkdir($path4, 0755, TRUE);
        }

        //$this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '1000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1024';



        $cpt = count($files['userfile']['name']);

        for ($i = 0; $i < $cpt; $i++) {
            unset($_FILES);
            $_FILES['imagen']['name'] = $files['userfile']['name'][$i];
            $_FILES['imagen']['type'] = $files['userfile']['type'][$i];
            $_FILES['imagen']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['imagen']['error'] = $files['userfile']['error'][$i];
            $_FILES['imagen']['size'] = $files['userfile']['size'][$i];


            $this->load->library('upload');

            //print_r($config);
            $config['file_name'] = 'auto_'.date('YmdHis');
            $this->upload->initialize($config);
            //$this->upload->do_upload();
            //print_r($_FILES);
            if (!$this->upload->do_upload('imagen')) {
                $data['no_upload'][$i]['nombre'] = $files['userfile']['name'][$i];
                $data['no_upload'][$i]['error'] = $this->upload->display_errors();
            } else {

                $data['upload'][$i]['nombre'] = $files['userfile']['name'][$i];
                $data['upload'][$i]['acierto'] = $this->upload->data();

                $imagen = $this->upload->data();

                $this->resize($imagen,$imagen['full_path'],array('height' => 360, 'width' => 460));
                $this->resize($imagen,$path2.'/'.$imagen['file_name'],array('height' => 38, 'width' => 77));
                $this->resize($imagen,$path3.'/'.$imagen['file_name'],array('height' => 674, 'width' => 933));
                $this->resize($imagen,$path4.'/'.$imagen['file_name'],array('height' => 114, 'width' => 188));
                
                $this->db->insert('foto', array('nombre' => $imagen['file_name'], 'carrousel' => 0, 'autos_venta_idauto_venta' => $id));
            }
        }

        return $data;
    }
    
    function subir_carrousel($files, $id) {
        //print_r($files);
        //echo $id;
        //$articulo = $this->get_one_articulo2($id);
        $path = './fotos/' . $id . '/975x457/'; //BANNER
        $path2 = './fotos/' . $id . '/152x61/'; //BANNER
        ;
        //echo $path;
        if (!is_dir($path)) { //create the folder if it's not already exists
            mkdir($path, 0755, TRUE);
        }
        
        if (!is_dir($path2)) { //create the folder if it's not already exists
            mkdir($path2, 0755, TRUE);
        }

        //$this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '1000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1024';



        $cpt = count($files['userfile']['name']);

        for ($i = 0; $i < $cpt; $i++) {
            unset($_FILES);
            $_FILES['imagen']['name'] = $files['userfile']['name'][$i];
            $_FILES['imagen']['type'] = $files['userfile']['type'][$i];
            $_FILES['imagen']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['imagen']['error'] = $files['userfile']['error'][$i];
            $_FILES['imagen']['size'] = $files['userfile']['size'][$i];


            $this->load->library('upload');

            //print_r($config);
            $config['file_name'] = 'auto_'.date('YmdHis');
            $this->upload->initialize($config);
            //$this->upload->do_upload();
            //print_r($_FILES);
            if (!$this->upload->do_upload('imagen')) {
                $data['no_upload'][$i]['nombre'] = $files['userfile']['name'][$i];
                $data['no_upload'][$i]['error'] = $this->upload->display_errors();
            } else {

                $data['upload'][$i]['nombre'] = $files['userfile']['name'][$i];
                $data['upload'][$i]['acierto'] = $this->upload->data();

                $imagen = $this->upload->data();

                $this->resize($imagen,$imagen['full_path'],array('height' => 457, 'width' => 975));
                $this->resize($imagen,$path2.'/'.$imagen['file_name'],array('height' => 61, 'width' => 152));
                
                $this->db->insert('foto', array('nombre' => $imagen['file_name'], 'carrousel' => 1, 'autos_venta_idauto_venta' => $id));
            }
        }

        return $data;
    }
    
    public function resize($imagen,$path,$medidas){
        $configu['image_library'] = 'gd2';
        $configu['source_image'] = $imagen['full_path'];
        $configu['new_image'] = $path;
        $configu['maintain_ratio'] = TRUE;
        $configu['width'] = $medidas['width'];
        $configu['height'] = $medidas['height'];
        $this->load->library('image_lib', $configu);
        $this->image_lib->resize();
    }
    
    public function RellenaDesdeBD($idauto){
        $result=$this->db->query("
            SELECT idfoto, nombre, carrousel
            FROM foto WHERE carrousel=0 and autos_venta_idauto_venta=".$idauto);
        $tmp=$result->result_array();
        if(empty($tmp)){
            $data=array(
            "idfoto"=>"",
            "nombre"=>"",
            "carrousel"=>""
                );
        }else{
            $data=$tmp;
        }
        return $data;
    }
    public function eliminarFoto($idauto,$idfoto){
        $result=$this->db->query("SELECT nombre FROM foto WHERE idfoto=".$idfoto);
        $tmp=$result->result_array();
        $fileName=$tmp[0]["nombre"];
        $nombre_fichero188 = './fotos/'.$idauto.'/188x114/'.$fileName;
        $nombre_fichero460 = './fotos/'.$idauto.'/460x360/'.$fileName;
        $nombre_fichero77 = './fotos/'.$idauto.'/77x38/'.$fileName;
        $nombre_fichero933 = './fotos/'.$idauto.'/933x674/'.$fileName;
        //$nombre_fichero='C:\xampp\htdocs\seminuevoscoapa\admin\fotos\4\188x114\auto_20131001130144.jpg';
        if (file_exists($nombre_fichero188)) {
            unlink($nombre_fichero188); 
        }
        if (file_exists($nombre_fichero460)) {
            unlink($nombre_fichero460); 
        }
        if (file_exists($nombre_fichero77)) {
            unlink($nombre_fichero77); 
        }
        if (file_exists($nombre_fichero933)) {
            unlink($nombre_fichero933); 
        }
        $this->db->query("DELETE FROM foto WHERE idfoto=".$idfoto);
     }
     public function FotosXIdAuto($idauto){
         $result=$this->db->query("SELECT COUNT(*) as conteo FROM foto WHERE autos_venta_idauto_venta=".$idauto);
         $tmp=$result->result_array();
         $tmp=$tmp[0]["conteo"];
         return $tmp;
     }
}
?>
