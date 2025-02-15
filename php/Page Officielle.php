<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<?php
$articles =json_decode(file_get_contents('../data/articles.json'),true);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KS Books</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/page_user.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

            <div class="container">
            <a href="Page Officielle.php"> <img  width="100" height="50" src="../images/llogo.png"  alt="#"> </a>
            <a href="Page Officielle.php" class="h2"><span class="h1">KS</span>Books</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Catégories</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Nouveaux</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">offres</a></li>
                        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Recherche ..." aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Recherche</button>
      </form>
      <li class="nav-item"><a class="nav-link" href="../php/register_form.php"><img  width="35" height="35" src="assets/img/icon/homme-50.png"  alt="#"></a></li>
      <li class="nav-item"><a class="nav-link" href="../php/login_form.php"><img  width="35" height="35" src="assets/img/icon/se connecter001.png"  alt="#"></a></li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><h2>Bienvenue sur KS Books</h2>
                    on chaque page est une nouvelle aventure!
                </div>
                <a class="btn btn-primary btn-x1 text-uppercase" href="#services">Commencer</a>
            </div>
            
        </header>

        <!-- Services -->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Catégories</h2>
                    <h3 class="section-subheading text-muted">Sur KS Books, il existe de nombreuses catégories de livres.</h3>
                </div>
                <div class="row text-center">
    <div class="table-responsive">
   <center> <table border="1">
        <tr center>
            <th>Éducatif</th>
            <th>livre-audio</th>
            <th>Islamique</th>
            <th>Des Romans</th>
            <th>Historique</th>
            <th>Scientifique</th>
            <th>la culture</th>
        </tr>
        <tr>
            <td><a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1"><img width="80" height="80" src="../images/diplome.gif"></a></td>
            <td><a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"><img width="80" height="80" src="../images/livre-audio.gif"></a></td>
            <td><a data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"><img width="80" height="80" src="../images/etagere-a-livres.gif"></a></td>
            <td><a data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4"><img width="80" height="80" src="../images/livre-damour.gif"></a></td>
            <td><a data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5"><img width="80" height="80" src="../images/livre-dhistoire.gif"></a></td>
            <td><a data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6"><img width="80" height="80" src="../images/livre-de-chimie.gif"></a></td>
            <td><a data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7"><img width="80" height="80" src="../images/livre00.gif"></a></td>
        </tr>
</table></center>

<div class="collapse" id="collapseExample1">
  <div class="card card-body">
  <blockquote>
                - Livres universitaires .
                </blockquote> 
                <blockquote>
                -  Manuels Scolaires.
                </blockquote>
                <blockquote>
                - Recherches et Études .
                </blockquote> </div>
</div>
<div class="collapse" id="collapseExample2">
<div class="card card-body">
  <blockquote>
  Les livres audio sont des enregistrements d'un texte lu à haute voix. Ils permettent d'écouter des œuvres littéraires plutôt que de les lire.
                </blockquote> 
                <blockquote>
                Essayez-le et profitez-en !
                </blockquote>
               </div>
</div>
<div class="collapse" id="collapseExample3">
  <div class="card card-body">
  <blockquote>
                - Livres universitaires .
                </blockquote> 
                <blockquote>
                - Histoires fantastiques .
                </blockquote>
                <blockquote>
                - Histoires de découverte et d'apprentissage .
                </blockquote> </div>
</div>
<div class="collapse" id="collapseExample4">
  <div class="card card-body">
  <blockquote>
                - Littérature sentimentale .
                </blockquote> 
                <blockquote>
                - Manuels Scolaires.
                </blockquote>
                <blockquote>
                - Recherches et Études .
                </blockquote> </div>
</div>
<div class="collapse" id="collapseExample5">
  <div class="card card-body">
  <blockquote>
                - Livres d'histoire ancienne .
                </blockquote> 
                <blockquote>
                - Civilisations anciennes.
                </blockquote>
                <blockquote>
                - Histoire sociale .
                </blockquote> </div>
</div>
<div class="collapse" id="collapseExample6">
  <div class="card card-body">
  <blockquote>
                - Physique et chimie .
                </blockquote> 
                <blockquote>
                - Sciences.
                </blockquote>
                <blockquote>
                - médecine .
                </blockquote> </div>
