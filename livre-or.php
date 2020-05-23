<?php session_start(); 
$connect = mysqli_connect("localhost", "root", "", 'livreor');

$requete = "SELECT DATE_FORMAT (date, '%d/%m/%Y') FROM commentaires ORDER by date DESC";
$query = mysqli_query($connect , $requete);
$dates = mysqli_fetch_all($query);

$requete1 = "SELECT commentaire FROM commentaires ORDER by date DESC";
$query1 = mysqli_query($connect , $requete1);
$comment = mysqli_fetch_all($query1);


$requete2 = "SELECT login FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER by date DESC";
$query2 = mysqli_query($connect , $requete2);
$login = mysqli_fetch_all($query2);

/* pas utilisée
$request = "SELECT DATE_FORMAT (date, '%d/%m/%Y') , utilisateurs.login , commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER by date DESC";
$query3 = mysqli_query($connect , $request);
$test = mysqli_fetch_all($query3);
*/

mysqli_close($connect);

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
      <div id="title-comment">
        <h1>LIVRE D'OR</h1>   
      </div>
        
      <?php 
       if (isset($_SESSION["login"])){
         echo '<h2 id="subtitle-livre">laissez-nous un commentaire @ ' .$_SESSION['login']. ' &nbsp;<a id="lien" href="commentaire.php"> ICI</a></h2>'; 
       }
      ?>
   
      <div id="container-livreor">
        <div class="box-com">
          <?php
           foreach($dates as $key => $value){                                   //boucle pour faire apparaître la date
              echo '<p class="info-comment">posté le</p>'; 
              foreach ($value as $key2=>$value2){ 
                  echo '<p class="text-com">'.$value2. '</p><br/><br/>';
              }
            }
          ?> 
          </div>
          <div class="box-com">
            <?php
              foreach($login as $key => $value){ 
                echo '<p class="info-comment"> par utilisateur</p>';               //boucle pour faire apparaître l'utilisateur
                foreach ($value as $key2=>$value3){
                   echo '<p class="text-com">'.$value3. '</p><br/><br/>';
                }
              }
            ?>
        </div>
        <div id="box-com">
            <?php
              foreach($comment as $key => $value){ 
                echo '<p class="info-comment">commentaire</p>';                    //boucle pour faire apparaître le commentaire
                foreach ($value as $key2=>$value3){
                   echo '<p class="text-com"</p>'.$value3. '</p><br/><br/>';
                }
              }
            ?>
        </div>
      </div>
    </main>
    <footer>
      <?php include("includes/footer.php");?>
    </footer>
</body>
</html>

