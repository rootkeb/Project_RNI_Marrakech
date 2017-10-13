<?php

/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/23/2017
 * Time: 3:08 AM
 */
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Membre.php';
class Don
{
    private $iddon;
    private $somme;
    private $date;
    private $Membre;

    /**
     * Don constructor.
     * @param $iddon
     * @param $somme
     * @param $date
     */
    function __construct($iddon, $somme, $date, $Membre) {
        $this->iddon = $iddon;
        $this->somme = $somme;
        $this->date = $date;
        $this->Membre = $Membre;
    }
    function getIddon() {
        return $this->iddon;
    }

    function getSomme() {
        return $this->somme;
    }

    function getDate() {
        return $this->date;
    }

    function getMembre() {
        return $this->Membre;
    }

    function setIddon($iddon) {
        $this->iddon = $iddon;
    }

    function setSomme($somme) {
        $this->somme = $somme;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setMembre($Membre) {
        $this->Membre = $Membre;
    }



}