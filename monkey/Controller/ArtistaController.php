<?php
namespace Controller;

use DAL\ArtistaDAL;
use Model\Artista;

include_once "DAL/artistaDAL.php";
include_once "Utils.php";


class ArtistaController
{
    public function listar()
    {
        $artistaDAL = new ArtistaDAL();
        $artistas = $artistaDAL->listAll();
        $_REQUEST['artistas'] = $artistas;
        require_once 'View/Painel/artistas_listar.php';

    }

    public function cadastrar_editar()
    {
        $foto1 = null;
        $foto2 = null;
        $foto3 = null;

        if ($_FILES["foto1"]["name"] != "") {
            $foto1 = Utils::upload("foto1");
        }
        else {
            $foto1 = $_POST['fotoAux1'];
        }
        if ($_FILES["foto2"]["name"]!= "") {
            $foto2 = Utils::upload("foto2");
        }
        else {
            $foto2 = $_POST['fotoAux2'];
        }
        if ($_FILES["foto3"]["name"]!= "") {
            $foto3 = Utils::upload("foto3");
        }else {
            $foto3 = $_POST['fotoAux3'];
        }


        $artista = new Artista("" . $_POST["idArtista"], "" . $_POST["nome"], "" . $_POST["nomeArtistico"], "" . $_POST["descricao"],
            "" . $_POST["bio"], "" . $_POST["facebook"], "" . $_POST["instagram"], "" . $_POST["soundCloud"],
            "" . $_POST["youtube"], "" . $_POST["site"], "" . $foto1, "" . $foto2, "" . $foto3);

        $artistaDAL = new ArtistaDAL();
        if ($artistaDAL->addOrUpdate($artista)) {
            $_REQUEST['resposta'] = true;
            $_REQUEST['mensagem'] = "Artista Cadastrado com Sucesso";
        } else {
            $_REQUEST['resposta'] = false;
            $_REQUEST['mensagem'] = "Erro ao cadastrar Artista";
        }
        $_REQUEST['classe'] = "Artista";
        $_REQUEST['metodo'] = "listar";
        require_once 'View/Painel/resultado.php';

    }

    public function load_cadastro()
    {
        if (isset($_GET["idArtista"])) {
            $artistaDAL = new ArtistaDAL();
            $artista = $artistaDAL->listOne($_GET["idArtista"]);
            if ($artista != false) {
                $_REQUEST['artistas'] = $artista;
                require_once 'View/Painel/artista_cadastrar_editar.php';
            }
        }
        else{
            require_once 'View/Painel/artista_cadastrar_editar.php';
        }
    }

    public function excluir(){
        if (isset($_GET["idArtista"])) {
            $artistaDAL = new ArtistaDAL();
            if ($artistaDAL->remove($_GET["idArtista"])){
                $_REQUEST['resposta'] = true;
                $_REQUEST['mensagem'] = "Artista Excluido com Sucesso";
            }
            else{
                $_REQUEST['resposta'] = false;
                $_REQUEST['mensagem'] = "Erro ao Excluir";

            }
            $_REQUEST['classe'] = "Artista";
            $_REQUEST['metodo'] = "listar";
            require_once 'View/Painel/resultado.php';
        }
    }

}

?>