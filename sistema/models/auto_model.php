<?php

function AM_get_home($campos='*') {
        
    $consulta = 'SELECT ' . $campos . ',idauto_venta
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca
                    WHERE vendido = 1 AND activo = 1
                    ORDER BY idauto_venta DESC
                    LIMIT 10;
                ';
    //Abrimos una conexión con el servidor
    $conexion = conectar();

    //Declaramos nuestra consulta
    //$sql = $consulta;
    //Preparamos la consulta
    //$sentencia = $conexion->prepare($sql);
    $sentencia = mysql_query($consulta);

    //$tmp = mysql_fetch_assoc($sentencia);
    $tmp = array();
    while ($row = mysql_fetch_assoc($sentencia)) {
        $row['imagenes'] = AM_get_imagen($row['idauto_venta']);
        $tmp[] = $row;
    }
    mysql_close($conexion);
    if (count($tmp) == 0) {
        return array();
    } else {
        return $tmp;
    }
}

function AM_get_one($idauto,$campos='*'){
        
    $consulta = 'SELECT ' . $campos . ',idauto_venta
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca
                    WHERE idauto_venta = ' . $idauto . ';
                ';
    //Abrimos una conexión con el servidor
    $conexion = conectar();

    //Declaramos nuestra consulta
    //$sql = $consulta;
    //Preparamos la consulta
    //$sentencia = $conexion->prepare($sql);
    $sentencia = mysql_query($consulta);
    $tmp = array();
    while ($row = mysql_fetch_assoc($sentencia)) {
        $row['imagenes'] = AM_get_imagen($row['idauto_venta'],10);
        $tmp[] = $row;
    }
    mysql_close($conexion);
    if (count($tmp) == 0) {
        return array();
    } else {
        return $tmp[0];
    }
}

function AM_get_promocion($campos='*'){
        
    $consulta = 'SELECT ' . $campos . ',idauto_venta
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca
                    WHERE promocion = 1;
                ';
    //Abrimos una conexión con el servidor
    $conexion = conectar();

    //Declaramos nuestra consulta
    //$sql = $consulta;
    //Preparamos la consulta
    //$sentencia = $conexion->prepare($sql);
    $sentencia = mysql_query($consulta);
    $tmp = array();
    while ($row = mysql_fetch_assoc($sentencia)) {
        $row['imagenes'] = AM_get_imagen($row['idauto_venta'],10);
        $tmp[] = $row;
    }
    mysql_close($conexion);
    if (count($tmp) == 0) {
        return array();
    } else {
        return $tmp[0];
    }
}

function AM_get_inventario($limit,$offset,$campos='*') {
    
        
        $consulta = 'SELECT ' . $campos . ',idauto_venta
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca 
                    WHERE activo = 1 LIMIT ' . $limit . ' OFFSET ' . $offset . ';
                ';
    //Abrimos una conexión con el servidor
        //echo $consulta;
    $conexion = conectar();
    //echo $consulta;
    //Declaramos nuestra consulta
    //$sql = $consulta;
    //Preparamos la consulta
    //$sentencia = $conexion->prepare($sql);
    $sentencia = mysql_query($consulta);
    //print_r($sentencia);
    $tmp = array();
    while ($row = mysql_fetch_assoc($sentencia)) {
        
        $row['imagenes'] = AM_get_imagen($row['idauto_venta'],10);
        $tmp[] = $row;
    }
    mysql_close($conexion);
    if (count($tmp) == 0) {
        return array();
    } else {
        return $tmp;
    }
}

function AM_get_all() {
        
        $consulta = 'SELECT idauto_venta
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca
                    WHERE activo = 1;
                ';
        //Abrimos una conexión con el servidor
        $conexion = $conexion = conectar();
        
        //Declaramos nuestra consulta
        //$sql = $consulta;
        
        //Preparamos la consulta
        //$sentencia = $conexion->prepare($sql);
        $sentencia = mysql_query($consulta);
        
        $tmp = array();
        while ($row = mysql_fetch_assoc($sentencia)) {
            $tmp[] = $row;
        }
        
        mysql_close($conexion);
        
        return count($tmp);
        
        
    
}

function AM_paginacion($paginas){
    $all = AM_get_all();
    $division = $all/$paginas;
    
    $arreglo = array();
    $cont = 0;
    $paginas2 = 0;
    for($i=0; $i < $division; $i++){
        if($cont == 0){
            $arreglo[$i] = 0;
        }else{
            $paginas2 = $paginas2 + $paginas;
            $arreglo[$i] = $paginas2;
        }
        
        $cont++;
        
    }
    
    return $arreglo;
    
}

