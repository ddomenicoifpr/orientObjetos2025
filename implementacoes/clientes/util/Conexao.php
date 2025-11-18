<?php

class Conexao {

    public static ?PDO $conexao = null;

    public static function getConexao(): PDO {

        if(self::$conexao == null) {
            $strCon = "mysql:host=localhost:3306;dbname=db_clientes";
            $opcoes = array(
                //Define o charset da conexão
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",

                //Define o tipo do erro como exceção
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                //Define o tipo do retorno das consultas
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

            self::$conexao = 
                new PDO($strCon, 
                        "root", "root", 
                        $opcoes);
        }        
        
        return self::$conexao;
    }
}