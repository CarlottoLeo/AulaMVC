<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author leonardo
 */
class UserModel {
    
    private $user;
    private $nome;
    private $sobrenome;
    private $idade;
    private $password;
    private $email;
    
    public function __construct() {}
    
public function __set($propriedade, $valor) {
    $this->$propriedade = $valor;
}

public function __get($propriedade) {
    return $this->$propriedade;
}

}
