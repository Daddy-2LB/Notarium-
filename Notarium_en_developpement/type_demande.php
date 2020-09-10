<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Notarium</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="description" content="Notre site web Notarium, aide les notaires qui veulent accroitre leur valeur ajoutée en atteignant un large public et en modernisant leurs services à offrir aux entreprises et aux particuliers des services en ligne.">
    <meta name="author" content="Daddy 2lb, Gabriella, Sady, Sabrina et l'equipe Notarium">



    <!-- Site Icons -->
    <link rel="icon" type="images/png" href="images/logo Notarium Modifier 2.png" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

   

       <!-- Start header -->
    <header class="top-header">
        <div class="header_top">
            
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.html"><img width="60%" height="110%" src="images/logo.png" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:exchang@gmail.com"><img src="images/mail_icon.png" alt="#" />notarium.gag@gmail.com</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="images/phone_icon.png" alt="#" />+241 62 93 15 44</a></li>
                            <li><a class="join_bt" href="#">Rejoingnez-nous</a></li>
                        </ul>
                    </div>
                </div>
            </div>       
    </header>
    <!-- End header -->
     <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3><?php echo $_SESSION['prenom'];   ?>
                            <?php echo $_SESSION['nom'];  ?>
                            bienvenue sur la plate - forme Notarium</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    </div> 
    <?php

    if (isset($_POST['immobilier'])) {
        
        
        $immob = "Immobilier";
        $_SESSION['immobilier'] = $immob;
        header("Location: choix_notaires_immobilier.php");     
     }
     
     if (isset($_POST['succession'])) {
        $succes = "Succession";
        $_SESSION['succession'] = $succes;
        header("Location: choix_notaires_succession.php"); 
     }


?>
            
      <div class="section dossier_form">
        <div class="container">
          <h2 align="center" ><span class="theme_color">Veuillez choisire le type de dossier :</span> </h2><br/>

            <div class="row">
                <div class="le_deux_choix">
                    <div class="full_choix1">
                        <form class="contact_form_inner" action="#" method="post" name="login">
                            <fieldset>
                                <div class="choix_dossier_left1">
                                 <img width="25%" height="25%" src="images/immo.png">   
                                </div>
                                <div class="choix_dossier_left2">
                                   <h1>Immobilier</h1>
                                   <p> Je suis vendeur, acheteur ou intermédiaire immobilier.<br/><br/></p>
                                </div>
                                <div class="">
                                    <input type="submit" value="SUIVANT" name="immobilier" class="immobilier">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="full_choix2">
                        <form class="contact_form_inner" action="" method="post" name="login">
                            <fieldset>
                                <div class="choix_dossier_rigth1">
                                 <img width="20%" height="20%" src="images/succession.png">   
                                </div>
                                <div class="choix_dossier_rigth2">
                                   <h1>Succession</h1>
                                   <p>Je souhaite faire un point sur ma situation patrimoniale avec un notaire.</p>
                                </div>
                                <div class="">
                                    <input type="submit" value="SUIVANT" name="succession" class="immobilier">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
   
        <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
               <div class="col-md-12 white_fonts">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <img class="img-responsive" src="images/footer_logo.png" alt="#" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <h3>Sites du notariat</h3>
                            </div>
                            <div class="full">
                                <ul class="menu_footer">
                                    <li><a href="home.html">> Notaires.ga</a></li>
                                    <li><a href="about.html">> Notarium.ga</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Newsletter</h3>
                             <p>Lettre d'information envoyée périodiquement par mail.</p>
                             <div class="newsletter_form">
                                <form action="index.html">
                                   <input type="email" placeholder="Votre mail" name="#" required="">
                                   <button>Soumettre</button>
                                </form>
                             </div>
                         </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Nous contacter </h3>
                             <ul class="full">
                               <li><img src="images/i5.png"><span>Libreville / SING<br>Centre ville</span></li>
                               <li><img src="images/i6.png"><a href="#">notarium.ga@gmail.com</a></li>
                               <li><img src="images/i7.png"><span>+241 62 93 15 44</span></li>
                             </ul>
                         </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2019 Notarium</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>

</html>