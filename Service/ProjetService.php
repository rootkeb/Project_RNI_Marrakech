<?php
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Projet.php';
include_once RACINE_PATH.'/Classe/Admin.php';
include_once RACINE_PATH.'/Dao/Idao.php';
include_once RACINE_PATH.'/Connexion/Connexion.php';
class ProjetService implements IDao
{
    private $connexion;
     private $listprojet=array();
    private $projet;
      private $admin;


    /**
     * ProjetService constructor.
     */
    public function __construct()
    {
        $this->connexion=new Connexion();
        $this->projet=new Projet("","","","","");
          $this->admin=new Admin();
    }

    public function create($projet)
    {
        $query = "INSERT INTO projet (desription,titre,img,date,idAdm) VALUES ('" . $projet->getDesription() . "','" .$projet->getTitre() . "','" . $projet->getImg() . "','" . $projet->getDate() . "','" . $projet->getAdmin() . "')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    
    public function getAll()
    {
        $query = "select * from projet order by idpro desc";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->listprojet[]= new Projet($affichage->idpro,$affichage->titre,$affichage->date,$affichage->desription,$affichage->img);
        }

        return $this->listprojet;
    }




    public function update($projet)
    {
        $query = "UPDATE projet SET description='" . $projet->getDescription() . "', titre='" . $projet->getTitre() . "', img='" . $projet->getImg() ."', date='" . $projet->getDate() ."' WHERE idpro=" . $projet->getIdpro();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM projet WHERE idpro=".$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    public function getById($id)
    {
        $query = "select * from projet WHERE idpro = ".$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->projet= new Projet($affichage->idpro,$affichage->titre,$affichage->date,$affichage->description,$affichage->img);
        }
        return $this->projet;
    }



}