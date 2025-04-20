<?php
// Exercice 2 : Vérification de l'âge
// php -S localhost:8000 en cli pour demmarer le server
// Récupérer l'âge depuis le formulaire

/// Pour verifier l'âge, je dois creer un formulaire qui va permettre : - à l'utilisateur d'inserer son age 
//                                                                      - à l'utilisateur de verfier son age


?>

<form_data method ="post">
    <input type="number" name="age">
    <input type="submit" name="verifier">
</form_data>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $age = $_POST["age"];
}  if ($age >= 18) { 
    echo "Vous etes majeur";
} else {
    echo "Vous etes mienur";
}

?>
