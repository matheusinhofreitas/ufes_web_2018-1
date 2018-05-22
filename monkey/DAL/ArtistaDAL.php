<?php
namespace DAL;

use Model\Agenda;
use Model\Casting;
use Model\Conexao;

require_once ("Model/artista.php");
require_once ("Model/agenda.php");
require_once("Model/casting.php");
require_once("Model/conexao.php");
require_once ("AgendaDAL.php");


class ArtistaDAL
{
    private $mysqli;

    function __construct(){
        $this->mysqli = Conexao::MySQL();
    }


    public function addOrUpdate($artista) {
        if($artista->get_idArtista() == null){
            $query = "INSERT INTO `artista` (`idArtista`, `nome`, `nomeArtistico`, `descricao`, `bio`, `facebook`, `instagram`, 
			 `soundcloud`, `youtube`, `site`, `foto1`, `foto2`, `foto3`)  VALUES (NULL, '{$artista->get_nome()}', '{$artista->get_nomeArtistico()}', '{$artista->get_descricao()}', 
			 '{$artista->get_bio()}','{$artista->get_facebook()}','{$artista->get_instagram()}', '{$artista->get_soundcloud()}', '{$artista->get_youtube()}', '{$artista->get_site()}',
			  '{$artista->get_foto1(true)}', '{$artista->get_foto2(true)}', '{$artista->get_foto3(true)}');";

        }
        else{
            $query = "UPDATE `artista` SET `nome` = '{$artista->get_nome()}', `nomeArtistico` = '{$artista->get_nomeArtistico()}', `descricao` = '{$artista->get_descricao()}', 
			 `bio` = '{$artista->get_bio()}', `facebook` = '{$artista->get_facebook()}', `instagram` = '{$artista->get_instagram()}', `soundcloud` = '{$artista->get_soundcloud()}',
			 `youtube` = '{$artista->get_youtube()}', `site` = '{$artista->get_site()}', `foto1` = '{$artista->get_foto1(true)}', `foto2` = '{$artista->get_foto2(true)}',
			 `foto3` = '{$artista->get_foto3(true)}' WHERE `artista`.`idArtista` = {$artista->get_idArtista()}";
        }

        if ($result = $this->mysqli->query($query)){
            $artista->set_idArtista($this->mysqli->insert_id);
            return true;
        }
        else
            return false;
    }

    public function remove($idArtista) {
        $agendaDAL = new AgendaDAL();
        if($agendaDAL->removeForArtista($idArtista)) {
            $query = "DELETE FROM `artista` WHERE `idArtista` = $idArtista";
            if($result = $this->mysqli->query($query)) {
                return true;
            }
            else
                return false;
        }
        else
            return false;

    }

    public function listAll() {
        $artistas = array();
        $query = "SELECT * FROM `artista`";
        if($result = $this->mysqli->query($query)) {
            while($object = $result->fetch_object()) {
                $artista = Casting::cast($object, "Model\Artista");
                array_push($artistas, $artista );
            }
            return $artistas;
        }
        return null;

    }

    public function listOne($idArtista) {
        $query = "SELECT * FROM `artista` WHERE `idArtista` = $idArtista";
        if($result = $this->mysqli->query($query)) {
            $object = $result->fetch_object();
            return Casting::cast($object, "Model\Artista");
        }
        else
            return false;
    }

}


?>