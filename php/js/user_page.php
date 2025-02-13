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
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   


<!--           apres la page de user             -->
<header>


<a class="ksbooks" href="Page Officielle.php"> <img width="300" height="200" src="../images/books.png"  alt="#"> </a>
     
        <ul class="navbar">
        <li><a href="#cateoree" onclick="toggleMenu();">Categorie01</a></li>
        <li><a href="#booksss" onclick="toggleMenu();">Categorie02</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Categorie03</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Categorie04</a></li>
        </ul>   

        
    <div class="btn_classss">
        <div class="btn_ajt">
              <button class="Btn">
  
                <a class="sign"  href="../ajout.html"><img width="20" height="20" src="../images/document.png"></a>
                
                <a class="text"  href="../ajout.html">Commander</a>
              </button>
        </div>
        
        <div class="btn_ajt2">
              <button class="Btn">
  
                <a class="sign"  href="logout.php"><img width="20" height="20" src="../images/se-deconnecter.png"></a>
                
                <a class="text" href="logout.php">logout</a>
              </button>
        </div>

   <p>Bienvenue sur votre page <span class="prix"><?php echo $_SESSION['user_name'] ?></span></p>   
        
    </div>
    </div>

</header>

<section class="banniere" id="banniere">
    <div class="contenu">
        <a href="Page Officielle.html" class="logo"><span>KS</span>Books</a>
        <h4>La lecture, une porte ouverte sur un monde enchanté</h4>
        <h3>                --</h3>
          <div class="search">
            <input placeholder="Search..." type="text">
            <button type="submit">Go</button>
          </div>
    </div>

    <div class="ucer">
    <div class="ucer_load"></div>
    <div class="ucer_load_extreme_title">sofiane</div>
    <div class="ucer_load_extreme_descripion"></div>
</div>

    <style>
        /* Style pour le header */
        .banniere {
            background-image: url('../images/cadre2.jpg'); 
            background-size: cover;
            background-position: center;
            height: 200px;
            text-align: center;
            color: white;
            padding-top: 50px;
        }

        /* Style pour le titre */
        h1 {
            margin: 0;
        }
    </style>
   
</section>
<!--                    php                     -->
<div class="cart">
  <div class="immag">
    <svg height="30" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path fill="rgba(236,240,241,1)" d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
  </div>
  <span class="head"><?php echo $_SESSION['user_name'] ?></span>
  <p>
    <svg height="30" width="30" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024" class="icon">
      <path fill="white" d="M962.267429 233.179429q-38.253714 56.027429-92.598857 95.451429 0.585143 7.972571 0.585143 23.990857 0 74.313143-21.723429 148.260571t-65.974857 141.970286-105.398857 120.32-147.456 83.456-184.539429 31.158857q-154.843429 0-283.428571-82.870857 19.968 2.267429 44.544 2.267429 128.585143 0 229.156571-78.848-59.977143-1.170286-107.446857-36.864t-65.170286-91.136q18.870857 2.852571 34.889143 2.852571 24.576 0 48.566857-6.290286-64-13.165714-105.984-63.707429t-41.984-117.394286l0-2.267429q38.838857 21.723429 83.456 23.405714-37.741714-25.161143-59.977143-65.682286t-22.308571-87.990857q0-50.322286 25.161143-93.110857 69.12 85.138286 168.301714 136.265143t212.260571 56.832q-4.534857-21.723429-4.534857-42.276571 0-76.580571 53.979429-130.56t130.56-53.979429q80.018286 0 134.875429 58.294857 62.317714-11.995429 117.174857-44.544-21.138286 65.682286-81.115429 101.741714 53.174857-5.705143 106.276571-28.598857z"></path>
    </svg>
    <svg height="30" width="30" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024" class="icon">
      <path fill="white" d="M123.52064 667.99143l344.526782 229.708899 0-205.136409-190.802457-127.396658zM88.051421 585.717469l110.283674-73.717469-110.283674-73.717469 0 147.434938zM556.025711 897.627196l344.526782-229.708899-153.724325-102.824168-190.802457 127.396658 0 205.136409zM512 615.994287l155.406371-103.994287-155.406371-103.994287-155.406371 103.994287zM277.171833 458.832738l190.802457-127.396658 0-205.136409-344.526782 229.708899zM825.664905 512l110.283674 73.717469 0-147.434938zM746.828167 458.832738l153.724325-102.824168-344.526782-229.708899 0 205.136409zM1023.926868 356.00857l0 311.98286q0 23.402371-19.453221 36.566205l-467.901157 311.98286q-11.993715 7.459506-24.57249 7.459506t-24.57249-7.459506l-467.901157-311.98286q-19.453221-13.163834-19.453221-36.566205l0-311.98286q0-23.402371 19.453221-36.566205l467.901157-311.98286q11.993715-7.459506 24.57249-7.459506t24.57249 7.459506l467.901157 311.98286q19.453221 13.163834 19.453221 36.566205z"></path>
    </svg>
    <svg height="30" width="30" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024" class="icon">
      <path fill="white" d="M950.930286 512q0 143.433143-83.748571 257.974857t-216.283429 158.573714q-15.433143 2.852571-22.601143-4.022857t-7.168-17.115429l0-120.539429q0-55.442286-29.696-81.115429 32.548571-3.437714 58.587429-10.313143t53.686857-22.308571 46.299429-38.034286 30.281143-59.977143 11.702857-86.016q0-69.12-45.129143-117.686857 21.138286-52.004571-4.534857-116.589714-16.018286-5.12-46.299429 6.290286t-52.589714 25.161143l-21.723429 13.677714q-53.174857-14.848-109.714286-14.848t-109.714286 14.848q-9.142857-6.290286-24.283429-15.433143t-47.689143-22.016-49.152-7.68q-25.161143 64.585143-4.022857 116.589714-45.129143 48.566857-45.129143 117.686857 0 48.566857 11.702857 85.723429t29.988571 59.977143 46.006857 38.253714 53.686857 22.308571 58.587429 10.313143q-22.820571 20.553143-28.013714 58.88-11.995429 5.705143-25.746286 8.557714t-32.548571 2.852571-37.449143-12.288-31.744-35.693714q-10.825143-18.285714-27.721143-29.696t-28.306286-13.677714l-11.410286-1.682286q-11.995429 0-16.603429 2.56t-2.852571 6.582857 5.12 7.972571 7.460571 6.875429l4.022857 2.852571q12.580571 5.705143 24.868571 21.723429t17.993143 29.110857l5.705143 13.165714q7.460571 21.723429 25.161143 35.108571t38.253714 17.115429 39.716571 4.022857 31.744-1.974857l13.165714-2.267429q0 21.723429 0.292571 50.834286t0.292571 30.866286q0 10.313143-7.460571 17.115429t-22.820571 4.022857q-132.534857-44.032-216.283429-158.573714t-83.748571-257.974857q0-119.442286 58.88-220.306286t159.744-159.744 220.306286-58.88 220.306286 58.88 159.744 159.744 58.88 220.306286z"></path>
    </svg>
  </p>
