<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire php</title>
</head>


<body>

    
<h1>Contact</h1>

<form action="http://localhost:3000/contact.php" method="GET">
    <input type="text" name="nom" placeholder="Nom" />
    <input type="text" name="prenom" placeholder="Prénom" />
    <input type="email" name="mail" placeholder="Adresse mail" >
    <input type="text" name="téléphone" placeholder="Numéro de téléphone" >
    <input type="text" name="adresse" placeholder="Adresse postale" >

    <input class="submit" type="submit" value = "Envoyer">
    <input class = "reset" type="reset" value="Annuler">
    
   </form>

</body>
</html>


<?php
// Je récupère mes données 
$name = $_GET["nom"];
$prenom = $_GET["prénom"];
$mail = $_GET["mail"];
$telephone = $_GET["téléphone"];
$adresse = $_GET["adresse"];

// Je crée un tableau dans lequel je rentre mes données
$tableau = [$name, $prenom, $mail, $telephone, $adresse];

// J'affiche mon tableau
// print_r ($tableau);

// Lorsque je retire l'attribut name de l'input, aucune valeur n'est ajoutée dans mon tableau
// Lorsque j'ouvre mon fichier php, je trouve un tableau vide
?>