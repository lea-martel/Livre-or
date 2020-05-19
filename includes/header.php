<header>
    <nav>
      <a href="index.php"><h5 id="toptitle">WELCOME TO MUMA !</h5></a>
      <?php 
        if (isset($_SESSION["login"])){
          echo '<nav class="main-navigation">
                  <div class="nav-wrapper">
                    <input id="menu-checkbox" type="checkbox" class="menu-checkbox"/>
                    <label for="menu-checkbox" class="menu-toggle">&equiv; MENU</label>
                    <ul class="menu">
                      <li><a href="livre-or.php">GUESTBOOK</a></li>
                      <li><a href="commentaire.php">LAISSER UN COMMENTAIRE</a></li>
                      <li><a href="profil.php">PROFIL</a></li>
                    </ul> 
                  </div> 
                </nav>'; 
        }
       else{
         echo '<div id="connect-but"><a href="connexion.php"><button class="log">Login</button></a>
               <a href="inscription.php"><button class="reg">Sign up</button></a></div>';
       }
    ?>
   </nav>
  </div>
</header>