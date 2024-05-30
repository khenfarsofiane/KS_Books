
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gestion des utilisateurs</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin.css">

</head>
<body>
   
<section id="service" class="about">
    


    <div class="row">
        <table border="1">
        <thead>
            <th>nom</th>
            <th>email</th>
            <th>type</th>
            
        </thead>
        <tbody>
              <?php
              //connexion vers la Bd
              $serveur="localhost";
              $utilisateur="root";
              $mot_de_passe="";
              $base_de_donnee="form";
              $mysqli=new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnee);
              //requete pour la recuperation de donnees
              $requete="SELECT * FROM user_form";
              //Execution de la requete
              $resultat=$mysqli->query($requete);
              //la boucle
              while($row=$resultat->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['user_type']."</td>";
              echo "<td><button class='supprimer >Supprimer</button></td>";
              echo "</tr>";
              }
              ?>
              </tbody>
            
        </table>
        </div>
      </div>






    </section><!-- End About Section -->

</body>
</html>