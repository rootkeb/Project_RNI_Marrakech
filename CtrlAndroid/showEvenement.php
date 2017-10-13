
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'racine.php';
    include_once '../service/EvenementService.php';
    showEvents();
}

function showEvents() {
    $ss = new EvenementService();
    header('Content-type: application/json');
    echo json_encode(array("Events" => $ss->getAll()));

}