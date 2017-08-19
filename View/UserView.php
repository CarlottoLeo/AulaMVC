<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuário</title>
    </head>
    
    <body>
        <form action="../Controller/UserController.php" method="post" name="cadUser">
            <input type='text' name='txtUser' id="txtUser" placeholder="Usuário"/> <br>
            <input type='text' name='txtNome' id="txtNome" placeholder="Nome"/> <br>
            <input type='text' name='txtSobrenome' id="txtSobrenome" placeholder="Sobrenome"/> <br>
            <input type='text' name='txtEmail' id="txtEmail" placeholder="Email"/> <br>
            <input type='text' name='txtIdade' id="txtIdade" placeholder="Idade"/> <br>
            <input type='password' name='pwdSenha' id="pwdSenha" placeholder="Senha"/> <br>
            <input type='submit' name='btCadastro' id="btCadastro" placeholder="Cadastro"/>
            <input type='reset' name='btLimpar' id="btLimpar" placeholder="Limpar"/> <br>
        </form>
        
    </body>
    
</html>

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserView
 *
 * @author leonardo
 */
class UserView {
    //put your code here
}
