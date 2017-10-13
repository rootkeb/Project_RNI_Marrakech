<?php


class Compte
{
    private $iduser;
    private $nom;
    private $prenom;
    private $cin;
    private $tel;
    private $img;
    private $email;
    private $adresse;

    private $password;

    /**
     * Compte constructor.
     * @param $iduser
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $password
     */
    
    function __construct($iduser, $nom, $prenom, $cin, $tel, $img, $email, $adresse, $password) {
        $this->iduser = $iduser;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->cin = $cin;
        $this->tel = $tel;
        $this->img = $img;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->password = $password;
    }
    function getIduser() {
        return $this->iduser;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getCin() {
        return $this->cin;
    }

    function getTel() {
        return $this->tel;
    }

    function getImg() {
        return $this->img;
    }

    function getEmail() {
        return $this->email;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getPassword() {
        return $this->password;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setCin($cin) {
        $this->cin = $cin;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setPassword($password) {
        $this->password = $password;
    }

        
    
    /**
 * Compte constructor.
 * @param $iduser
 * @param $nom
 * @param $prenom
 * @param $cin
 * @param $tel
 * @param $email
 * @param $adresse
 * @param $password
 */


    
}
