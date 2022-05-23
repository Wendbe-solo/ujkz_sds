

<?php 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=sds', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
 catch (Exception $e) {
    die('Erreur vous avez un probleme de connexion a la base de donnees');
}

?>