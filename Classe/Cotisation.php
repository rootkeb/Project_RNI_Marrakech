<?php

/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/23/2017
 * Time: 3:06 AM
 */
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Membre.php';
class Cotisation
{
    private $idcot;
    private $Somme;
    private $date;
    private $Membre;

    /**
     * Cotisation constructor.
     * @param $idcot
     * @param $Somme
     * @param $date
     */
    function __construct($idcot, $Somme, $date, $Membre) {
        $this->idcot = $idcot;
        $this->Somme = $Somme;
        $this->date = $date;
        $this->Membre = $Membre;
    }

    
    function getIdcot() {
        return $this->idcot;
    }

    function getSomme() {
        return $this->Somme;
    }

    function getDate() {
        return $this->date;
    }

    function getMembre() {
        return $this->Membre;
    }

    function setIdcot($idcot) {
        $this->idcot = $idcot;
    }

    function setSomme($Somme) {
        $this->Somme = $Somme;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setMembre($Membre) {
        $this->Membre = $Membre;
    }


}