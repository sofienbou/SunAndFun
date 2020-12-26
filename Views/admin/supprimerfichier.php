<?php
include "../../Controller/actualiteesC.php";
$ac = new actualiteesC();

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: gestionfichier.php');
}

$ac->supprimer($id);

header('Location: gestionfichier.php');