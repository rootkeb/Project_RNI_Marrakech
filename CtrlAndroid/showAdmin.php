<?php

include 'racine.php';
include_once 'service/AdminService.php';

$ss = new AdminService();
header('Content-type: application/json');
echo json_encode(array("Admins" => $ss->getAll()));

