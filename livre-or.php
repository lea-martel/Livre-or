<?php session_start(); 
$connect = mysqli_connect("localhost", "root", "root", 'livreor');

$requete = "SELECT DATE_FORMAT (date, '%d/%m/%Y'),commentaire FROM commentaires ORDER by date DESC";
$query = mysqli_query($connect , $requete);
$dates = mysqli_fetch_all($query);

$requete2 = "SELECT login FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER by date DESC";
$query2 = mysqli_query($connect , $requete2);
$login = mysqli_fetch_all($query2);

$request = "SELECT DATE_FORMAT (date, '%d/%m/%Y'), utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER by date DESC";
$query3 = mysqli_query($connect , $request);
$test = mysqli_fetch_all($query3);


mysqli_close($connect);


?>
<!DOCTYPE html>
<html>
<head>
    <title>musée guestbook - livre-or</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
      <?php include("includes/header.php");?>
    </header>
    <main>
      <div id="title-comment">
        <h1>les commentaires</h1>   
      </div>
      <div id="global">
        <div id="boxtest">
          <?php
           foreach($dates as $key => $value){                 //boucle pour faire apparaître la date
              echo '<p id="info-comment">posté le</p>'; 
              foreach ($value as $key2=>$value2){ 
                  echo '<p id="date">'.$value2. '</p><br/><br/>';
              }
            }
          ?> 
          <div id="container-com">
            <?php
              foreach($login as $key => $value){                    //boucle pour faire apparaître l'utilisateur
                foreach ($value as $key2=>$value3){
                   echo '<div id="user"><p id="info-comment">utilisateur</p>'.$value3. '</div>';
                }
              }
            ?>
        </div>
      </div>
      <table>
        <thead></thead>
          <?php
            foreach($test as $key => $value){ 
              echo '<tr><td>posté le,</td></tr>';
              foreach ($value as $key2=>$value2){
                echo  '</tr><td>'.$value2. '</td></tr></br>';
            }
          }
        ?>
      </table>
    <?php
     if (isset($_SESSION["login"])){
          echo 'laissez-nous un commentaire @' .$_SESSION['login']; 
        }
      ?>
    
    </main>
    <footer>
    <?php include("includes/footer.php");?>
    </footer>
</body>
</html>
