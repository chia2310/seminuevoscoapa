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
    )
);