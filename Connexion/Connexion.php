<?php

/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/23/2017
 * Time: 11:24 AM
 */
class Connexion
{
    private $connextion;

    public function __construct() {

        $host = 'localhost';
        $dbname ='Project_RNI_Marrakech';
        $login = 'root';
        $password = '';

        try {
            $this->connextion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connextion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());


        }
    }

    function getConnexion() {
        return $this->connextion;
    }

}
