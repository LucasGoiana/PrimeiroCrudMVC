<?php 

class homeController extends Controller{ 
    
    public function index(){
      $dados = array();

      $usuario = new Usuarios();
      $usuario = $usuario->getAllUsers();

      $dados = array(
        'dadosUsuarios' =>$usuario
      );  
      $this->loadTemplate('home',$dados);
    }
    public function abrir($slug){
      $dados = array();

      $usuario = new Usuarios();
      $usuarios = $usuario->getUser($slug);
      $dados = $usuarios[0];
      
      $this->loadTemplate('desc-usuario',$dados);
    }

    public function addUsuario(){
      $this->loadTemplate('add-usuario');
    }
    
    public function cadastrarUsuario(){
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $usuario = $_POST['usuario'];
      $senha = md5($_POST['senha']);
      $telefone = $_POST['telefone'];

      $usuarioObj = new Usuarios();
      
      if($usuarioObj->inserirUsuario($nome, $email, $usuario, $senha, $telefone) == true){
        header('Location:'.BASE_URL);
      }

    }
    public function excluirUsuario($slug){
      
      $id = explode('-', $slug);
      $id = end($id);

      $usuarioObj = new Usuarios();

      if($usuarioObj->excluirUsuario($id) == true){
        header('Location:'.BASE_URL);
      }else{
        header('Location:'.BASE_URL);
      }

    }
    
    public function editarUsuario($slug){
      $dados = array();
      $usuario = new Usuarios();
      $usuarios = $usuario->getUser($slug);
      $dados = $usuarios[0];
      
      $this->loadTemplate('edi-usuario',$dados);
    }
    public function editarUser(){
      
      $usuarioObj = new Usuarios();  
      if($usuarioObj->edit($_POST) == true){
        header('Location:'.BASE_URL);
      }
      
    }
  
    
}

?>