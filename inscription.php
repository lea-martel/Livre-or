<?php session_start();

$bdd =  mysqli_connect("localhost", "root", "", "livreor");


if (isset($_POST))


?>

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
    <?php
    
    if (isset($_SESSION["login"]))
    echo "Vous êtes déjà inscrit";

    ?>
        <form action="inscription.php" method="post">
            <h1 class="toptitre"> INSCRIPTION </h1> <br />
            <label class="champs">Login</label>
            <input class="cadre" type="texte" id="login" name="login" placeholder="Entrer votre login"> <br /> <br />

            <label class="champs">Mot de passe</label>
            <input class="cadre" type="password" id="mdp" name="password" placeholder="Entrer le mot de passe"> <br /> <br />

            <label class="champs">Confirmation mot de passe</label>
            <input class="cadre" type="password" id="mdp" name="password" placeholder="Confirmer le mot de passe"> <br /> <br />

            <input class="button" type="submit" value="CONNEXION" name="connexion"> <br /> <br />
            <p class="connecte">Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous.</a></p>
        </form>
    </main>
    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>
</body>

</html>