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
    public function RellenaDesdeBD($idauto){
        $result=$this->db->query("
            SELECT idmarca,modelo_descripcion,anio,kilometraje,combustible,transmision,precio,
            version,descripcion,activo,vendido,promocion
            FROM autos_venta INNER JOIN modelos ON autos_venta.modelos_idmodelo=modelos.idmodelo
            WHERE idauto_venta=".$idauto);
        $tmp=$result->result_array();
        if(empty($tmp)){
            $data=array(
            "marca"=>"",
            "modelo"=>"",
            "version"=>"",
            "years"=>"",
            "kilometraje"=>"",
            "combustible"=>"",
            "transmision"=>"",
            "precio"=>"",
            "texto"=>"",
            "activo"=>"0",
            "vendido"=>"0",
            "promocion"=>"0"
        );
        }else{
            $data=array(
            "marca"=>$tmp[0]["idmarca"],
            "modelo"=>$tmp[0]["modelo_descripcion"],
            "version"=>$tmp[0]["version"],
            "years"=>$tmp[0]["anio"],
            "kilometraje"=>$tmp[0]["kilometraje"],
            "combustible"=>$tmp[0]["combustible"],
            "transmision"=>$tmp[0]["transmision"],
            "precio"=>$tmp[0]["precio"],
            "texto"=>$tmp[0]["descripcion"],
            "activo"=>$tmp[0]["activo"],
            "vendido"=>$tmp[0]["vendido"],
            "promocion"=>$tmp[0]["promocion"]
        );
        }
        
        return $data;
    }
    public function guardaAuto($post){
        $idmodelo=$this->existeModelo($post["marca"],$post["modelo"]);
        if($idmodelo<=0){
         $data=array(
            "idmarca"=>$post["marca"],
            "modelo_descripcion"=>$post["modelo"]
        );
         $this->db->insert("modelos",$data);
         $idmodelo=$this->db->insert_id();
        }
        $dataAuto=array(
          "modelos_idmodelo"=>$idmodelo,
            "anio"=>$post["years"],
            "kilometraje"=>$post["kilometraje"],
            "combustible"=>$post["combustible"],
            "transmision"=>$post["transmision"],
            "precio"=>$post["precio"],
            "version"=>$post["version"],
            "descripcion"=>$post["texto"],
            "activo"=>"1",
            "vendido"=>"0",
            "promocion"=>"0"
        );
        $this->db->insert("autos_venta",$dataAuto);
    }
    public function editaAuto($post,$idauto){
        if(isset($post["promocion"])){
            $this->db->query("update autos_venta set promocion=0 where activo=1 and vendido=0");
        }
        $idmodelo=$this->existeModelo($post["marca"],$post["modelo"]);
        if($idmodelo<=0){
         $data=array(
            "idmarca"=>$post["marca"],
            "modelo_descripcion"=>$post["modelo"]
        );
         $this->db->insert("modelos",$data);
         $idmodelo=$this->db->insert_id();
        }
        $dataAuto=array(
            "modelos_idmodelo"=>$idmodelo,
            "anio"=>$post["years"],
            "kilometraje"=>$post["kilometraje"],
            "combustible"=>$post["combustible"],
            "transmision"=>$post["transmision"],
            "precio"=>$post["precio"],
            "version"=>$post["version"],
            "descripcion"=>$post["texto"],
            "activo"=>"1",
            "vendido"=>(isset($post["vendido"])) ? "1":"0",
            "promocion"=>(isset($post["promocion"])) ? "1":"0"
        );
        $this->db->where("idauto_venta",$idauto);
        $this->db->update('autos_venta',$dataAuto);
    }
    public function existeModelo($idmarca,$modelod){
        $result=$this->db->query("SELECT idmodelo FROM modelos WHERE idmarca=".$idmarca." AND modelo_descripcion='".$modelod."'");
        $tmp=$result->result_array();
        if(empty ($tmp)){
            $tmp1=0;
        } else{
            $tmp1=$tmp[0]["idmodelo"];
        }
        return $tmp1;
    }
    public function BuscaModelo($modelod){
        $result=$this->db->query("SELECT modelo_descripcion as nom FROM modelos WHERE modelo_descripcion like '".$modelod."%'");
        $tmp=$result->result_array();
        return json_encode($tmp);
    }
    public function buscaAutos($post){
        $modelo=(empty($post["modelo"]))?"%":$post["modelo"];
        $marca=($post["marca"]=="0")?"%":$post["marca"];
        $years=($post["years"]=="0")?"%":$post["years"];
        $estatus=($post["estatus"]=="3")?"%":$post["estatus"];
        $result=$this->db->query("SELECT autos_venta.idauto_venta,marca_descripcion as marca,modelo_descripcion as modelo,
            anio as years,precio, vendido, promocion
            FROM autos_venta INNER JOIN modelos ON autos_venta.modelos_idmodelo=modelos.idmodelo
            INNER JOIN marcas ON modelos.idmarca=marcas.idmarca
            WHERE activo=1 and modelo_descripcion like'".$modelo."' and 
            marcas.idmarca like '".$marca."' and anio like '".$years."' and vendido like '".$estatus."'
             ORDER BY marca_descripcion,modelo_descripcion,years,precio");
        $tmp=$result->result_array();
        
        return $tmp;
    }
    public function eliminaAuto($idauto){
        $this->db->query("update autos_venta set activo=0 where idauto_venta=".$idauto);
    }
    public function regresaAuto($idauto){
        $this->db->query("update autos_venta set activo=1 where idauto_venta=".$idauto);
    }
}
?>
