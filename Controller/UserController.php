<?php

session_start();

include '../Persistence/UserDAO.php';
include '../Model/UserModel.php';
include '../Include/UserValidade.php';


if ((!empty($_POST['txtUser'])) &&
        (!empty($_POST['txtNome'])) &&
        (!empty($_POST['txtSobrenome'])) &&
        (!empty($_POST['txtEmail'])) &&
        (!empty($_POST['txtIdade'])) &&
        (!empty($_POST['pwdSenha']))) {

    $erros = array();

    if (!UserValidade :: testaIdade($_POST['txtIdade'])) {
        $erros[] = "Idade inválida!";
    }

    if (!UserValidade :: testaEmail($_POST['txtEmail'])) {
        $erros[] = "Email inválida!";
    }

    if (count($erros) == 0) {
            $user = new UserModel();
            $user->user = $_POST['txtUser'];
            $user->nome = $_POST['txtNome'];
            $user->sobrenome = $_POST['txtSobrenome'];
            $user->email = $_POST['txtEmail'];
            $user->idade = $_POST['txtIdade'];
            $user->password = $_POST['pwdSenha'];
            
            $userDao = new UserDao();
            $userDao->insertUser($user);
            
            $_SESSION['user'] = $user->user;
            $_SESSION['mail'] = $user->email;
            header("location:../View/UserViewResult.php?");
        } else {
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/UserViewError.php?");
        }
    } else {
        echo "Informe todos os campos";
    }
