<?php

/*

$_POST	                    Récupère les données envoyées via un formulaire en méthode POST.
$_GET	                    Récupère les données envoyées via un formulaire en méthode GET.
$_SERVER	                Contient des informations sur le serveur et l’environnement.

*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Données reçues : " . $_POST["nom"];
}

?>