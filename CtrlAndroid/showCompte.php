<?php

include 'racine.php';
include_once 'service/CompteService.php';

$ss = new CompteService();
header('Content-type: application/json');
echo json_encode(array("comptes" => $ss->getAll()));

