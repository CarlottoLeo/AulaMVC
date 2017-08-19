<?php

include '../Model/UserModel.php';
include '../Include/UserValidade.php';

if((!empty($_POST['txtUser'])) &&
    (!empty($_POST['txtNome'])) &&
    (!empty($_POST['txtSobrenome'])) &&
    (!empty($_POST['txtEmail'])) &&
    (!empty($_POST['txtIdade'])) &&
    (!empty($_POST['pwdSenha']))){
    
   $erros = array();
   
   if(!UserValidade :: testaIdade($_POST['txtIdade'])){
       $erros[] = "Idade inválida!";
   }
   
   if(!UserValidade :: testaEmail($_POST['txtEmail'])){
       $erros[] = "Email inválida!";
   }
   
   if(count ($erros) == 0){
       
       $user = new UserModel();
       
       $user->user = $_POST['txtUser'];
       $user->nome = $_POST['txtNome'];
       $user->sobrenome = $_POST['txtSobrenome'];
       $user->email = $_POST['txtEmail'];
       $user->idade = $_POST['txtIdade'];
       $user->senha = $_POST['pwdSenha'];
       
       header("location:../View/UserViewResult.php?"."user=$user->user&"."mail=$user->email");
       //echo "Usuário $user->user criado com sucesso!";
   }else{
       $err = serialize($erros);
       
       header("location:../View/UserViewError.php?"."erros=$err");
   }
   
}else{
echo "informe todos os campos!";
}
    

class UserController {
    //put your code here
}
