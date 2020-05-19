<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <title>musée guestbook - connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include("includes/header.php") ?>
    <main>
        
      <div id="container-connexion">
        <form action="connexion.php" method="POST" id="form-connexion">
          <h1 id="form-title">CONNEXION</h1>
          <h2 id="subtitle-connexion">MUSEUM OF MARSEILLE</h2>
          <div class="part1-connexion">
            <label for="nom">login</label>
            <input type="text" name="login" class="login-connexion"/>
          </div>
          <div class="part1-connexion">
            <label>password</label>
            <input type="password" name="password" placeholder="Entrer le mot de passe"/>
          </div>
          <div>
            <input type="submit" id="log-connexion" name="submit" value="se connecter"/>
          </div> 
         <p id="ins-connexion">Pas encore inscrit ?
           <a href="inscription.php">Créez votre compte en quelques clics.</a>
         </p>
        </form>
      </div>
      <div>
        <?php 
          if (isset($_POST['submit'])){
            $login = $_POST['login'];
            $password = $_POST['password'];

            if($login && $password == true){
              $connect = mysqli_connect("localhost", "root","", "livreor");
              $requete = "SELECT * FROM utilisateurs WHERE login ='".$_POST['login']."'";
              $query = mysqli_query($connect, $requete);
              $rows = mysqli_num_rows($query);

              if($rows==1){
                $_SESSION['login']=$login;
                header('location: index.php');
              }
              else{
                echo '<div id="message">'.'<p>password ou login invalide !</p>';
              }
            }
            else{
              echo '<div id="message">'.'<p>veuillez saisir tous les champs !</p>';
            }
          }
          mysqli_close($connexion);
        ?>
      </div>
    </main>
    <?php include("includes/footer.php");?>
</body>
</html>