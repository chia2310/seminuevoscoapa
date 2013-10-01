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
        $title["title"]="Bienvenido";
        $title["seccion"]="nada";
        $this->load->view('head_view',$title);
        $this->load->view('panel_view',$data);
        $this->load->view('footer_view');
    }
    public function inventario(){
        //$this->form_validation->set_rules("marca","marca","numeric");
        if(empty($_GET)){
            $data["seccion"]="inventario";
            $title["title"]="inventario";
            $title["seccion"]="inventario";
            $Marcas=ArregloDBToSelect($this->panel->selectMarcas(),"idmarca","marca_descripcion");
            $data["Marcas"]=$Marcas;
            $Years =$this->panel->ArregloYears(range(date("Y")+1,date("Y")-43));
            $data["Years"]=$Years;
            $data["visible"]="0";
            $this->load->view('head_view',$title);
            $this->load->view('panel_view',$data);
            $this->load->view('footer_view');
        } else{
            //$post=$this->input->get(NULL,true);
            $post=$_GET;
            if($post["modelo"]==""){
                $data["modelo"]="";
            }else{
                $data["modelo"]=$post["modelo"];
            }
            $data["marca"]=$post["marca"];
            $data["years"]=$post["years"];
            $data["estatus"]=$post["estatus"];
            $data['info']=$this->panel->buscaAutos($post);
            $data["seccion"]="inventario";
            $title["title"]="inventario";
            $title["seccion"]="inventario";
            $Marcas=ArregloDBToSelect($this->panel->selectMarcas(),"idmarca","marca_descripcion");
            $data["Marcas"]=$Marcas;
            $Years =$this->panel->ArregloYears(range(date("Y")+1,date("Y")-43));
            $Estatus=array(
                "0"=>"No home",
                "1"=>"En home");
            $data["Estatus"]=$Estatus;
            $data["Years"]=$Years;
            $data["visible"]="1";
            $this->load->view('head_view',$title);
            $this->load->view('panel_view',$data);
            $this->load->view('footer_view');
        }
    }
    public function alta($idauto=0){
        if($this->form_validation->run('altaauto')==FALSE){
                //$data['info']=$this->solicitudV2->rellenaDesdeDB($IDSolicitud);
                //print_r($_POST);
            if(empty($_POST)){
             $data['info']=$this->panel->RellenaDesdeBD($idauto);
            }else{
             $data['info']=$this->input->post(NULL,true);   
            }
            $Marcas=ArregloDBToSelect($this->panel->selectMarcas(),"idmarca","marca_descripcion");
            $data["Marcas"]=$Marcas;
            $Years =$this->panel->ArregloYears(range(date("Y")+1,date("Y")-43));
            $data["Years"]=$Years;
            $data["idauto"]=$idauto;
            //print_r($data);
            $title["title"]="alta auto";
            $title["seccion"]="alta auto";
            $this->load->view('head_view',$title);
            $this->load->view('alta_view',$data);
            $this->load->view('footer_view');  
        }else{
            //guardar en BD
            $post=$this->input->post(NULL,true);
            if($idauto==0){
                $this->panel->guardaAuto($post);
                $this->phpsession->flashsave('acierto', 'Auto guardado correctamente');
            } else{
                $this->panel->editaAuto($post,$idauto);
                $this->phpsession->flashsave('acierto', 'Auto editado correctamente');
                //editar
            }
            redirect("panel/inventario?modelo=&marca=0&years=0&estatus=3&buscar=Buscar");
        }
    }
    public function auto(){
        $post=$_GET;
        $Arreglo=$this->panel->BuscaModelo($post["modelo"]);
        echo $Arreglo;
        }
    public function elimina($idauto){
        $this->panel->eliminaAuto($idauto);
        $this->phpsession->flashsave("acierto",'Auto eliminado correctamente, 
            <a href="'.site_url('panel/regresa/'.$idauto.'?'.$_SERVER["QUERY_STRING"]).'">
                <i class="icon-reply"></i> Deshacer</a>');
        redirect("panel/inventario?".$_SERVER["QUERY_STRING"]);
    }
    public function regresa($idauto){
        $this->panel->regresaAuto($idauto);
        $this->phpsession->flashsave("acierto",'Auto regresado correctamente.');
        redirect("panel/inventario?".$_SERVER["QUERY_STRING"]);
    }
}
?>
