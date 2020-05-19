<header>
    <nav>
    <li><a href="index.php"><h5 id="toptitle">WELCOME TO MUMA !</h5></a></li>
    <?php 
       if (isset($_SESSION["login"])){
        echo "<nav><ul><li><a href='profil.php'></a></li>";
        echo "<li><a href='commentaire.php'></a></li>"; 
        echo "<li><a href='livre-or.php'></a></li>";
        echo "<li><a href='index.php?deco'>Déconnexion</a></li></nav>";
       }
    ?>
    <div id="connect-but">
      <a href="connexion.php"><button class="log">Login</button></a></li> 
      <a href="inscription.php"><button class="reg">Sign up</button></a></li> 
    </div>
   </nav>
  </div>
</header>