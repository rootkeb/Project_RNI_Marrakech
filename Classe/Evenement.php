<?php

/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/23/2017
 * Time: 2:58 AM
 */
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Admin.php';
class Evenement
{
    private $ideevn;
    private $titre;
    private $date;
    private $description;
    private $img;
    private $Admin;

    /**
     * Evenement constructor.
     * @param $ideevn
     * @param $titre
     * @param $date
     * @param $descriptiom
     * @param $img
     */
    function __construct($ideevn, $titre, $date, $description, $img, $Admin) {
        $this->ideevn = $ideevn;
        $this->titre = $titre;
        $this->date = $date;
        $this->description = $description;
        $this->img = $img;
        $this->Admin = $Admin;
    }
    function getIdeevn() {
        return $this->ideevn;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDate() {
        return $this->date;
    }

    function getDescription() {
        return $this->description;
    }

    function getImg() {
        return $this->img;
    }

    function getAdmin() {
        return $this->Admin;
    }

    function setIdeevn($ideevn) {
        $this->ideevn = $ideevn;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function setAdmin($Admin) {
        $this->Admin = $Admin;
    }




}