<?php
session_start();

include ('database.php');

if(isset($_POST['envoi'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom'])  AND  !empty($_POST['email']) AND !empty($_POST['numero'])){
        
        $nom =  htmlspecialchars($_POST['nom']);
        $prenom =  htmlspecialchars($_POST['prenom']);
        $pseudo = htmlspecialchars($_POST['email']);
        $numero = htmlspecialchars($_POST['numero']);

        $insertUser = $bdd->prepare('INSERT INTO tuteur (nomtu,prenomtu,emailtu,numerotu)VALUES (?,?,?,?) ');
        $insertUser->execute(array($nom, $prenom,$pseudo, $numero));

        $recupUser = $bdd->prepare('SELECT * FROM tuteur WHERE  nomtu =? AND prenomtu= ? AND emailtu = ? AND numerotu =?');
        $recupUser->execute(array($nom,$prenom,$pseudo, $numero));
        if($recupUser->rowCount() > 0){
            
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['email'] = $pseudo;
            $_SESSION['numero'] = $numero;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }

        
        echo 'Enregistrer avec succès';
        header('Location: ./index.php');
        

        
        

        
    }else{
        echo "veuillez compléter tous les champ ...";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>université</title>
</head>
<body class="container bod">

    <div class="card heade mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../image/Logo_Université_de_Ouagadougou.jpg" width="200px" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title">Université Joseph KI ZERBO <br> de OUAGADOUGOU </h4>
              <br><br><br>
              <h5 class="card-text">Application de gestion des Etudiants de UFR-SDS</h5>
            </div>
          </div>
        </div>
      </div>

      <br><br>
      <div class="container travail">

      <h3 class="text-center viens">Inscription Tuteur </h3>




      <center>
        <form action="" method="post" class="">
            <input type="text" name="nom" id="nom" class="formulaire" placeholder="NOM"> <br><br>
            <input type="text" name="prenom" id="prenom" class="formulaire" placeholder="PRENOM"> <br><br>
            
            <input type="email" name="email" id="emai" class="formulaire" placeholder="EMAIL"> <br><br>
            <input type="text" name="numero" class="formulaire" placeholder=" NUMERO" > <br><br>
        <p>
    </p>
    <div class="container flex">
     <a href="./index.php" class="formula">Retour
    </a>
    <input type="submit" value="Enregistrer"class="formula" name="envoi">
</div>
        </form>
        </center>
    </div>
<br> <br>



    <div class="d-flex bd-highlight fote">
        <div class="p-2 flex-fill bd-highlight">NOUS CONTACTER <br>
            Email: contact@ujkz.bf <br>
            Telephone: +226 25 30 70 64 /65 <br>
            Adresse: 03 BP 7021 Ouagadougou <br>
            03</div>
        <div class="p-2 flex-fill bd-highlight">Sciences de la Santé (SDS)</div>
        <div class="p-2 flex-fill bd-highlight">BIBLIOTHEQUES <br>
            Vous avez accès à plus <br>
            de 25 000 documents et <br>
            ouvrages.</div>
      </div>

      <p class="text-center fote">Copyright © Université Joseph KI-ZERBO 2022</p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>