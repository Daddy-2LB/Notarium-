 <?php
    session_start();
/*-------------------connection à la base de données--------------------------------------------------------*/

        $servername = 'localhost';
        $dbname = 'clients_notarium';
        $username = 'root';
        $password = '';
        
        try {
                
            $dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            $dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            echo "Erreure : " . $e->getMessage();
            
        }
        /*--------------------------------------------------------------------------------------------------------------*/
        if (isset($_POST['submit'])) {
          
            extract($_POST);

            if (!empty($email)){
                
                $requser = $dbco->prepare("SELECT * FROM nouveau_dossier WHERE email = ?");
                $requser->execute(array($email));
                $userexist = $requser->rowCount();
                if ($userexist == true) {
                    
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['DateInscription'] = $userinfo['DateInscription'];
                    $_SESSION['nom'] = $userinfo['Nom'];
                    $_SESSION['typeDossier'] = $userinfo['TypeDossier'];
                    $_SESSION['notaireChoisi'] = $userinfo['NotaireChoisi'];
                    header("Location: session.php?email=".$_SESSION['email']);

                }else{
                    $erreur = "C'est mail n'existe pas ";
                }

            }else {
                $erreur = "Votre mail ou numéro du dossier est faux";
            }
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

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="lecture" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

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

  
    <!-- End Banner -->


    <!-- contact_form --> 

    <div class="section dossier_succession_bila_form">
       
            
        <div id="client">
            <div class="bloc-a">
                <div class="texte-d">Demander les services d'un Notaire</div>
                <div class="b-validation">
                <a class="demande" href="information-du-client.php">Faire une demande</a>
                </div>
            </div>
            <div class="bloc-b">
                <div class="texte-s">Suivre l'évolution de mon dossier</div>
                    <div class="form-numero">

                    <form action="#" method="POST" name="numero">
                        <input type="text" class="numero" name="email" placeholder="Votre email" required/>
                        <input type="submit" name="submit" value="Ouvrire" class="b-ouvrire"/>
                    </form>
                    <div align="center">
                    <?php
                        if (isset($erreur)) {
                            echo '<font color="red">'.$erreur."</font>";
                         } 
                    ?>
                    </div>
                    <p class="oublie">Vous n'avez pas de Compt ? <br/><a href="https://accounts.google.com/signup/v2/webcreateaccount?flowName=GlifWebSignIn&flowEntry=SignUp" target="_blank"><span>cliquez ici</span></a></p>
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