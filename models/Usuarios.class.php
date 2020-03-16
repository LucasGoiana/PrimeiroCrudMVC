<?php 

class Usuarios extends Model{

    public function getAllUsers(){
        
        $sql = $this->db->prepare('SELECT * FROM usuarios');
        $sql->execute();

        if($sql->rowCount() > 0){
            $usuario = $sql->fetchAll();
            return $usuario;
        }else{
            return $usuario = array();
        }

    }
    
    public function getUser($slug){
        $id = explode('-',$slug);
        $id = end($id);
        //echo $id;
        
        $sql = $this->db->prepare('SELECT * FROM usuarios WHERE id=:id');
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            
            $usuario = $sql->fetchAll();
           // print_r($usuario);
            return $usuario;

        }else{

            return $usuario = array();
        }
        

    }
    private function createSlug($nome){
        $sql = $this->db->prepare("SHOW TABLE STATUS LIKE 'usuarios'");
        $sql->execute();
        $usuario = $sql->fetch();

     //   print_r($usuario);

        $slug = str_replace(' ','-', $nome);
        $slug = strtolower($slug);
        
        $slug = $slug.'-'.$usuario['Auto_increment'];

        return $slug;
    }
    private function editSlug($nome, $id){
        $slug = str_replace(' ','-', $nome);
        $slug = strtolower($slug);
        return $slug.'-'.$id;



    }
    public function inserirUsuario($nome = '', $email = '', $usuario = '', $senha = '', $telefone = ''){
        $slug = $this->createSlug($nome);

        $sql = $this->db->prepare("INSERT INTO usuarios 
        SET 
        nome = :nome,
        email =:email,
        usuario = :usuario,
        senha = :senha,
        telefone = :telefone,
        slug = :slug
        ");

        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':usuario', $usuario);
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':slug', $slug);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function excluirUsuario($id){

        $sql = $this->db->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
       
        if($sql->execute()){
            return true;
        }else{
            return false;
        }


    } 
    
    public function edit($dadosUsuario){
        $idSlug = $dadosUsuario['id'];
        $nome = $dadosUsuario['nome'];
        $email = $dadosUsuario['email'];
        $senha = md5($dadosUsuario['senha']);
        $usuario = $dadosUsuario['usuario'];
        $telefone = $dadosUsuario['telefone'];
        $slug = $this->editSlug($nome,$idSlug);

        $sql = $this->db->prepare("UPDATE usuarios 
        SET 
        nome = :nome,
        email =:email,
        usuario = :usuario,
        senha = :senha,
        telefone = :telefone,
        slug = :slug WHERE id = :id
        ");
        $sql->bindValue(':id',$idSlug);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':usuario', $usuario);
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':slug', $slug);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }

                 

    }
    public function login($email,$senha){
        
        $sql = $this->db->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');
        $sql->bindValue(':email',$email);
        $sql->bindValue(':senha',$senha);
        $sql->execute();

        if($sql->rowCount() == 1){
            return true;
        }else{
            return false;
        }
    }
}


?>