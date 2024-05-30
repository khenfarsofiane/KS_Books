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

<!doctype html>
<html lang="en">
  <head>
  	<title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="css/contact.css">

	</head>
	<body>

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
      <li class="nav-item"><a class="nav-link" href="#team"> <img  width="25" height="25" src="../images/icon_user.png"  alt="#"><?php echo $_SESSION['user_name'] ?></a></li>

                    </ul>
                </div>
            </div>
        </nav>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<div id="form-message-warning" class="mb-4"></div> 
				
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Nom</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Entrez le nom d'utilisateur">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Le sujet</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Entrez le titre du sujet">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Envoyer" class="btn btn-warning">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-warning w-100 p-md-5 p-4">
									<h3>Contactez-nous</h3>
									<p class="mb-4">Notre site web est toujours proche de ses clients</p>
				      
			         
		<table border="1">
        <tr>
            <th><center><img width="30" height="30" class="nav-link" src="assets/img/icon/gps.png" alt="Image"></center></th>
            <th><center><a class="btn btn-warning">RP68+HFW, Université Badji Mokhtar Annaba</a></center></th>
        </tr>
        <tr>
            <td><center><img width="25" height="25" class="nav-link" src="assets/img/icon/telephone.png" alt="Image"></center></td>
            <td><center><p><a href="tel://1234567920" class="btn btn-warning">+213 0556780250</a></p></td>
        </tr>
		<tr>
            <td><center><img width="25" height="25" class="nav-link" src="assets/img/icon/email.png" alt="Image"></center></td>
            <td><center><p><a href="mailto:info@yoursite.com" class="btn btn-warning">sofiane@gmail.com</a></p></td>
        </tr>
		<tr>
            <td><center><img width="25" height="25" class="nav-link" src="assets/img/icon/globe.png" alt="Image"></center></td>
            <td><center><p><a href="#" class="btn btn-warning">KS Books.com</a></p></td>
        </tr>
		</table>




							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
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

