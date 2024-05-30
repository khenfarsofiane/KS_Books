<?php

   $nom = $_POST['nom'];
   $Prénom = $_POST['Prénom'];
   $email = $_POST['email'];
   $Num = $_POST['Num'];
   $nlivre = $_POST['nlivre'];
   $Auteur = $_POST['Auteur'];
   $Édition = $_POST['Édition'];
   $ISBN = $_POST['ISBN'];

  
$host = "localhost";
$dbname = "form";
$username = "root";
$password = "";

$conn = mysqli_connect('localhost','root','','form');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO `cmd_autr_livr` (`nom`, `Prénom`, `email`,`Num`,`nlivre`,`Auteur`,`Édition`,`ISBN`) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssss", $nom, $Prénom, $email, $Num, $nlivre, $Auteur, $Édition, $ISBN);

if ($stmt->execute()) {
    
    echo "Votre demande est en cours de traitement";
} else {
    echo "Erreur: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>