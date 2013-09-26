<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Login_model extends CI_Model {

    function checkLogin() {
        $user = $this->phpsession->get('user');
        if (empty($user)) {
            redirect('login');
        }
    }

    function checkUser($user, $pass) {
        $regreso = FALSE;
        $q = $this->db->get_where('usuarios', array('user' => $user, 'activo' => '1', 'pass' => $pass));
        if ($q->num_rows() > 0) {
            $regreso = TRUE;
        } else {
            $regreso = FALSE;
        }

        return $regreso;
    }

    function entrar($post) {
        $q = $this->checkUser($post['user'], $post['pass']);
        if ($q == TRUE) {
            $user = $this->getUser($post['user'], $post['pass']);
            if (is_array($user)) {
                $this->phpsession->save('user', $user);
                $this->phpsession->save('time', getdate());
            } else {
                //La busqueda en base de datos no regreso ningun user
                $this->phpsession->flashsave('error', 'Ocurrió un error al ingresar al sistema. #1');
                redirect('login');
            }
        } else {
            //El username y el password no coinciden como combinación.
            $this->phpsession->flashsave('error', 'Ocurrió un error al ingresar al sistema. #2');
            redirect('login');
        }
    }

    function getUser($user, $pass) {
        $user = 0;
        $this->load->library('encrypt');
        $q = $this->db->get_where('usuarios', array('user' => $user, 'pass' => $pass));
        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $r) {
                $user = $r;
            }
        }

        return $user;
    }

}

?>
