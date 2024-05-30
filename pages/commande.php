
<?php
      $article = NULL;
      if (isset($_GET['id'])) {
          $articles =json_decode(file_get_contents('../data/articles.json'),true);
          foreach($articles as $art) {
              if ($art['id'] === (int) $_GET['id']) {
              $article = $art;
              break;
              }
          }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

   <title>commande</title>

   <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/page_cmd.css">
  <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
  <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
   <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script> 
  <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->


</head>
<body id="page-top">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

            <div class="container">
            <a href="../php/user_page.php"> <img  width="100" height="50" src="../images/llogo.png"  alt="#"> </a>
            <a href="../php/user_page.php" class="h2"><span class="h1">KS</span>Books</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Categorie</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team"></a></li>
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Recherche</button>
                        </form>
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
                <a class="btn btn-primary btn-x1 text-uppercase" href="#commd">commander</a>
            </div>
            
        </header>
        <section class="page-section">
        <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">passer votre Commande</h2>
                    <h3 class="section-subheading text-muted">Finalisez votre achat en toute simplicité et profitez de nos offres exclusives !</h3>
                </div>
   
        </div>
        </section>
<!--      la partier de la comonde    -->
    <section class="p-3 p-md-4 p-xl-5">
  <div class="container" id="commd">
    <div class="card border-light-subtle shadow-sm">
      <div class="row g-0" >
        <div class="col-12 col-md-6 text-bg-platinum">
       <center> <?php if ($article && $article !== NULL): ?>
                <h2 class="h3"><?= $article['nom'] ?></h2>
                <?php endif; ?> <center>
          <div class="d-flex align-items-center justify-content-center h-100">
            <div class="col-10 col-xl-8 py-3">
              <hr class="border-primary-subtle mb-4">
              <?php if ($article && $article !== NULL): ?>

           <div>
           <img width="350" height="550" src="../php/assets/img/book/<?= $article['img'] ?>" alt="Image">
         </div>
            <div >
             <h3 href="#" class="text-bg-warning"><?= $article['prix'] ?> DA</h3></div>
              <div>
             <span><?= $article['adress'] ?></span>
         </div>
              
</div>
<?php endif; ?>    
             
</div>
          </div>

        <div class="col-12 col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <form method="post" action="3-process.php">
            
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="name" class="form-label">Le nom <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Entrez votre nom" required>
                  </div>
                <div class="col-12">
                  <label for="Prénom" class="form-label">Prénom <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="Prénom" placeholder="Entrez votre Prénom" required>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Numéro de téléphone <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="Num" name="Num" pattern="[+213]-[0-9]" placeholder="Entrez votre numéro de téléphone" required>
                </div>
                <style>
                        .input-container {
                            display: flex;
                            gap: 10px; /* Espace entre les inputs */
                        }
                </style>

               <div class="input-container">
                <label for="ex3">ville</label>
                <input class="form-control" id="ex3" type="text" name="ville">

                <label for="ex3">Région</label>
                <input class="form-control" id="ex3" type="text" name="Région">
              </div>

               <div class="form-group">
                  <label for="comment">Address:</label>
                  <textarea class="form-control" rows="5" id="comment" name="Address"></textarea>
               </div>

               <div class="form-group">
            <label for="quantity">Quantité</label>
            <input type="number" class="form-control" id="qnt" name="qnt" min="1" max="100" step="1">
        </div>
<!--            paiment             -->
<label for="quantity">Choisissez le mode de paiement :</label>
<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1"><img  width="150" height="100" src="../images/edahabia.png"  alt="#">Paiement par la carte EDAHABIA</a>

<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2"><img width="150" height="100" src="../images/payment.png"  alt="#">Paiement au bureau de réception</a>




                
              </div>
              <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-warning" type="submit">Commande</button>
                  </div>
                </div>
            </form>
          
</section>

<!-- Portfolio item 4 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../php/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div id="wrap">
        <div id="content">
            <table id="main-table">
                <tbody>
                    <tr>
                        <td>
                            <table id="tablelogo">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="../images/gold.jpg" style="margin-bottom: 50px;" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="security_disc" style="margin-top: 200px;">
                                            Les droits de paiement sur notre site électronique commercial sont entièrement sécurisés et conformes aux normes internationales pour garantir la protection de vos informations financières.
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody>

                                    <tr class="main_table_row">
                                        <td class="main_table_col">
                                            <img src="../images/gold.jpg" width="60px" height="60px" style="margin-right: 10px; float:left;" />
                                            <div id="main_table_row_tt">

                                                <h1 class="form_header">INFORMATIONS PERSONNELLES</h1>
                                                <p class="form_subheader">VEUILLEZ ENTRER LES INFORMATIONS DE VOTRE CARTE</p>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="main_table_row">

                                        <td class="main_table_col payment_form">
                                            <form name="PaymentForm" action="" method="post" id="formPayment">
                                                <input id="mdOrder" type="hidden" />
                                                <input id="location" type="hidden" value="/../" />
                                                <input type="hidden" id="expiry" />
                                                <input id="language" value="EN" type="hidden" />
                                                <div id="errorBlock" style="color:red;"></div>
                                                <div id="infoBlock"></div>
                                                <table cellpadding="10" id="paymentDataTable">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div id="indicator" style="display:none;">
                                                                    <label for="indicatorImage" class="formLabel">&nbsp;</label>
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="form_label1">
                                                                <div id="numberCountdown" class="form_label"></div>
                                                            </td>

                                                            <td width="100%">
                                                                <table cellpadding="5px" cellspacing="0" class="order_info">
                                                                    <!--  style="margin-top: 10px;" -->
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>COMMANDE N°</th>
                                                                            <th>TOTAL</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div id="orderNumber">0003208721</div>
                                                                            </td>
                                                                            <td>
                                                                                <div id="amount"><?= $article['prix'] ?> DA</div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!--<tr valign="TOP">
															<td valign="top" colspan="2">
																<div id="infoBlock"/>
															</td>
														</tr>-->
                                                        <tr valign="TOP">
                                                            <td valign="top" width="50%" align="right" class="form_label1">
                                                                <span class="form_label">Numéro de la carte de crédit:</span>
                                                            </td>
                                                            <td valign="top">
                                                                <span class="form_label form_label2">Numéro de la carte de crédit:</span>
                                                                <input name="$PAN" class="form_input" maxlength="19" id="iPAN" type="text" autocomplete="off" value="" />
                                                            </td>
                                                        </tr>
                                                        <tr valign="TOP">
                                                            <td valign="top" align="right" class="form_label1">
                                                                <span class="form_label">Date d'expiration:</span>
                                                            </td>
                                                            <td valign="top">
                                                                <span class="form_label form_label2">Date d'expiration:</span>

                                                                <select name="MM" id="month" class="form_input">
																	<option value="01" >&nbsp;&nbsp;1 - January</option>
																	<option value="02">&nbsp;&nbsp;2 - February</option>
																	<option value="03">&nbsp;&nbsp;3 - March</option>
																	<option value="04">&nbsp;&nbsp;4 - April</option>
																	<option value="05">&nbsp;&nbsp;5 - May</option>
																	<option value="06">&nbsp;&nbsp;6 - June</option>
																	<option value="07">&nbsp;&nbsp;7 - July</option>
																	<option value="08">&nbsp;&nbsp;8 - August</option>
																	<option value="09">&nbsp;&nbsp;9 - September</option>
																	<option value="10">10 - October</option>
																	<option value="11">11 - November</option>
																	<option value="12" selected>12 - December</option>
																</select> /
                                                                <select name="YYYY" id="year" class="form_input">
																	<option value='2022'>2022</option>
																	<option value='2023'>2023</option>
																	<option value='2024' selected="selected">2024</option>
																	<option value='2025'>2025</option>
																	<option value='2026'>2026</option>
																	<option value='2027'>2027</option>
																	<option value='2028'>2028</option>
																	<option value='2029'>2029</option>
																	<option value='2030'>2030</option>
																	
																</select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="form_label1">
                                                                <span class="form_label ">Nom et Prenom:</span>
                                                            </td>
                                                            <td>
                                                                <span class="form_label form_label2">Nom et Prenom:</span>
                                                                <input class="form_input" name="TEXT" maxlength="90" id="iTEXT" type="text" autocomplete="off" value="" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="form_label1">


                                                                <span class="form_label">Entrez le code CVC2/CVV2:</span>

                                                                <br/>
                                                                <span class="form_label" style="font-size: .85em; font-style: italic;">(Situé au dos de la carte)
																</span>
                                                            </td>
                                                            <td>
                                                                <span class="form_label form_label2">Entrez le code CVC2/CVV2:</span>


                                                                <span class="form_label form_label2" style="font-size: .70em; font-style: italic;">(Situé au dos de la carte)
																	</span>
                                                                <input class="form_input" name="$CVC" maxlength="4" id="iCVC" type="password" autocomplete="off" value="" />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <input name="SendPayment" type="hidden" id="realPayment" />
                                                <input name="SendPayment2" value="VALIDER" type="button" class="submit_button" id="buttonPayment" />
                                            </form>
                                            <form id="acs" method="post" action=""><input type="hidden" id="language" name="language" value="fr" /><input type="hidden" id="MD" name="MD" /><input type="hidden" id="PaReq" name="PaReq" /><input type="hidden" id="TermUrl" name="TermUrl" /></form>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

                </div>
            </div>
        </div>
<!--$_COOKIE        popap2              -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../php/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Paiement à réception</h2>
                                    <p class="item-intro text-muted">Paiement au bureau de réception.</p>
                                    <img  width="300" height="200"  src="../images/hand.png" alt="..." />
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Remarque!</strong>
                                            Lorsque vous choisissez l'offre contre remboursement, vous devez recevoir votre livre au bureau de réception au lieu et à l'heure que vous recevrez dans une notification par e-mail.
                                            Vous n'avez pas non plus à payer de frais de livraison
                                        </li>
                                        <li>
                                        <strong> Vous souhaitez choisir le paiement à la livraison ?</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        annuler
                                    </button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Continuer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








<!-- la partie de jss     -->


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