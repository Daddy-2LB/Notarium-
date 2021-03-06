<?php
session_start();

if (isset($_POST['submit'])) {
        
        extract($_POST);
        include 'includes/database.php';
        global $dbco;
      
      $nom = $_SESSION['nom'];
      $prenom = $_SESSION['prenom'];
      $adresse = $_SESSION['adresse'];
      $ville = $_SESSION['ville'];
      $phone = $_SESSION['phone'];  
      $email = $_SESSION['email'];        
      $typeDossier = $_SESSION['succession'];
      $notaireChoisi = $_POST['notaireChoisi']; 

         
      $sth = $dbco->prepare("INSERT INTO client(Nom,Prenom,Adresse,Ville,Phone,Email,TypeDossier,NotaireChoisi)VALUES (:nom, :prenom, :adresse, :ville, :phone, :email, :typeDossier, :notaireChoisi)");

      
       $sth->bindValue(':nom', $nom);
       $sth->bindValue(':prenom', $prenom);
       $sth->bindValue(':adresse', $adresse);
       $sth->bindValue(':ville', $ville);
       $sth->bindValue(':phone', $phone);
       $sth->bindValue(':email', $email);
       $sth->bindValue(':typeDossier', $typeDossier);
       $sth->bindValue(':notaireChoisi', $notaireChoisi);
/*----------------------------------exécution de la requête préparée---------------------------------------*/
       $sth->execute();
       header("Location: news_user/session_bienvenu.php");
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
 
 <?php include 'includes/header.php'; ?>
     <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Vous souhaitez ovrir un dossier de
                            <?php echo $_SESSION['succession']; ?>
                            à un notaire du réseau Notarium</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <div class="clear">
     
    </div> 
     <!-- contact_form -->  
    <form  action="" method="post" name="login">
    <!-- contact_form -->
    <div class="container">
      <h3>Veuillez choisire l'office notarial pour le traitement de votre dossier, puis continuer.</h3>
            <div class="row mb-2">
                  <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-prima">Libreville</strong>
                            <h3 class="mb-0">Maître Bluenn OKELI GOURIOU OGOULA</h3>
                            <div class="submit"><label for="choixNota">Cochez ici</label>
                                <input type="radio" name="notaireChoisi" id="choixNota" required value="Maître Bluenn OKELI GOURIOU OGOULA" />
                            </div> 
                            <p class="card-text mb-auto"></p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="images/M10.jpg" class="bd-placeholder-img" width="200" height="200">
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                          <strong class="d-inline-block mb-2 text-prima">Port-Gentil</strong>
                          <h3 class="mb-0">Maître Marina OSSAPILA NGUEMA<br/><br/></h3>
                            <div class="submit"><label for="choixNota">Cochez ici</label>
                              <input type="radio" name="notaireChoisi" id="choixNota" required value="Maître Marina OSSAPILA NGUEMA" />
                            </div> 
                            <p class="card-text mb-auto"></p>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                            <img src="images/Me 10.jpg" class="bd-placeholder-img" width="200" height="200">
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
    </div>
    <div class="container">
        <div class="row mb-2">
                  <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-prima">Libreville</strong>
                            <h3 class="mb-0">Maître Lydie RELONGOUE<br/><br/></h3>
                            <div class="submit"><label for="choixNota">Cochez ici</label>
                                <input type="radio" name="notaireChoisi" id="choixNota" required value="Maître Lydie RELONGOUE" />
                            </div> 
                            <p class="card-text mb-auto"></p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="images/Me 1.jpg" class="bd-placeholder-img" width="200" height="200">
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                          <strong class="d-inline-block mb-2 text-prima">Port-Gentil</strong>
                          <h3 class="mb-0">Maître Célestin NDELIA<br/><br/></h3>
                            <div class="submit"><label for="choixNota">Cochez ici</label>
                              <input type="radio" name="notaireChoisi" id="choixNota" required value="Maître Célestin NDELIA" />
                            </div> 
                            <p class="card-text mb-auto"></p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="images/Me 7.jpg" class="bd-placeholder-img" width="200" height="200">
                        </div>
                    </div>
                  </div>
                    <div><input type="submit" name="submit" value="Continuer" class="suivant-choix"/></div>
                </div>
            </div>
    </div>
  </form>  
    <!-- end contact_form -->
    
 <?php include 'includes/footer.php'; ?>

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