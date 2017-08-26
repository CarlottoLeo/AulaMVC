<?php
class ConnectionDB extends PDO{
    private static $instance = null;
    
    public function ConnectionDB($dsn, $usuario, $senha) {
        //Contrutor da classe pai (parent) -> PDO
        parent::__construct($dsn, $usuario, $senha);
    }
    
    public static function getInstance() {
        if(!isset(self::$instance)) {
            try {
                // Cria uma conexão e retorna a instância dela
                self::$instance = new ConnectionDB("mysql:dbname=ecom;host=localhost","root","");
                        echo "Conectado ao banco de dados!";die();
            } catch (Exception $ex) {
                echo "Ocorreram erros ao tentar conectar no banco de dados!";
                echo "$e"; die();
                exit();
            }
        }
        return self::$instance;
    }
}
?>