</div>
<div class="collapse" id="collapseExample7">
  <div class="card card-body">
  <blockquote>
                - Développement personnel .
                </blockquote> 
                <blockquote>
                - Dictionnaires & langues.
                </blockquote>
                <blockquote>
                - Développement personnel .
                </blockquote> </div>
</div>
</div>
</div>
</div>

            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">livres</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                <?php foreach($articles as $article): ?>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="../php/login_form.php?id=<?= $article['id'] ?>">
                                <div class="portfolio-hover">  
                                <div class="portfolio-hover-content">
                                <div class="masthead-subheading"><?= $article['nom'] ?></div>

                                <button type="button" class="btn_pour_cmd">Base class</button>

                                </div>
                                </div>
                                <img class="img-fluid" src="assets/img/book/<?= $article['img'] ?>" alt="Image">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $article['nom'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $article['prix'] ?> DA</div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
  
                </div>
            </div>
        </section>
        <!-- About-->


        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nouvelles offres</h2>
                    <h3 class="section-subheading text-muted">KS_Books vous propose les dernières offres.</h3>
                </div>
                
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="card">
                            <img src="assets/img/book/aa1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Repas de famille</h5>
                                <p class="card-text">L'argent ne fait pas le bonheur... et encore moins en famille .
                                <blockquote>
                                <del>2800 DA</del> 2500 DA
                                </blockquote> 
                                </p>
                                <a href="#" class="btn btn-primary">commander</a>
                            </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <div class="card">
                            <img src="assets/img/book/aa2.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">La Terre blessée</h5>
                                <p class="card-text">L'argent ne fait pas le bonheur... et encore moins en famille .
                                <blockquote>
                                <del>1800 DA</del> 1400 DA
                                </blockquote> 
                                </p>
                                <a href="#" class="btn btn-primary">commander</a>
                            </div>
                        </div>                        </div>
                        <div class="carousel-item">
                        <div class="card">
                            <img src="assets/img/book/aa3.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Rendez-moi ma vie</h5>
                                <p class="card-text">L'argent ne fait pas le bonheur... et encore moins en famille .
                                <blockquote>
                                <del>3500 DA</del> 2900 DA
                                </blockquote> 
                                </p>
                                <a href="#" class="btn btn-primary">commander</a>
                            </div>
                        </div>                        </div>
                        <div class="carousel-item">
                        <div class="card">
                            <img src="assets/img/book/aa4.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Le Mas de la Sarrasine</h5>
                                <p class="card-text">L'argent ne fait pas le bonheur... et encore moins en famille .
                                <blockquote>
                                <del>2200 DA</del> 1700 DA
                                </blockquote> 
                                </p>
                                <a href="#" class="btn btn-primary">commander</a>
                            </div>
                        </div>                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                    <script src="js/carte_book.js"></script>
            </div>
        </section>
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactez-nous</h2>
                    <h3 class="section-subheading text-muted">Notre site web est toujours proche de ses clients.</h3>
                </div>
                <center><a class="btn btn-primary btn-x1 text-uppercase" href="contact.php">Contact</a></center>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">
                    <section>
										<h6>Ce site a été réalisé par :</h6>
										<ul>
											<li>Nom et Prénom : khenfar sofiane</li>
											<li><p>lieu : annaba,Algérie</p></li>
											<li><p>date : 30/05/2024</p></li>
											<li>email :<a href="#">khenfarsofiane1242002@gmail.com</a></li>
                                        </ul>
									</section>
                        
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">

fvpoaifocsao

                    </div>

                    <div class="col-lg-4 text-lg-end">
                    <i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i>
                    <i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i>
                    <i class="fab fa-google fa-2x" style="color: #dd4b39;"></i>

                    </div>
                    
                    <div>
                    &copy; 2024 KS_Books. | All rights reserved. | Design:<a href="http://khenfarsofiane1242002@gmail.com">KHENFAR SOFIANE</a>
                    </div>
                    
                </div>
            </div>
        </footer>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
