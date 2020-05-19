<?php session_start(); ?>

<!DOCTYPE html>

<html>

<head>
    <title>musée guestbook - accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include("includes/header.php")?>
    <main>
      <div id="banner-index">
        <div>
          <figure id="circle"></figure>
          <h1 id="title-index">MUSEUM OF MARSEILLE</h1>
        </div>
        <div id="presentation-index">
          <?php
            if(isset($_SESSION['login'])){
              echo "<h2><Bonjour ".$_SESSION["login"]."</h2>";
              echo "<p>Vous êtes actuellement connecté. Accédez à votre <a href=\"profil.php\">profil</a></p>";
              echo "<a href='commentaire.php'><h2 id='link-index'>LES COMMENTAIRES</h2></a>";
              echo "<form action='index.php' method='post'>
                      <input class='button-deco'  name='deco' value='Déconnexion' type='submit'/>
                    </form>";
            }
            else{ 
              echo "<p id='text-index'>Vous venez de visiter notre musée... rejoignez notre communauté et partagez votre avis sur votre expérience ou une exposition !</p>";
              echo "<a href='connexion.php'><h2 id='link-index'>VOS COMMENTAIRES</h2></a>";
              echo "<a href='inscription.php' id='link2-index'>Pas encore inscrit ? Cliquez ici</a>";
            }
             /* Version sans php
             <p id="text-index">Vous venez de visiter notre musée... rejoignez notre communauté et partagez votre avis sur votre expérience ou une exposition !</p>
             <a href="connexion.php"><h2 id="link-index">VOS COMMENTAIRES</h2></a>
             <a id="link2-index" href="inscription.php">Pas encore inscrit ? Cliquez ici</a>
             */
          ?>       
        </div>
      </div>
     
    </main>
    <?php include("includes/footer.php")?>
</body>
</html>

