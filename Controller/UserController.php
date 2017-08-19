<?php

if((!empty($_POST['txtUser'])) &&
    (!empty($_POST['txtNome'])) &&
    (!empty($_POST['txtSobrenome'])) &&
    (!empty($_POST['txtEmail'])) &&
    (!empty($_POST['txtIdade'])) &&
    (!empty($_POST['pwdSenha']))){
    
    echo "Todos campos informados!";
}else{
    echo "Faltou informações no(s) campo(s)!";
}
    

class UserController {
    //put your code here
}
