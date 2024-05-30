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
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $_SESSION['admin_name'] ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/admin.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/icon/icon_user.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo $_SESSION['admin_name'] ?></a></h1>
        
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Page d'accueil</span></a></li>
          <li><a href="#stat" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Statistiques</span></a></li>
          <li><a href="#taux" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>progression du site Web</span></a></li>
          <li><a href="#livre" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Ajouter un livre</span></a></li>
          <li><a href="#cmd" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Gérer le commande</span></a></li>
          <li><a href="ger_user.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Gestion des utilisateurs</span></a></li>
        </ul>

        
      </nav><!-- .nav-menu -->
      <div class="button">
      <button><img  width="25" height="25" src="assets/img/icon/se-deconnecter.png"  alt="#"><a href="logout.php">Deconnecter</a></button>
        </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    
  <div class="hero-container" data-aos="fade-in">

      <h1><a>Administrateur <?php echo $_SESSION['admin_name'] ?></a></h1>
      <a>Bienvenue sur <span>votre page</span></a>

          <button>commande</button>

    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->

    <!-- ======= Facts Section ======= -->
    <section id="stat" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Nouvelles statistiques</h2>
          <p>Voici quelques statistiques pour votre site web " KS_Books ".</p>
        </div>
    <!-- ======= tabl   stat ======= -->

    <table border="1">
        <thead>
    <th><div class="pie" style="--p:20"> 18%</div></th>
    <th><div class="pie" style="--p:40;--c:darkblue;--b:10px"> 41%</div></th>
    <th><div class="pie no-round" style="--p:60;--c:purple;--b:15px"> 59%</div></th>
    <th><div class="pie animate no-round" style="--p:80;--c:orange;"> 80%</div></th>
    <th><div class="pie animate" style="--p:90;--c:lightgreen"> 91%</div></th>
      </thead>
      <tbody>
      <tr>
      <td>Bénéfices mensuels</td>
      <td>Taux de ventes</td>
      <td>Demandes en attente</td>
      <td>Utilisateurs</td>
      <td>Visiteurs</td>
      </tr>
      </tbody>

      </table>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="taux" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Taux de progression du site Web</h2>
          <p>Le taux de progression du site web indique une augmentation de 20 % du trafic et des ventes au cours du dernier période, démontrant une croissance significative de notre présence en ligne et de l'engagement des utilisateurs.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">Pourcentage d'espace de base de données restant <i class="val">98%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Pourcentage des livres commander<i class="val">12%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Pourcentage des livres vendus <i class="val">5%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">Temps passé sur les pages produit<i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Pourcentage d'utilisateurs augmente <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Nombre de visites <i class="val">91%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    

    <!-- ======= Portfolio Section ======= -->
    <section id="livre" class="portfolio section-bg">
    <div class="container">
    <div class="section-title">
      <h2>Ajouter un livre</h2>
      <p>Collecter ces informations permet de fournir une description complète et utile du livre pour les lecteurs, les acheteurs.</p>
    </div>
   <center><form class="form">
        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Titre :</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Auteur(s) :</span>
        </label>
            
    <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Éditeur </span>
    </label> 
        
    <label>
    <textarea class="form-control" rows="6" id="comment" name="Res" placeholder="ajouter le résumé du livre"></textarea>
    </label>
    <label>
        <input class="input" type="number" placeholder="" required="">
        <span>Prix</span>
    </label>
    <label for="file" class="custum-file-upload">
<div class="icon">
<svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path> </g></svg>
</div>
<div class="text">
   <span>Click to upload image</span>
   </div>
   <input id="file" type="file">
</label>

    
    <button class="submit">ajouter</button>
</form></center>


</div>  
    </section><!-- End Portfolio Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="cmd" class="testimonials section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Gérer le commande</h2>
          <p>Voici le tableau du commande des livre.</p>
        </div>
        <section id="cmd" class="resume">
      <div class="container">

      <div class="row">
        <table border="1">
        <thead>
            <th>name</th>
            <th>Prénom</th>
            <th>email</th>
            <th>Numero de telephne</th>
            <th>ville</th>
            <th>region</th>
            <th>Address</th>
            <th>quentite</th>

            
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
              $requete="SELECT * FROM commande";
              //Execution de la requete
              $resultat=$mysqli->query($requete);
              //la boucle
              while($row=$resultat->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['Prénom']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['Num']."</td>";
              echo "<td>".$row['ville']."</td>";
              echo "<td>".$row['Région']."</td>";
              echo "<td>".$row['Address']."</td>";
              echo "<td>".$row['qnt']."</td>";
              echo "<td><button class='supprimer >Supprimer</button></td>";
              echo "</tr>";
              }
              ?>
              </tbody>
            
        </table>
        </div>
        </div>

      </div>
    </section><!-- End Resume Section -->
  </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>