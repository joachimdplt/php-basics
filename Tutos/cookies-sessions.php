<?php

/*

setcookie()	                Crée un cookie stocké sur l’ordinateur de l’utilisateur.

$_COOKIE	                Accède aux cookies stockés.

session_start()	            Démarre une session PHP.

$_SESSION	                Stocke des données de session accessibles sur plusieurs pages

*/

setcookie("utilisateur", "Alice", time() + 3600); // Stocké pendant 1 heure
echo "Cookie créé";

///

session_start();
$_SESSION["nom"] = "Alice";
echo "Session enregistrée";


?>
