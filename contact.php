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

<form action="http://localhost:3000/contact.php" method="POST">
            
        <input type="text" name = "name" placeholder="Entrer votre Nom">
        <input type="text" name = "prenom" placeholder="Entrer votre Prénom">
        <input type="mail" name = "mail" placeholder="Entrer votre Email">
        <input type="tel" name = "telephone" placeholder="Entrer votre Téléphone">
        <input type="text" name = "adresse" placeholder="Entrer votre Adresse">
        <input class="submit" type="submit" value = "Envoyer">
        <input class = "reset" type="reset" value="Annuler">
</form>

</body>
</html>


<?php
// Je RECUPERE mes données 
$name = $_POST ['name'];
$prenom = $_POST ['prenom'];
$email = $_POST ['mail'];
$telephone = $_POST ["telephone"];
$adresse = $_POST ["adresse"];

// Je CREE un TABLEAU dans lequel je rentre mes données
$tableau = [$name,$prenom,$email,$telephone,$adresse];

// J'AFFICHE mon tableau
print_r ($tableau);

// Lorsque je retire l'attribut name de l'input, aucune valeur n'est ajoutée dans mon tableau
// Lorsque j'ouvre mon fichier php, je trouve un tableau vide


function validatePhoneNumber($string) // creation fonction pour valider le tel
{
    $phoneNumberArray =str_split($string); // creation d'un tableau avec str_splice pour separer les chiffres//
    if ($phoneNumberArray[0] !=0) {// si le premier chiffre different (!=) de 0 alors
        return false;
    }
    foreach($phoneNumberArray as $value){ // 
        if( !is_numeric($value)){// verif que chaque caractere = numerique
        return false;
    }
    }
    if (strlen($string) != 10){ // verif taille du numero
        return false;
    }
    return true;
}



// Si au moins un champ non rempli dans le formulaire, 
// le tableau ne sera pas AFFICHE et le message « Champs manquants » est apparaît.
if(empty($name) || empty($prenom) || empty($email) || empty($telephone) || empty($adresse)){
    echo "champs manquants";
    }
    else {
        // print_r($tableau);
    }


// Le NOM doit contenir au moins 3 lettres 
if(strlen($_POST['name']) <=3) 
{ 
    echo "Votre nom doit posséder au moins 3 caractères.";
}// et aucun chiffre
elseif(!ctype_alpha($name));
{ 
    echo "Votre nom ne peut pas contenir de chiffres.";
}


// le PRENOM  doit contenir au moins 3 caracteres et pas de chiffre//
if(strlen($_POST['prenom']) <=3) { 
    echo "Votre prenom doit posséder au moins 3 caractères.";
}
elseif(!ctype_alpha($prenom))
{
    echo "votre nom contient des caracteres non autorises";
}



//L'email doit être valide (forme: username@exemple.com)//
$email = "username@exemple.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)=== false) {
echo "L'adresse email est invalide elle doit etre sous forme username@exemple.com.";
}

//-Le numéro de téléphone doit être valide (exemple: 0600000000)//
elseif (validatePhoneNumber($telephone) === false){
    echo "Le numero de téléphone ne doit contenir que des chiffres";
    }
?>