<?php

    class Conexao{
        private static $dbHost = 'localhost'; 
        private static $dbName = 'imobi'; 
        private static $dbUser = 'root'; 
        private static $dbPwd = ''; 

        private static $cont = null; 

        public function __construct(){
            die ("Passei pelo construtor de conexao");
        }

        public static function conectar(){

            
        }


    }

?>