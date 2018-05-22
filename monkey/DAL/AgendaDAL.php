<?php
namespace DAL;

use Model\Casting;
use Model\Conexao;


include_once "Model/agenda.php";

class AgendaDAL
{
    private $mysqli;

    function __construct(){
        $this->mysqli = Conexao::MySQL();
    }


    public function addOrUpdate($agenda) {
        if ($agenda->get_idAgenda() == null) {
            $query = "INSERT INTO `agenda` (`idAgenda`, `idArtista`, `data`, `hora`, `local`, `evento`, `facebook`, `instagram`, `foto`) 
                      VALUES (NULL, '{$agenda->get_idArtista()}', '{$agenda->get_data()}', '{$agenda->get_hora()}', '{$agenda->get_local()}', 
                      '{$agenda->get_evento()}','{$agenda->get_facebook()}', '{$agenda->get_instagram()}', '{$agenda->get_foto()}');";

        } else {
            $query = "UPDATE `agenda` SET `idArtista` = '{$agenda->get_idArtista()}', `data` = '{$agenda->get_data()}', `hora` = '{$agenda->get_hora()}', 
                      `local` = '{$agenda->get_local()}', `evento` = '{$agenda->get_evento()}', `facebook` = '{$agenda->get_facebook()}', 
                      `instagram` = '{$agenda->get_instagram()}', `foto` = '{$agenda->get_foto(true)}' WHERE `agenda`.`idAgenda` = {$agenda->get_idAgenda()}";
        }
        if ($result = $this->mysqli->query($query)){
            $agenda->set_idAgenda($this->mysqli->insert_id);
            return true;
        }
        else
            return false;
        die;
    }

    public function remove($idAgenda) {
        $query = "DELETE FROM `agenda` WHERE `idAgenda` = $idAgenda";
        if($result = $this->mysqli->query($query)) {
            return true;
        }
        else
            return false;
    }

    public function removeForArtista($idArtista) {
        $query = "DELETE FROM `agenda` WHERE `idArtista` = $idArtista";
        if($result = $this->mysqli->query($query)) {
            return true;
        }
        else
            return false;
    }

    public function listAll() {
        $agenda = array();
        $query = "SELECT * FROM `agenda`";
        if($result = $this->mysqli->query($query)) {
            while ($object = $result->fetch_object()) {
                $evento = Casting::cast($object, "Model\Agenda");
                array_push($agenda, $evento);
            }
            return $agenda;
        }
        else
            return false;
    }

    public function listAllArtista($idArtista) {
        $agenda = array();
        $query = "SELECT * FROM `agenda` WHERE `idArtista` = $idArtista";
        if($result = $this->mysqli->query($query)) {
            while ($object = $result->fetch_object()) {
                $evento = Casting::cast($object, "Model\Agenda");
                array_push($agenda, $evento);
            }
            return $agenda;
        }
        else
            return false;
    }
    public function listOne($idAgenda) {
        $query = "SELECT * FROM `agenda` WHERE `idAgenda` = $idAgenda";
        if($result = $this->mysqli->query($query)) {
            $object = $result->fetch_object();
            return Casting::cast($object, "Model\Agenda");
        }
        else
            return false;
    }

}