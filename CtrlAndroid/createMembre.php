
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'racine.php';
    include_once 'service/MembreService.php';

    create();
}

function create (){
    
        $nom = $_POST['nom'];
        $phone = $_POST['$phone'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
     
        $ss = new MembreService();
        $ss->create(new Membre(1, $nom, "prenom", "cin", $phone, $email, "adresse", $mdp,"profession"));
   
}


