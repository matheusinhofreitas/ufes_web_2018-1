<?php
/**
 * Created by PhpStorm.
 * User: mathe
 * Date: 16-May-18
 * Time: 7:00 PM
 */

namespace Controller;

use DAL\ArtistaDAL;
use Model\Artista;

include_once "DAL/artistaDAL.php";

class SiteController
{
    public function load(){
        $artistaDAL = new ArtistaDAL();
        $artistas = $artistaDAL->listAll();
        $_REQUEST['artistas'] = $artistas;
        require_once 'View/Site/main.php';


    }

}