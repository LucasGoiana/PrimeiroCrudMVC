<?php 

class loginController extends Controller{

    public function index(){
        
        $this->loadTemplate('login');
    }
    public function logon(){
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $usuarioObj = new Usuarios();
        $usuarioObj->login($email,$senha);

        if($usuarioObj->login($email,$senha)== true){
             $_SESSION['login'] = $email;
             header('location:'.BASE_URL); 
        }else{
            header('location:'.BASE_URL.'login?error=1');
        }

        
    }
    public function logoff(){
        session_destroy();
        header('location:'.BASE_URL.'login');
    }
}


?>