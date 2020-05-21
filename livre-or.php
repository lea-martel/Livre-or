<?php session_start();
$bdd =  mysqli_connect("localhost", "root", "", "livreor");
$requete = "SELECT commentaires.*, utilisateurs.* FROM commentaires 
        INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id ORDER BY commentaires.date;";

$query = mysqli_query ($bdd,$requete);

$commentaires = mysqli_fetch_all($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>musée guestbook - livre-or</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<head>
    <?php include("includes/header.php"); ?>
</head>
<body>
    <main>
        <h1 class="onetittle"> NOTRE LIVRE D'OR </h1>
        <h2 class="twotitlle"> Vos commentaires et avis ! <br /> N'hésitez pas à nous laisser vos impressions !

        <?php
        
        if(isset($_SESSION['id_utilisateur'], $_SESSION['commentaire'], $_SESSION['date'])) {
        
        foreach ($commentaires as $utilisateurs => $valeur) {
        

        }
    }
        
    ?>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>