<?php
include_once RACINE_PATH.'/Classe/Compte.php';
/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/25/2017
 * Time: 1:41 PM
 */
class Admin extends Compte
{
public function __construct($iduser, $nom, $prenom, $cin, $tel,$img, $email, $adresse, $password)
{
    parent::__construct($iduser, $nom, $prenom, $cin, $tel,$img, $email, $adresse, $password);
}

}