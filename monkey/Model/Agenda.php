<?php
namespace Model;

class Agenda
{
    private $idAgenda;
    private $idArtista;
    private $data;
    private $hora;
    private $local;
    private $evento;
    private $facebook;
    private $instagram;
    private $foto;

    function __construct($idAgenda = null, $idArtista = null, $data = null, $hora = null, $local = null,
                         $evento = null, $facebook = null, $instagram = null, $foto = null)
    {
        $this->idAgenda = $idAgenda;
        $this->idArtista = $idArtista;
        $this->data = $data;
        $this->hora = $hora;
        $this->local = $local;
        $this->evento = $evento;
        $this->facebook = $facebook;
        $this->instagram = $instagram;
        $this->foto = $foto;
    }

    public function set_idAgenda($idAgenda)
    {
        $this->idAgenda = $idAgenda;
    }

    public function set_idArtista($idArtista)
    {
        $this->idArtista = $idArtista;
    }

    public function set_data($data)
    {
        $this->data = $data;
    }

    public function set_hora($hora)
    {
        $this->hora = $hora;
    }

    public function set_local($local)
    {
        $this->local = $local;
    }

    public function set_evento($evento)
    {
        $this->evento = $evento;
    }

    public function set_facebook($facebook)
    {
        $this->facebook = $facebook;
    }

    public function set_instagram($instagram)
    {
        $this->instagram = $instagram;
    }

    public function set_foto($foto)
    {
        $this->foto = $foto;
    }

    public function get_idAgenda()
    {
        return $this->idAgenda;
    }

    public function get_idArtista()
    {
        return $this->idArtista;
    }

    public function get_data()
    {
        return $this->data;
    }

    public function get_hora()
    {
        return $this->hora;
    }

    public function get_local()
    {
        return $this->local;
    }

    public function get_evento()
    {
        return $this->evento;
    }

    public function get_facebook()
    {
        return $this->facebook;
    }

    public function get_instagram()
    {
        return $this->instagram;
    }

    public function get_foto($savarBD = false)
    {
        if($savarBD){
            return str_replace('\\','\\\\',$this->foto);
        }
        else {
            return $this->foto;
        }
    }


}


?>