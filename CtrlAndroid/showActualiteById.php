
<?php


    include 'racine.php';
    include_once 'service/ActualiteService.php';
   



     $ss = new ActualiteService();
   header('Content-type: application/json');
    echo json_encode(array("NewsById" => $ss->getByIdAndroid()));

