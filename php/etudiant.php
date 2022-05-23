



<?php

        include('database1.php');
    if(isset($_POST['envoi'])){

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
            header('Location: ./ficheabo.php');
        }
    }

?>








                <?php

                include('database1.php');
                if(isset($_POST['envoimodal'])){

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
                }

                ?>
