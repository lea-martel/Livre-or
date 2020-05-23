<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
    <title>Musée Guestbook - Inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header>
    <?php include("includes/header.php"); ?>
</header>

<body>
    <main>
    <div id="container-inscription">
        <form class="form-inscription" action="inscription.php" method="post">
            <h1 class="toptitre"> INSCRIPTION </h1><br />
            <h2 class="titre">MUSEUM OF MARSEILLE </h2><br />
            <label class="champs">Login</label>
            <input class="cadre" type="texte" id="login" name="login" placeholder="Entrer votre login">

            <label class="champs">Mot de passe</label>
            <input class="cadre" type="password" id="mdp" name="mdp" placeholder="Entrer le mot de passe">

            <label class="champs">Confirmation mot de passe</label>
            <input class="cadre" type="password" id="mdp" name="mdp" placeholder="Confirmer le mot de passe">

            <input class="button" type="submit" value="CONNEXION" name="valider">
            <p class="connecte">Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous.</a></p>
        </form>
        
    <?php
    
    if (isset($_POST['submit'])){
        $login =htmlentities(trim($_POST['login']));
        $password = htmlentities(trim($_POST['password']));
        $repeatpassword = htmlentities(trim($_POST['repeatmdp']));

        if($login&&$password&&$repeatpassword){
            if($password==$repeatpassword){

              $connect =  mysqli_connect("localhost", "root", "", "livreor");
              $request = "INSERT INTO utilisateurs (login, password) VALUES ('$login', '$password')";
              $query = mysqli_query ($connect,$request);

              header('location:connexion.php');

            }
            else echo '<p id="message"> les deux champs doivent être identiques </p>';
        }
        else echo '<p id="message"> veuillez compléter tous les champs </p>';
    }
    ?>
    </main>
    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>
</body>
</html>