function AM_get_imagen($id,$limit=1){
    $consulta = 'SELECT nombre
                    FROM foto
                    WHERE autos_venta_idauto_venta = '.$id.' LIMIT '.$limit.';
                ';
    
                //echo $consulta;
        //Abrimos una conexión con el servidor
        
        //Declaramos nuestra consulta
        //$sql = $consulta;
        
        //Preparamos la consulta
        //$sentencia = $conexion->prepare($sql);
        $sentencia = mysql_query($consulta);
        
        $tmp = array();
        while ($row = mysql_fetch_assoc($sentencia)) {
            $tmp[] = $row;
        }
        
        
        
        if (count($tmp) == 0) {
            return array();
        } else {
            return $tmp;
        }
}


/********** FUNCIONES USANDO MYSQLi. EN EL SERVIDOR HOSPEDADO AÚN NO LO SOPORTA *****************/
function AM_get_home_mysqli($campos='*') {
    try {
        
        $consulta = 'SELECT '.$campos.'
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca
                    WHERE vendido = 1 AND activo = 1
                    LIMIT 10;
                ';
        //Abrimos una conexión con el servidor
        $conexion = conectar_mysqli();
        
        //Declaramos nuestra consulta
        //$sql = $consulta;
        
        //Preparamos la consulta
        //$sentencia = $conexion->prepare($sql);
        $sentencia = $conexion->query($consulta);
        
        $tmp = mysqli_fetch_all($sentencia,MYSQLI_ASSOC);
        
        if(count($tmp) == 0){
            return array();
        }else{
            return $tmp;
        }
    } catch (Exception $e) {
        echo $e;
        $conexion->close();
        $sentencia->close();
        return array();
    }
}

function AM_get_one_mysqli($idauto,$campos='*'){
    try {
        
        $consulta = 'SELECT '.$campos.'
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca
                    WHERE idauto_venta = '.$idauto.';
                ';
        //Abrimos una conexión con el servidor
        $conexion = conectar_mysqli();
        
        //Declaramos nuestra consulta
        //$sql = $consulta;
        
        //Preparamos la consulta
        //$sentencia = $conexion->prepare($sql);
        $sentencia = $conexion->query($consulta);
        
        $tmp = mysqli_fetch_all($sentencia,MYSQLI_ASSOC);
        
        if(count($tmp) == 0){
            return array();
        }else{
            return $tmp[0];
        }
    } catch (Exception $e) {
        echo $e;
        $conexion->close();
        $sentencia->close();
        return array();
    }
}

function AM_get_inventario_mysqli($limit,$offset,$campos='*') {
    try {
        
        $consulta = 'SELECT '.$campos.'
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca 
                    WHERE activo = 1 LIMIT '.$limit.' OFFSET '.$offset.';
                ';
        //Abrimos una conexión con el servidor
        $conexion = conectar_mysqli();
        //echo $consulta;
        //Declaramos nuestra consulta
        //$sql = $consulta;
        
        //Preparamos la consulta
        //$sentencia = $conexion->prepare($sql);
        $sentencia = $conexion->query($consulta);
        
        $tmp = mysqli_fetch_all($sentencia,MYSQLI_ASSOC);
        
        if(count($tmp) == 0){
            return array();
        }else{
            return $tmp;
        }
    } catch (Exception $e) {
        echo $e;
        $conexion->close();
        $sentencia->close();
        return array();
    }
}

function AM_get_all_mysqli() {
    try {
        
        $consulta = 'SELECT idauto_venta
                    FROM autos_venta
                    LEFT JOIN modelos ON modelos_idmodelo = idmodelo
                    LEFT JOIN marcas ON modelos.idmarca = marcas.idmarca
                    WHERE activo = 1;
                ';
        //Abrimos una conexión con el servidor
        $conexion = conectar_mysqli();
        
        //Declaramos nuestra consulta
        //$sql = $consulta;
        
        //Preparamos la consulta
        //$sentencia = $conexion->prepare($sql);
        $sentencia = $conexion->query($consulta);
        
        $tmp = mysqli_fetch_all($sentencia,MYSQLI_ASSOC);
        
        return count($tmp);
        
        
    } catch (Exception $e) {
        echo $e;
        $conexion->close();
        $sentencia->close();
        return array();
    }
}

function AM_paginacion_mysqli($paginas){
    $all = AM_get_all_mysqli();
    $division = $all/$paginas;
    
    $arreglo = array();
    $cont = 0;
    $paginas2 = 0;
    for($i=0; $i < $division; $i++){
        if($cont == 0){
            $arreglo[$i] = 0;
        }else{
            $paginas2 = $paginas2 + $paginas;
            $arreglo[$i] = $paginas2;
        }
        
        $cont++;
        
    }
    
    return $arreglo;
    
}
