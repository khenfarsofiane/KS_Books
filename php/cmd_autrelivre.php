<?php
@include 'config.php';
if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>votre livre préféré</title>
   <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-5/assets/css/registration-5.css">
   <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">


   <!-- custom css file link  
   <link rel="stylesheet" href="css/style.css">
-->
</head>
<body>

<!--     bootstrap            -->

<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="card border-light-subtle shadow-sm">
      <div class="row g-0" >
        <div class="col-12 col-md-6 text-bg-warning">
        <a href="Page Officielle.php">  <img class="img-fluid rounded mb-4" loading="lazy" src="../images/books.png" width="250" height="150" alt="BootstrapBrain Logo"></a>

          <div class="d-flex align-items-center justify-content-center h-20">
            <div class="col-10 col-xl-8 py-3">
              <hr class="border-primary-subtle mb-4">
              <h2 class="h1 mb-4">Sur cette page vous pouvez commander votre livre préféré .</h2>
              <p class="lead m-0">Vivez l'expérience des lecteurs avec KS_Books.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h3">Renseignements personnels</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Remplissez votre informations </h3>
                </div>
              </div>
            </div>
            <form action="con_livre.php" method="post">
            
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="name" class="form-label">Le nom <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom" required>
                </div>
                <div class="col-12">
                  <label for="Prénom" class="form-label">Prénom <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="Prénom" placeholder="Entrez votre Prénom" required>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" placeholder="Example@gmail.com" required>
                </div>
                <div class="col-12">
                  <label for="Num" class="form-label">Numéro de téléphone <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" name="Num" required>
                </div>


                <h2 class="h3">Informations sur le livre</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Remplissez les informations de votre livre préféré</h3>
                
                  <div class="col-12">
                  <label for="nlivre" class="form-label">Le nom du livre<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="nlivre" placeholder="Entrez le nom du livre" required>
                </div>
                <div class="col-12">
                  <label for="Auteur" class="form-label">Auteur(s) <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="Auteur" placeholder="Entrez l'auteur du livre" required>
                </div>
                <div class="col-12">
                  <label for="Édition" class="form-label">Édition <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="Édition" placeholder="Entrez l'dition" required>
                </div>
                <div class="col-12">
                  <label for="ISBN" class="form-label">Le numéro ISBN (International Standard Book Number) du livre<span class="text-danger">*</span></label>
                  <input type="number" class="form-control" name="ISBN" required>
                </div>


                <label for="ISBN" class="form-label">Choisissez la catégorie du livre <span class="text-danger">*</span></label>
                <select name="user_type" class="form-select">
                  <option value="dev">Développement personnel</option>
                  <option value="Histoire">Histoire</option>
                  <option value="Sciences">Sciences</option>
                  <option value="Culture">Culture</option>
                  <option value="Éducatif">Éducatif</option>


               </select>


              
                
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-warning" type="submit" name="submit" value="register now">Demande</button>
                  </div>
                </div>
              </div>
            </form>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>