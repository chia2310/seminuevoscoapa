<?php

class Foto extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('foto_model', 'foto');
        $this->load->model('login_model', 'login');
        $this->login->checkLogin();
    }

    public function index() {
        $data["seccion"] = "nada";
        $this->load->view('head_view');
        $this->load->view('panel_view', $data);
        $this->load->view('footer_view');
    }
    
    public function galeria($idauto){
        $title["title"]="Galería";
        $title["seccion"]="Galería";
        $data["seccion"] = "nada";
        $data["auto"]=$idauto;
        $this->load->view('head_view',$title);
        $this->load->view('galeria_view', $data);
        $this->load->view('footer_view');
    }
    
    public function subir(){
        $post = $this->input->post(NULL,TRUE);
        $files = $_FILES;
        $info = $this->foto->subir($files,$post['id']);
        
        //print_r($info);
        
        if(isset($info['no_upload'])){
            $msg = '';
            foreach($info['no_upload'] as $i){
                $msg .= 'La imagen '.$i['nombre'].' ha tenido el siguiente error: '.$i['error'];
            }
            $this->phpsession->flashsave('error',$msg);
        }
        
        if(isset($info['upload'])){
            $this->phpsession->flashsave('acierto','Las imágenes han sido subidas con éxito');
        }
        
        
        $this->phpsession->flashsave('menu_img',1);
        
        redirect('articulo/editar/'.$post['id']);
    }
    
    public function borrar(){
        $post = $this->input->post(NULL,TRUE);
        //$post['image'] = 4;
        $this->biblioteca->borrar_imagen($post['image']);
    }

}
