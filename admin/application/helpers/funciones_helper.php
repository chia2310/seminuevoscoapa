<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * CONVIERTE EL MES DE UNA FECHA EN LETRA
 * 
 * @param string $fecha Fecha separada por "-" (guion medio)
 * @return 
 */
function convierte_fecha_esp($fecha) {    
    $array_meses = array(
        '01' => 'Enero',
        '02' => 'Febrero',
        '03' => 'Marzo',
        '04' => 'Abril',
        '05' => 'Mayo',
        '06' => 'Junio',
        '07' => 'Julio',
        '08' => 'Agosto',
        '09' => 'Septiembre',
        '10' => 'Octubre',
        '11' => 'Noviembre',
        '12' => 'Diciembre',
    );    
    $arr_fecha = explode('-', date('d-m-Y', strtotime($fecha)));    
    return $arr_fecha[0].' de '.$array_meses[$arr_fecha[1]].' de '.$arr_fecha[2];
}

function ArregloDBToSelect($arreglo, $keyname, $value) {
        foreach ($arreglo as $a) {
            $data[$a[$keyname]] = $a[$value];
        }
        return $data;
    }

/**
 * Limpia las posiciones necesarias de un arreglo, quitándole caracteres (, $ %).
 * 
 * @param array $data Arreglo con datos
 * @param array $arrMoneda Arreglo con las posiciones que queremos que limpie de arreglo $data
 * @return array
 */

