<?php session_start();
$bdd =  mysqli_connect("localhost", "root", "", "livreor");
?>

<!DOCTYPE html>
<html>

<head>
    <title>musée guestbook - profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php include("includes/header.php"); ?>
    <main>
        <div id="container-profil">
            <form class="form-profil" action="profil.php" method="post">
                <h1 class="toptitre"> CHANGER SON LOGIN ET MOT DE PASSE </h1><br />
                <h2 class="titre">MUSEUM OF MARSEILLE </h2><br />
            <label class="champs">Login actuel</label>
            <input class="cadre" type="texte" id="login" name="login" placeholder="Entrer votre login">

            <label class="champs">Nouveau login</label>
            <input class="cadre" type="texte" id="login" name="login" placeholder="Entrer votre login">

            <label class="champs">Mot de passe actuel</label>
            <input class="cadre" type="password" id="mdp" name="mdp" placeholder="Entrer le mot de passe">

            <label class="champs">Nouveau mot de passe </label>
            <input class="cadre" type="password" id="mdp" name="mdp" placeholder="Entrer le mot de passe">

            <label class="champs">Confirmation du nouveau mot de passe </label>
            <input class="cadre" type="password" id="mdp" name="mdp" placeholder="Entrer le mot de passe">

            <input class="button" type="submit" value="VALIDER" name="valider">
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>