<?php
namespace Model;

class Artista{
    private $idArtista;
    private $nome;
    private $nomeArtistico;
    private $descricao;
    private $bio;
    private $facebook;
    private $instagram;
    private $soundcloud;
    private $youtube;
    private $site;
    private $foto1;
    private $foto2;
    private $foto3;
    private $agenda;
    function __construct($idArtista=null,$nome=null,$nomeArtistico=null,$descricao=null,$bio=null,
                         $facebook=null,$instagram=null,$soundcloud=null,$youtube=null,$site=null,
                         $foto1=null,$foto2=null,$foto3=null){
        $this->idArtista=$idArtista;
        $this->nome=$nome;
        $this->nomeArtistico=$nomeArtistico;
        $this->descricao=$descricao;
        $this->bio=$bio;
        $this->facebook=$facebook;
        $this->instagram=$instagram;
        $this->soundcloud=$soundcloud;
        $this->youtube=$youtube;
        $this->site=$site;
        $this->foto1=$foto1;
        $this->foto2=$foto2;
        $this->foto3=$foto3;
        $this->agenda = array();
    }



    
    public function get_idArtista(){
        return $this->idArtista;
    }
    public function get_nome(){
        return $this->nome;
    }
    public function get_nomeArtistico($replace = false){
        if($replace){
            return str_replace(" ","",$this->nomeArtistico);
        }
        else {
            return $this->nomeArtistico;
        }
    }
    public function get_descricao(){
        return $this->descricao;
    }
    public function get_bio(){
        return $this->bio;
    }
    public function get_facebook(){
        return $this->facebook;
    }
    public function get_instagram(){
        return $this->instagram;
    }
    public function get_soundcloud(){
        return $this->soundcloud;
    }
    public function get_youtube(){
        return $this->youtube;
    }
    public function get_site(){
        return $this->site;
    }
    public function get_foto1($savarBD = false){
        if($savarBD){
            return str_replace('\\','\\\\',$this->foto1);
        }
        else {
            return $this->foto1;
        }
    }
    public function get_foto2($savarBD = false){
        if($savarBD){
            return str_replace('\\','\\\\',$this->foto2);
        }
        else {
            return $this->foto2;
        }
    }
    public function get_foto3($savarBD = false){
        if($savarBD){
            return str_replace('\\','\\\\',$this->foto3);
        }
        else {
            return $this->foto3;
        }
    }


    public function set_idArtista($idArtista){
        $this->idArtista = $idArtista;
    }
    public function set_nome($nome){
        $this->nome = $nome;
    }
    public function set_nomeArtistico($nomeArtistico){
        $this->nomeArtistico = $nomeArtistico;
    }
    public function set_descricao($descricao){
        $this->descricao = $descricao;
    }
    public function set_bio($bio){
        $this->bio = $bio;
    }
    public function set_facebook($facebook){
        $this->facebook = $facebook;
    }
    public function set_instagram($instagram){
        $this->instagram = $instagram;
    }
    public function set_soundcloud($soundcloud){
        $this->soundcloud = $soundcloud;
    }
    public function set_youtube($youtube){
        $this->youtube = $youtube;
    }
    public function set_site($site){
        $this->site = $site;
    }
    public function set_foto1($foto1){
        $this->foto1 = $foto1;
    }
    public function set_foto2($foto2){
        $this->foto2 = $foto2;
    }
    public function set_foto3($foto3){
        $this->foto3 = $foto3;
    }
    

}




?>