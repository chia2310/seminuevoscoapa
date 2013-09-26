<?php
class Panel extends CI_Controller{
    public function __construct() {
        
        parent::__construct();
        $this->load->model('panel_model', 'panel');
        $this->load->model('login_model','login');
        $this->login->checkLogin();
    }
    public function index(){
        $data["seccion"]="nada";
        $this->load->view('head_view');
        $this->load->view('panel_view',$data);
        $this->load->view('footer_view');
    }
    public function inventario(){
        $data["seccion"]="inventario";
        $this->load->view('head_view');
        $this->load->view('panel_view',$data);
        $this->load->view('footer_view');
    }
    public function alta(){
        $Marcas=ArregloDBToSelect($this->panel->selectMarcas(),"idmarca","marca_descripcion");
        $data["Marcas"]=$Marcas;
        $Years =$this->panel->ArregloYears(range(date("Y")+1,date("Y")-43));
        $data["Years"]=$Years;
        $this->load->view('head_view');
        $this->load->view('alta_view',$data);
        $this->load->view('footer_view');
    }
}
?>
