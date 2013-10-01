<?php
class Login extends CI_Controller{
    public function __construct() {
        
        parent::__construct();
        $this->load->model('login_model', 'login');        
    }
    public function index(){
       if ($this->form_validation->run('login') == FALSE) {
            $this->phpsession->clear();
            $title["title"]="Login";
            $title["seccion"]="Login";
            $this->load->view('head_view',$title);
            $this->load->view('login_view');
            $this->load->view('footer_view');
        } else {
            $post = $this->input->post (NULL, TRUE);
            $this->login->entrar($post);
            $this->phpsession->flashsave('acierto', 'Bienvenido aquí podrás actualizar tus productos.');
            $user = $this->phpsession->get('user');
            redirect("panel");
        }
    }
    public function username_check($user) {
        $pass = $_POST['pass'];
        $q = $this->login->checkUser($user, $pass);
        if ($q == FALSE) {
            $this->form_validation->set_message('username_check', 'La combinación de usuario/contraseña es incorrecta');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
}
?>
