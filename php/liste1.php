
<?php
include ('database1.php');

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

      <h2>liste des Tuteurs</h2>



      <?php
        
    
        
        $query = "SELECT * FROM `tuteur` order by nom";
        $result = mysqli_query ($data,$query);
        if ($result){
            echo '
                  <table class="table caption-top">
                      
                      <thead>
                        <tr>
                          <th scope="col">N°</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Prénom</th>
                          <th scope="col">Email</th>
                          <th scope="col">Numero</th>
                        </tr>
                      </thead>

                      ';
                      $nu=1;

                      // while ($bdd= $recpUser->fetch($recupUser)){

                        while ($data= mysqli_fetch_assoc($result)){
                          echo '
                        <tr>
                        <th scope="row">'.$nu.'</th>
                        <td>'.$data["nom"].'</td>
                        <td>'.$data["prenom"].'</td>
                        <td>'.$data["email"].'</td>
                        <td>'.$data["numero"].'</td>
                      </tr>

                        ' ;

                        $nu+=1;
                      }
                       echo'
                      </tbody>
                    </table>';
                    }

              ?>
              
              
                    <div class="modal-footer">
                        <a href="index.php"><button class="btn btn-primary" data-bs-target="index.php" data-bs-toggle="modal">Retour</button></a>
                      </div>

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