</div>
<!--   cateoree  -->

<section id="cateoree">
    <div>
        <div class="titre">
            <h2 class="titre-texte"><span>C</span>atégories</h2>
            <p>Dans cette bibliothèque, il y a beaucoup des Catégories des livres</p>
            <p>                                --                                </p>
        </div> 
    </div>
<div>
    <table border="1">
        <tr>
            <th>Categorie01</th>
            <th>Categorie02</th>
            <th>Categorie03</th>
            <th>Categorie04</th>
            <th>Categorie05</th>
            <th>Categorie06</th>
            <th>Categorie07</th>
        </tr>
        <tr>
            <td><img width="80" height="80" src="../images/livre00.gif"></td>
            <td><img width="80" height="80" src="../images/diplome.gif"></td>
            <td><img width="80" height="80" src="../images/livre-audio.gif"></td>
            <td><img width="80" height="80" src="../images/etagere-a-livres.gif"></td>
            <td><img width="80" height="80" src="../images/livre-damour.gif"></td>
            <td><img width="80" height="80" src="../images/livre-dhistoire.gif"></td>
            <td><img width="80" height="80" src="../images/livre-de-chimie.gif"></td>
        </tr>
        <tr>
            <td>Donnée 3-1</td>
            <td>Donnée 3-1</td>
            <td>Donnée 3-1</td>
            <td>Donnée 3-1</td>
            <td>Donnée 3-2</td>
            <td>Donnée 3-3</td>
            <td>Donnée 3-3</td>
        </tr>
    </table>
</div>

</section>


<!--   menu  -->

<section class="menu" id="booksss">
    <div class="titre">
        <h2 class="titre-texte"><span>M</span>enu</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
    </div>

    <?php foreach($articles as $article): ?>
    <div class="contenu">
    <div class="wrapper">
            <div class="card">
            <img src="../images/<?= $article['img'] ?>" alt="Image">
            <div class="info">
            <h1 class="titre-texte"><?= $article['nom'] ?></h1>
            <p> 
            <span class="address"><?= $article['adress'] ?></span>
            <p class="prix"><?= $article['prix'] ?> DA</p>
            </p>
            <a href="../pages/commande.php?id=<?= $article['id'] ?>" class="btnne" data-toggle-"tooltip" | data-placement="left" title="Bookmark">clicke</a>
            </div>
            </div>
    </div>
<?php endforeach; ?>
   
    
</section>


 <!-- bootstrap -->

 









  <!-- bootstrap -->


 <script type="text/javascript">
    window.addEventListener('scroll', function(){
        const header =document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0 );
    });

    function toggleMenu(){
        const tmenuToggle = document.querySelector('.menuToggle');
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('active');
        menuToggle.classList.toggle('active');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>