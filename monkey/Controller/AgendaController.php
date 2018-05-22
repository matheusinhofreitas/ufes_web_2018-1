<?php
namespace Controller;

use DAL\AgendaDAL;
use DAL\ArtistaDAL;
use Model\Agenda;
use Model\Artista;

include_once "DAL/artistaDAL.php";
include_once "Utils.php";


class AgendaController
{
    public function listar()
    {
        $agendaDAL = new AgendaDAL();
        $agenda = $agendaDAL->listAll();
        $_REQUEST['agenda'] = $agenda;
        $artistaDAL = new ArtistaDAL();
        $aux = $artistaDAL->listAll();
        $artistas = array();
        foreach ($aux as $i){
            $artistas[$i->get_idArtista()] = $i->get_nomeArtistico();
        }
        //var_dump($artistas);
        $_REQUEST['artistas'] = $artistas;
        require_once 'View/Painel/agenda_listar.php';
    }

    public function cadastrar_editar()
    {
        $foto = null;

        if ($_FILES["foto"]["name"] != ""){
            $foto = Utils::upload("foto");
        }
        else {
            $foto = $_POST['fotoAux'];
        }

        $agenda = new Agenda("".$_POST["idAgenda"],"".$_POST["idArtista"],"".$_POST["data"],"".$_POST["hora"],"".$_POST["local"],
            "".$_POST["evento"],"".$_POST["facebook"],"".$_POST["instagram"],"".$foto);


        $agendaDAL = new AgendaDAL();
        if ($agendaDAL->addOrUpdate($agenda)) {
            $_REQUEST['resposta'] = true;
            $_REQUEST['mensagem'] = "Evento Cadastrado com Sucesso";
        } else {
            $_REQUEST['resposta'] = false;
            $_REQUEST['mensagem'] = "Erro ao cadastrar Evento";
        }
        $_REQUEST['classe'] = "Agenda";
        $_REQUEST['metodo'] = "listar";
        require_once 'View/Painel/resultado.php';

    }

    public function load_cadastro()
    {
        $artistaDAL = new ArtistaDAL();
        $artistas = $artistaDAL->listAll();
        if ($artistas == null) {
            require_once 'View/Painel/artista_cadastrar_editar.php';
        }
        else if (isset($_GET["idAgenda"])) {
            $agendaDAL = new AgendaDAL();
            $agenda = $agendaDAL->listOne($_GET["idAgenda"]);
            if ($agenda != false) {
                $_REQUEST['agenda'] = $agenda;
            }
        }
        $_REQUEST['artistas']  = $artistas;
        require_once 'View/Painel/agenda_cadastrar_editar.php';

    }

    public function excluir(){
        if (isset($_GET["idAgenda"])) {
            $agendaDAL = new AgendaDAL();
            if ($agendaDAL->remove($_GET["idAgenda"])){
                $_REQUEST['resposta'] = true;
                $_REQUEST['mensagem'] = "Evento Excluido com Sucesso";
            }
            else{
                $_REQUEST['resposta'] = false;
                $_REQUEST['mensagem'] = "Erro ao Excluir";

            }
            $_REQUEST['classe'] = "Agenda";
            $_REQUEST['metodo'] = "listar";
            require_once 'View/Painel/resultado.php';
        }
    }

}

?>