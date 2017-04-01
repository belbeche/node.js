<!DOCTYPE html>
<html>
<head>
	<title>Site en construction</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<ul class="navigation">
  <li class="sous_menu"><a href="index.php">Home</a></li>
  <li class="sous_menu"><a href="includes/about.php">About</a></li>
  <li class="sous_menu"><a href="real.php">Réalisations</a></li>
  <li class="sous_menu"><a href="contact.php">Contact</a></li>
  <li class="sous_menu"><a href="includes/online.php">Gestion membre</a></li>
</ul>

<h1> Reprise JS + Node.Js</h1>
    <h3>Sur wamp</h3>

	<h3> Avant de faire le test il est nécéssaire de vous découvrir </h3>

     Qu'en pensez vous  <span id="replay"><p></p></span><br/>
	<p> <a href="Bonjour/html/cours.html"> Cliquez ici pour y accéder </a></p>

	<h3>Tu veut en savoir d'avantage ?</h3>
		<p>Alors ne tarde pas trop</p><br/>
    
		<a href="Bonjour/html/note.html">Cliquez ici</a><br/>
        
    <p>Une fois que vous avez terminer le test <span type="search" id="user"></span> et si vous en voulez plus </p>
    <p>Alors je vous invite à indiquez votre réponse sans plus attendre </p>
    
     <article>
        <a href="includes/result.php"> -> Je découvre mon résultat </a> 
    </article>
    
    <script>
        visiteur = prompt("Avatard")
		utilisateur = visiteur;
		document.getElementById("replay").innerHTML = "Good Job !";
			document.getElementById("replay").innerHTML = "" + utilisateur;
        document.getElementById("user").innerHTML = " @ " + utilisateur;
    </script>

<script src="back.js"></script>

</body>
</html>