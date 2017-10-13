<?php
include_once './racine.php';
include_once RACINE_PATH.'/Classe/Admin.php';
include_once RACINE_PATH.'/Dao/Idao.php';
include_once RACINE_PATH.'/Connexion/Connexion.php';
class AdminService implements IDao
{

    private $connexion;
    private $admin;
    private $listadmin=array();

    
    public function __construct()
    {
        $this->connexion=new Connexion();
        $this->admin=new Admin("","","","","","","","","");
    }

        public function login($email,$password)
    {
        $query = "select * from admin where email='".$email."' and password='".$password."'";
         $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->admin= new Admin($affichage->iduser,$affichage->nom,$affichage->prenom,$affichage->cin,$affichage->tel,$affichage->img,$affichage->email,$affichage->adresse,$affichage->password);
        }
        return $this->admin;
    }
    
    public function create($admin)
    {
        $query = "INSERT INTO admin (iduser,nom,prenom,cin,tel,email,adresse,password) VALUES ('" . $admin->getIduser() . "','" .$admin->getNom() . "','" . $admin->getPrenom() . "','" . $admin->getCin() .  "','". $admin->getTel() ."','". $admin->getEmail() ."','".$admin->getAdresse()."','".$admin->getPassword()."')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }
    
 public function getAll()
    {
        $query = "select * from admin order by iduser desc";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->listadmin[]= new Admin($affichage->iduser,$affichage->nom,$affichage->prenom,$affichage->cin,$affichage->tel,$affichage->img,$affichage->email,$affichage->adresse,$affichage->password);
        }

        return $this->listadmin;
    }
   public function update($admin)
    {
        $query = "UPDATE admin
            SET code='" . $admin->getCode() . "', libelle='" . $admin->getLibelle() . "'
            WHERE id=" . $admin->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM admin WHERE id = " .$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
    }
     public function getById($id)
    {
        $query = "select * from admin WHERE iduser= ".$id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->admin= new Admin($affichage->iduser,$affichage->nom,$affichage->prenom,$affichage->cin,$affichage->tel,$affichage->img,$affichage->email,$affichage->adresse,$affichage->password);
        }
        return $this->admin;
    }

    


}