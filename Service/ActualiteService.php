<?php
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Actualite.php';
include_once RACINE_PATH.'/Classe/Admin.php';
include_once RACINE_PATH.'/Dao/Idao.php';
include_once RACINE_PATH.'/Connexion/Connexion.php';
class ActualiteService implements IDao
{
    private $connexion;
     private $listactualite=array();
    private $actualite;
    private $admin;

    /**
     * ProjetService constructor.
     */
    public function __construct()
    {
        $this->connexion=new Connexion();
        $this->actualite=new Actualite("","","","","");
          $this->admin=new Admin();
    }

    public function create($actualite)
    {
        $query = "INSERT INTO actualite (titre,description,date,img,idAdm) VALUES ('" . $actualite->getTitre() . "','" .$actualite->getDescription() . "','" . $actualite->getDate() . "','" . $actualite->getImg() . "','" . $actualite->getAdmin() . "')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    
    public function getAll()
    {
        $query = "select * from actualite order by idact desc";
         $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->listactualite[]= new Actualite($affichage->idact,$affichage->titre,$affichage->description,$affichage->date,$affichage->img);
        }
        return $this->listactualite;
    }

      public function getAllAndroid()
    {
        $query = "select * from actualite order by idact desc";
         $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
           return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function update($actualite)
    {
        $query = "UPDATE actualite SET titre='" . $actualite->getTitre() . "', description='" . $actualite->getDescription() . "', date='" . $actualite->getDate() ."', img='" . $actualite->getImg() ."' WHERE idact=" . $actualite->getIdact();
    $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM actualite WHERE idact = " .$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    public function getById($id)
    {
        $query = "select * from actualite WHERE idact = ".$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->actualite= new Actualite($affichage->idact,$affichage->titre,$affichage->description,$affichage->date,$affichage->img);
        }
        return $this->actualite;
    }
	
	    public function getByIdAndroid()
    {
        $query = "select * from actualite WHERE idact = 2";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
	
	



}