
<?php

include ("database1.php");


$query = " SELECT * FROM tuteur";
$result = mysqli_query($data,$query) or die (mysqli_connect_error($data));
$rows= mysqli_fetch_all($result,MYSQLI_ASSOC);


?>





<?php

        include('database1.php');
    if(isset($_POST['envoi'])){
      if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND  !empty($_POST['age'])  AND  !empty($_POST['email']) AND !empty($_POST['numero'])){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age =  $_POST['age'];
        $pseudo = $_POST['email'];
        $numero = $_POST['numero'];
        $tuteur = $_POST['id'];


        $sql = "INSERT INTO `etudiants` (`nom`,`prenom`,`date_naissance`,`email`,`numero`,`id_tuteur`) 
        VALUES ('$nom','$prenom','$age','$pseudo', '$numero','$tuteur')";
        $result = mysqli_query($data,$sql);
        if($result){
            echo "etudiant enregistrer";
            header('Location: ./index.php');
        } else{
            echo "etudiant non enregistrer";
        }
         }
         echo "remplissez tout les champs";
    }

?>








                <?php

                include('database1.php');
                if(isset($_POST['envoimodal'])){
                  if(!empty($_POST['nom']) AND !empty($_POST['prenom'])  AND  !empty($_POST['email']) AND !empty($_POST['numero'])){

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $pseudo = $_POST['email'];
                $numero = $_POST['numero'];


                $sql = "INSERT INTO `tuteur` (`nomtu`,`prenomtu`,`emailtu`,`numerotu`) 
                VALUES ('$nom','$prenom','$pseudo', '$numero')";
                $result = mysqli_query($data,$sql);
                if($result){
                    echo "tuteur enregistrer";
                    header('Location: ./ficheabo.php');
                    
                } else{
                    echo "tuteur non enregistrer";
                    
                }
                 }echo "veuillez compléter tous les champ ..."; 
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

          <h3 class="text-center viens">Inscription Etudiants </h3>

        <center>
          <form action="" method="POST" class="">
              <input type="text" name="nom"  class="formulaire" placeholder="NOM"> <br><br>
              <input type="text" name="prenom" class="formulaire" placeholder="PRENOM"> <br><br>
              <input type="date" name="age"  class="formulaire" placeholder="DATE DE NAISSANCE"> <br><br>
              <input type="email" name="email" class="formulaire" placeholder="EMAIL"> <br><br>
              <input type="number" name="numero" class="formulaire" placeholder=" NUMERO" > <br><br>
              <label for="tuteur">Tuteur</label> <br>
              <select class="formulaire" id="tuteur" name="id">
                <option value="-1"> choisir un tuteur</option>
                <?php
                      foreach($rows as $row){
                        ?> 
                        <option value="<?=$row['id']?>"> <?=$row['nomtu']?> <?=$row['prenomtu']?> </option>

                        <?php 
                      } ?>
                   
            
              </select>

         

                    <br><br>
                        <label class="form-check-label" for="flexRadioDefault1">
                        
                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="non" checked></a>OUI
                        </label>                
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="non" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Non
                        </label>
                    
              <p>
              <?php 
                    if(isset($error))
                    {
                      echo "<p>$error</p>";
                    }
                
                ?>
              </p>
              <div class="container flex">
                <a href="./index.php" class="formula">Retour
                </a>
                <input type="submit" value="Enregistrer"class="formula" name="envoi"><br>

                
              </div>
              </form>
          
        </center>
    </div>
<br> <br>
                    


                 <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Enregistrer Tuteur</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form action="" method="post" class="">
                            <input type="text" name="nom" id="nom" class="formulaire" placeholder="NOM"> <br><br>
                            <input type="text" name="prenom" id="prenom" class="formulaire" placeholder="PRENOM"> <br><br>
                            
                            <input type="email" name="email" id="emai" class="formulaire" placeholder="EMAIL"> <br><br>
                            <input type="text" name="numero" class="formulaire" placeholder=" NUMERO" > <br><br>
                          <p>
                          </p>
                          <input type="submit" value="Enregistrer"class="formula" name="envoimodal">
                          
                        <?php 
                         if(isset($error))
                        {
                           echo "<p>$error</p>";
                         }
                        
                        ?>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="ficheao.php" data-bs-toggle="modal">Retour</button>
                      </div>
                    </div>
                  </div>
                </div>
</form>
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