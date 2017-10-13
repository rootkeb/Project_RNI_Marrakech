<?php

/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/25/2017
 * Time: 2:35 PM
 */
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Admin.php';
class Actualite
{
    private $idact;
    private $titre;
    private $description;
    private $date;
    private $img;
   private $Admin;

    /**
     * Actualite constructor.
     * @param $idact
     * @param $titre
     * @param $description
     * @param $date
     * @param $img
     */
    function __construct($idact, $titre, $description, $date, $img, $Admin) {
        $this->idact = $idact;
        $this->titre = $titre;
        $this->description = $description;
        $this->date = $date;
        $this->img = $img;
        $this->Admin = $Admin;
    }

    function getIdact() {
        return $this->idact;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getDate() {
        return $this->date;
    }

    function getImg() {
        return $this->img;
    }

    function getAdmin() {
        return $this->Admin;
    }

    function setIdact($idact) {
        $this->idact = $idact;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function setAdmin($Admin) {
        $this->Admin = $Admin;
    }




}