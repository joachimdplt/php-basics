<?php
// Exercice 2 : Vérification de l'âge
// php -S localhost:8000 en cli pour demmarer le server
?>
<form method="post">
    Entrez votre âge : <input type="number" name="age">
    <input type="submit" value="Vérifier">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"]; // Récupérer l'âge depuis le formulaire

    if ($age >= 18) {
        echo "Vous êtes majeur.";
    } else {
        echo "Vous êtes mineur.";
    }
}
?>