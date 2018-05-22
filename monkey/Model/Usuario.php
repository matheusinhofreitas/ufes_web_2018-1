<?php
/**
 * Created by PhpStorm.
 * User: mathe
 * Date: 18-May-18
 * Time: 6:37 PM
 */

namespace Model;

require_once "Model/Conexao.php";
require_once "Model/Casting.php";

class Usuario
{

    private $idUsuario;
    private $usuario;
    private $senha;

    function __construct($idUsuario = null, $usuario = null, $senha = null)
    {
        $this->idUsuario = $idUsuario;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public static function get_all(){
        $mysqli = Conexao::MySQL();
        $usuarios = array();
        $query = "SELECT * FROM `usuarios`";
        if($result = $mysqli->query($query)) {
            while($object = $result->fetch_object()) {
                $usuario = Casting::cast($object, "Model\Usuario");
                array_push($usuarios, $usuario);
            }
            return $usuarios;
        }
        return null;
    }

    public static function autenticar($usuario, $senha){
        $mysqli = Conexao::MySQL();
        $usuarios = array();

        $query = "SELECT * FROM `usuario` WHERE `usuario` = \"".$usuario."\" AND `senha` = \"".$senha."\";";
        if($result = $mysqli->query($query)) {
            while($object = $result->fetch_object()) {
                $usuario = Casting::cast($object, "Model\Usuario");
                array_push($usuarios, $usuario);
            }
            return $usuarios;
        }
        return false;
    }


    public function set_idUsuario($idUsuario)
    {
        $this->idUsuario= $idUsuario;
    }

    public function set_usuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function set_senha($senha){
        $this->senha = $senha;
    }

    public function get_idUsuario($idUsuario)
    {
        return $this->idUsuario;
    }

    public function get_usuario($usuario)
    {
        return $this->usuario;
    }

    public function get_senha($senha){
        return $this->senha;
    }
}