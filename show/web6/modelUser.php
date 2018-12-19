<?php 
include 'user.php';
class ModelUser{

    public function adicionar(User $user){
       include'bd.php';
           
        $query = "INSERT INTO usuarios (first_name, last_name, email, password) 
      VALUES (:first_name, :last_name, :email, :password)";

$statement = $connection->prepare($query);

$valores = array();
$valores[':first_name'] = $user->getFirstName();
$valores[':last_name'] = $user->getLastName();
$valores[':email'] = $user->getEmail();
$valores[':password'] = $user->getPassword();

$result = $statement->execute($valores);

if(  empty($result) ){
  print "<br>Nao inseriu";
    print_r( $statement->errorInfo() );
}else{
  print "<br>Deu certo inserir";
}

    }
    
    public function editar(){
        
    }
    
    public function listar(){
        
    }
    
    public function remover(){
        
    }


}

?> 