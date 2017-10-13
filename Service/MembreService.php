<?php
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Membre.php';
include_once RACINE_PATH.'/Dao/Idao.php';
include_once RACINE_PATH.'/Connexion/Connexion.php';
class MembreService implements IDao
{

    private $connexion;
    private $membre;
    private $listmembre=array();

    
    public function __construct()
    {
        $this->connexion=new Connexion();
        $this->membre=new Membre("","","","","","","","","");
        
    }

    public function create($membre)
    {
        $query = "INSERT INTO membre (nom, prenom, cin, tel,email, adresse, password, profesion) VALUES ('" .$membre->getNom() . "','" . $membre->getPrenom() . "','', '', '". $membre->getEmail() ."', '','".$membre->getPassword()."', '')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }
    
 public function getAll()
    {
        $query = "select * from membre order by iduser desc";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->listmembre[]= new Membre($affichage->iduser,$affichage->nom,$affichage->prenom,$affichage->cin,$affichage->tel,$affichage->email,$affichage->adresse,$affichage->username,$affichage->password,$affichage->professoin);
        }

        return $this->listadmin;
    }
   public function update($membre)
    {
        $query = "UPDATE membre
            SET code='" . $membre->getCode() . "', libelle='" . $membre->getLibelle() . "'
            WHERE id=" . $membre->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM membre WHERE id = " .$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }
     public function getById($id)
    {
        $query = "select * from membre WHERE id = ".$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->projet= new Admin($affichage->iduser,$affichage->nom,$affichage->prenom,$affichage->cin,$affichage->tel,$affichage->email,$affichage->adresse,$affichage->username,$affichage->password);
        }
        return $this->admin;
    }

    


}