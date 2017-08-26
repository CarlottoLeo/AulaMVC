<?php

class UserValidade {
    public static function testaIdade($paramIdade){
        if(is_numeric($paramIdade)){
            return true;
        }else{
            return false;
        }
    }
    
    public static function testaEmail($paramEmail){
        $Sintaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
        if (preg_match($Sintaxe, $paramEmail)){
            return true;
        }else{
            return false;
        }
    }
}
