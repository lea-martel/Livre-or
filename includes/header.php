
<header>
  <div id="logohead">
    <a href="index.php"><h5 id="toptitle">MUSEUM OF MARSEILLE</h5></a>
  </div>
  <div id="connect-but">
     <?php 
       if (isset($_SESSION["login"])) {
     ?>
      <a href="profil.php"></a> 
      <a href="commentaire.php"></a> 
      <a href="livre-or.php"></a>
      <a href="index.php?deco">Déconnexion</a>
      <?php
      }else{
      ?>
      <a href="connexion.php"><button class="log">Login</button></a> 
      <a href="inscription.php"><button class="reg">Sign up</button></a> 
      <?php
      }
      ?>
  </div>
</header>