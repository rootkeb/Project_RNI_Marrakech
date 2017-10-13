
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'racine.php';
    include_once '../service/ProjetService.php';
    showProjects();
}

function showProjects() {
    $ss = new ProjetService();
    header('Content-type: application/json');
    echo json_encode(array("Projects" => $ss->getAll()));

}