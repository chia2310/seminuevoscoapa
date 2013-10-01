<?php

$config = array(
    'login' => array(
        array(
            'field' => 'user',
            'label' => 'usuario',
            'rules' => 'required|callback_username_check'
        ),
        array(
            'field' => 'pass',
            'label' => 'contraseña',
            'rules' => 'required'
        )
    ),
    'altaauto' => array(
        array(
          'field'=>'marca',
          'label'=>'marca del vehículo',
          'rules'=>'required|trim'
      ),
        array(
          'field'=>'modelo',
          'label'=>'modelo del vehículo',
          'rules'=>'required|trim'
      ),
        array(
          'field'=>'version',
          'label'=>'versión del vehículo',
          'rules'=>'required|trim'
      ),
        array(
          'field'=>'years',
          'label'=>'año del vehículo',
          'rules'=>'required|trim'
      ),
        array(
          'field'=>'kilometraje',
          'label'=>'kilometraje del vehículo',
          'rules'=>'required|trim'
      ),
        array(
          'field'=>'transmision',
          'label'=>'transmisión del vehículo',
          'rules'=>'required|trim'
      ),
        array(
          'field'=>'precio',
          'label'=>'precio del vehículo',
          'rules'=>'required|trim'
      ),
        array(
          'field'=>'texto',
          'label'=>'descripción del vehículo',
          'rules'=>'required|trim'
      ),
    )
);