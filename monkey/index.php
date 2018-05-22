<?php


if(!isset($_GET['class']) || !isset($_GET['acao'])){
    require_once "Controller/SiteController.php";
    $site = new Controller\SiteController();
    $site->load();
    die;
}



$require = 'Controller/'.$_GET['class'];
$require .= 'Controller';

$classe = $_GET['class'];
$classe .= 'Controller';
$classe = "\\Controller\\".$classe;

$metodo = $_GET['acao'];

require_once $require.".php";
//require_once "Controller/ArtistaController.php";
//$a = new \Controller\ArtistaController();

$obj = new $classe();
$obj->$metodo();

/*
// Teste abaixo
require_once "DAL/ArtistaDAL.php";
$artistaDAL = new \DAL\ArtistaDAL();
$artista = $artistaDAL->listOne(13);
$_REQUEST['artista'] = $artista;

require_once 'View/artista_cadastrar.php';
*/


?>