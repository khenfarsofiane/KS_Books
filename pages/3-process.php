<?php

   $name = $_POST['name'];
   $Prénom = $_POST['Prénom'];
   $email = $_POST['email'];
   $Num = $_POST['Num'];
   $ville = $_POST['ville'];
   $Région = $_POST['Région'];
   $Address = $_POST['Address'];
   $qnt = $_POST['qnt'];

  
$host = "localhost";
$dbname = "form";
$username = "root";
$password = "";

$conn = mysqli_connect('localhost','root','','form');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO `commande` (`name`, `Prénom`, `email`,`Num`,`ville`,`Région`,`Address`,`qnt`) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssss", $name, $Prénom, $email, $Num, $ville, $Région, $Address, $qnt);

if ($stmt->execute()) {
    
    echo "Nouvelle commande enregistrée avec succès";
} else {
    echo "Erreur: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

   