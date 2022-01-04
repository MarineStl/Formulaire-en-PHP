<?php

$name = $_GET["nom"];
$prenom = $_GET["prénom"];
$mail = $_GET["mail"];
$telephone = $_GET["téléphone"];
$adresse = $_GET["adresse"];

$tableau = [$name, $prenom, $mail, $telephone, $adresse];
print_r ($tableau);

?>