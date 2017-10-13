<?php
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Evenement.php';
include_once RACINE_PATH.'/Classe/Admin.php';
include_once RACINE_PATH.'/Dao/Idao.php';
include_once RACINE_PATH.'/Connexion/Connexion.php';
class EvenementService implements IDao
{
    private $connexion;
     private $listevenement=array();
    private $evenement;
      private $admin;


    /**
     
     */
    public function __construct()
    {
        $this->connexion=new Connexion();
        $this->evenement=new Evenement("","","","","");
          $this->admin=new Admin();
    }

   public function create($evenement)
    {
        $query = "INSERT INTO evenement (titre,date,description,img,idAdm) VALUES ('" . $evenement->getTitre() . "','" .$evenement->getDate() . "','" . $evenement->getDescription() . "','" . $evenement->getImg() . "','" . $evenement->getAdmin() . "')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }


    public function getAll()
    {
        $query = "select * from evenement";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->listevenement[]= new Evenement($affichage->ideevn,$affichage->titre,$affichage->date,$affichage->description,$affichage->img);
        }

        return $this->listevenement;
    }




    public function update($evenement)
    {
        $query = "UPDATE evenement SET description='" . $evenement->getDescription() . "', titre='" . $evenement->getTitre() . "', img='" . $evenement->getImg() ."', date='" . $evenement->getDate() ."' WHERE ideevn=" . $evenement->getIdeevn();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM evenement WHERE ideevn = " .$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    public function getById($id)
    {
        $query = "select * from evenement WHERE id = ".$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->evenement= new Evenement($affichage->ideevn, $affichage->titre, $affichage->date,$affichage->description,$affichage->img);
        }
        return $this->evenement;
    }



}