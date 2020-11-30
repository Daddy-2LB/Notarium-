<?php
session_start();

    if (isset($_POST['submit'])) {
        
        extract($_POST);

        if (!empty($nom) && !empty($prenom) && !empty($ville) && !empty($adresse) && !empty($phone) && !empty($email)) {
        include 'includes/database.php';
        global $dbco;

        /*-----------------------------------------bloquer le mail identique-----------------------------------------*/
            $ce = $dbco->prepare("SELECT email FROM client WHERE email = :email");
            $ce->execute(['email' => $email]);
            $result = $ce->rowCount();


            if ($result == 0) {

            
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['phone'] = $phone;
            $_SESSION['email'] = $email;
            $_SESSION['adresse'] = $adresse;
            $_SESSION['ville'] = $ville;
            header("Location: type_demande.php");


        }else{
            $erreur = "Votre mail existe déjà !";
            
        }

        }
        /*-----------------------------------------------------------------------------------------------------------------------*/
     }
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
    <header class="">
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
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Banner -->
    <!-------------------connecté le formulaire à la base de données-------------------------------------------------------->

    <!-- contact_form -->
    <div class="section dossier_succession_bila_form">
        <div class="container">
            <div class="">
                <div class="">
                    <div class="full_bilan">
                        <div class="">
                            <p class="oublie">RENSEIGNER VOS INFORMATIONS</p>
                            <div class="">
                              
                            <p class="oublie">Vous vous êtes déjà enregistré ! <a href ="deconnection.php"><span>Suivez l'évolution de vore dossier</span></a></p>
                                
                            </div>
                            <form action="#" method="post">

                                <div align="center">
                                    <input type="text" name="nom" placeholder="Votre nom" class="modif" required />
                                    <input type="text" name="prenom" placeholder="votre prénom" class="modif" required/>
                                    <input type="text" name="adresse" placeholder="Adresse" class="modif" required/>
                                    <input type="text" name="ville" placeholder="Ville" class="modif" required/>
                                    <input type="text" name="phone" placeholder="Votre Numéro de téléphone" class="modif" required/>
                                    <input type="email" name="email" placeholder="Votre email" class="modif" required/>
                                    <input type="submit" name="submit" value="Continuer" class="suivant-cl"/>
                                </div>
                                <div align="center">
                                <?php
                                if (isset($erreur)) {
                                    echo '<font color="red">'.$erreur."</font>";
                                 } 
                                ?>
                                </div>
                            </form> 
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
   
      <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2019 Notarium</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->

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