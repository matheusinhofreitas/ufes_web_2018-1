<?php
namespace Model;

class Conexao
{
    public static function MySQL(){
        $mysql = new \MySQLi();
        $mysql->connect("127.0.0.1","root","","monkey");
        return $mysql;
    }
}




?>