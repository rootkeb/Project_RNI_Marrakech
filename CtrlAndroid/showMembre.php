<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
include 'racine.php';
include_once 'service/MembreService.php';
    showMembres();
}
function showMembres() {
$ss = new MembreService();
header('Content-type: application/json');
echo json_encode(array("Membres" => $ss->getAll()));


}