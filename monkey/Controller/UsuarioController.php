<?php
/**
 * Created by PhpStorm.
 * User: mathe
 * Date: 18-May-18
 * Time: 6:51 PM
 */

namespace Controller;

session_start();

use Model;
include_once "Model/Usuario.php";
include_once "ArtistaController.php";

class UsuarioController
{

    public function autenticar(){
        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);
        if(Model\Usuario::autenticar($usuario, $senha)){
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location:index.php?class=Artista&acao=listar');
            die;
        }
        else{
            $this->sair();
        }
    }
    public function login(){
        require_once 'View/Painel/login.php';
    }
    public function sair(){
        unset ($_SESSION['usuario']);
        unset ($_SESSION['senha']);
        //header('location:index.php');
        session_unset();
        $this->login();
    }



}