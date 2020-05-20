<?php session_start();

$connect = mysqli_connect("localhost", "root", "", "livreor");

if (isset($_POST['submit'])){

    if (!empty($_POST['commentaire'] && strlen($_POST['commentaire']) > 15 )){

        $request = "SELECT id FROM utilisateurs WHERE login ='".$_SESSION['login']."'";
        $query = mysqli_query($connect, $request);
        $id = mysqli_fetch_all($query);
    
        $com = $_POST['commentaire'];
        $comment = addslashes($com);
        $request2 = "INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES ('$comment', ".$id[0][0].", NOW())";
        $query2 = mysqli_query($connect, $request2);
    
        mysqli_close($connect);
    }  
       
    elseif(strlen ($_POST['commentaire']) < 15) {
        $c_error="votre commentaire doit comporter 15 caractères au minimum...";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>musée guestbook - commentaire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
      <?php include("includes/header.php") ?>
    </header>
    <main>
      <div id="container-com">
        <h6 id="subtitle-com"> FAITES NOUS PART DE VOTRE EXPÉRIENCE 
          <?php
             echo '@'.$_SESSION['login'];
          ?>
        </h6>
        <h1 id="title-com"> LAISSE-NOUS UN COMMENTAIRE </h1>
        <div>
          <form method="POST" action="commentaire.php" id="container-form">
            <textarea id="textarea-com" type="textarea" name="commentaire" cols=70  rows=10 placeholder="votre expérience au museum of marseille..."></textarea><br/>
            <input id= "button-com" type="submit" value="poster mon commentaire" name="submit" >
          </form>
          <?php
            if(isset($c_error)){
              echo '<div id="error-com">'.$c_error.'</div>';
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
