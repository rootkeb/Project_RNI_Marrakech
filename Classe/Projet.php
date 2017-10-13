<?php

/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/23/2017
 * Time: 3:05 AM
 */
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Admin.php';
class Projet
{
    private $idpro;
    private $titre;
    private $date;
    private $desription;
    private $img;
    private $Admin;

    /**
     * Projet constructor.
     * @param $desription
     * @param $date
     * @param $titre
     * @param $img
     */
    function __construct($idpro, $titre, $date, $desription, $img, $Admin) {
        $this->idpro = $idpro;
        $this->titre = $titre;
        $this->date = $date;
        $this->desription = $desription;
        $this->img = $img;
        $this->Admin = $Admin;
    }
    function getIdpro() {
        return $this->idpro;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDate() {
        return $this->date;
    }

    function getDesription() {
        return $this->desription;
    }

    function getImg() {
        return $this->img;
    }

    function getAdmin() {
        return $this->Admin;
    }

    function setIdpro($idpro) {
        $this->idpro = $idpro;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setDesription($desription) {
        $this->desription = $desription;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function setAdmin($Admin) {
        $this->Admin = $Admin;
    }




}