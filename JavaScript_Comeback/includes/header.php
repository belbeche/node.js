<ul class="navigation">
  <li class="sous_menu"><a href="../index.php">Home</a></li>
  <li class="sous_menu"><a href="about.php">About</a></li>
  <li class="sous_menu"><a href="real.php">Réalisations</a></li>
  <li class="sous_menu"><a href="contact.php">Contact</a></li>
  <li class="sous_menu"><a href="online.php">Gestion membre</a></li>
    
    <?php 
        $submit = $_POST['submit'];
            if (isset($submit)){
                echo "En maintenance";
            }
    ?>
    <form action="" method="post">
        <input type="submit" value="Invite your friend to discover their answer" width="30" height="25" name="submit">       
    </form>
  
</ul>