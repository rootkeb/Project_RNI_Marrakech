<?php
include_once RACINE_PATH.'/Classe/Compte.php';
/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/23/2017
 * Time: 2:56 AM
 */
class Membre extends Compte
{

private $profession;

    public function __construct($iduser, $nom, $prenom, $cin, $tel,$img, $email, $adresse, $password,$profession)
    {
        parent::__construct($iduser, $nom, $prenom, $cin, $tel,$img, $email, $adresse, $password);
                $this->profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }




}