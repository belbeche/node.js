<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site en construction</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
</head>
    

<body>
    <ul class="navigation">
        <li class="sous_menu"><a href="index.php">Home</a></li>
        <li class="sous_menu"><a href="includes/about.php">About</a></li>
        <li class="sous_menu"><a href="includes/real.php">Réalisations</a></li>
        <li class="sous_menu"><a href="includes/contact.php">Contact</a></li>
        <li class="sous_menu"><a href="includes/online.php">Gestion membre</a></li>
    </ul>
    <div class="container marketing">
    <h1> Github: belbeche</h1> <h3>Under construction</h3> 
            <p>MiniApps _ freeOpenSource Project</p>
    </div>
    <div class="container marketing">
     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="css/image/carousel.png" alt="First slide" width="1583" height="1583">
              <div class="container">
                <div class="carousel-caption">
                  <h1>...</h1>
                  <p>Description : Quiz for everyone  <code>You</code> take a break </p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Rejoignez nous</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Apercu 2.</h1>
                  <p>Description : <code> Autres exemple de compte</code> Next.</p>
                  <p><a class="btn btn-lg btn-primary" href="http://walidb.dijon.codeur.online/JavaScript_Comeback/Bonjour/html/note.html" role="button">En savoir plus</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Apercu 3.</h1>
                  <p>Description : 3.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">En savoir plus</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Précedent</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>
        </div><!-- /.carousel -->
    </div>   
         <!-- Annonces
    ================================================== -->
    <!-- Responsive - First block to the latest one -->

    <div class="container marketing">
        
        <h2> Connecté(e) sous le nom de : <span id="replay"><p></p></span><br/></h2><br/>
        
        <h3> Avant de faire le test il est nécéssaire de vous découvrir </h3><br/>
        
      <div class="row">
          <!-- Level 1  -->
        <div class="col-lg-4">
          <img class="img-circle" src="css/image/nv1.png" alt="Generic placeholder image" width="140" height="140">
            <p>Etage 1 : Cette salle est ouverte .</p><br/> 
            <p>Que ce passe t'il derrîere ? </p>
            <p><a class="btn btn-default" href="Bonjour/html/cours.html" role="button">Commençais l'aventure &raquo;</a></p>
        </div><!--  / Level 1  -->
        
          <!-- Level 2 -->
        <div class="col-lg-4">
            <img class="img-circle" src="css/image/nv2.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Etage 2 : Tu veut en savoir d'avantage ?</h2><br/>
            <p>Alors ne tarde pas trop.</p>
            <p><a class="btn btn-default" href="http://walidb.dijon.codeur.online/JavaScript_Comeback/Bonjour/html/note.html" role="button">Level 2 &raquo;</a></p>
        </div><!-- Level 2 -->
          
        <!-- Level 3 -->
        <div class="col-lg-4">
            <img class="img-circle" src="css/image/nv3.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Etage 3</h2><br/>
            <p>Description etape.</p>
            <p><a class="btn btn-default" href="http://walidb.dijon.codeur.online/JavaScript_Comeback/Bonjour/html/note.html" role="button">Level 3 &raquo;</a></p>
        </div><!-- Level 3 -->
      </div>
        
    <div>
        <article id="getMore">
            <a href="includes/result.php">Découvrir mon résultat et voir les bonus. </a>
        </article>
    </div>
    
    
    <script src="js/carousel.js"></script>
    <script>
        
        var visiteur = String(prompt("Vous êtes ?", "Nom pendant la navigation")); 
            var utilisateur = visiteur;
            document.getElementById("replay").innerHTML = "Good Job !";
            document.getElementById("replay").innerHTML = "" + utilisateur;
        
            var win = new Window({className: "dialog",  width:350, height:400, zIndex: 100, resizable: true, title: "Sample window", showEffect:Effect.BlindDown, hideEffect: Effect.SwitchOff, draggable:true, wiredDrag: true})

    win.getContent().innerHTML= "<div style='padding:10px'> Test</div>"
    win.setStatusBar("Status bar info");
    win.showCenter();  
          
    </script>
    <script src="back.js"></script>

</body>

</html>
