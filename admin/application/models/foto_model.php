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
        $path = './fotos/' . $id . '/original/';
        $path2 = './fotos/' . $id . '/thumbs/';
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

                $this->resize($imagen,$imagen['full_path'],array('height' => 400, 'width' => 400));
                $this->resize($imagen,$path2.'/'.$imagen['file_name'],array('height' => 50, 'width' => 50));
                
                $this->db->insert('foto', array('nombre' => $imagen['file_name'], 'carrousel' => 0, 'autos_venta_idauto_venta' => $id));
            }
        }

        return $data;
    }
    
    public function resize($imagen,$path,$medidas){
        $configu['image_library'] = 'gd2';
        $configu['source_image'] = $imagen['full_path'];
        $configu['new_image'] = $path;
        $configu['maintain_ratio'] = FALSE;
        $configu['width'] = $medidas['width'];
        $configu['height'] = $medidas['height'];
        $configu['maintain_ratio'] = TRUE;
        $this->load->library('image_lib', $configu);
        $this->image_lib->resize();
    }

}

?>
