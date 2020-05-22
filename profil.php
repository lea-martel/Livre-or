
<!DOCTYPE html>
<html>

<head>
    <title>musée guestbook - profil</title>
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
        <div id="container-profil">
            <form id="form-profil" action="profil.php" method="post">
                <h1 class="toptitre"> MODIFIER LE LOGIN ET MOT DE PASSE </h1><br />
                <h2 class="titre">MUSEUM OF MARSEILLE </h2><br />

                <label class="champs">Nouveau login</label>
                <input class="cadre" type="texte" id="login" name="login" placeholder="Entrer votre nouveau login">

                <label class="champs">Mot de passe actuel</label>
                <input class="cadre" type="password" id="mdp" name="password_a" placeholder="Entrer le mot de passe">

                <label class="champs">Nouveau mot de passe </label>
                <input class="cadre" type="password" id="mdp" name="password_n" placeholder="Entrer le nouveau de mot de passe">

                <label class="champs">Confirmation du nouveau mot de passe </label>
                <input class="cadre" type="password" id="mdp" name="password_c" placeholder="Confirmation du mot de passe">

                <input class="button" type="submit" value="VALIDER" name="submit">

                <div>
                </form>
                        <?php session_start();

                        if (isset($_POST['login'])); {
                            $username = $_POST['login'];
                        
                        if (isset($_POST['submit'])); {
                            $login = $_POST['login'];
                            $password_a = $_POST['password_a'];
                            $password_n = $_POST['password_n'];
                            $password_c = $_POST['password_c'];
                        
                            $bdd =  mysqli_connect("localhost", "root", "", "livreor");
                            $query = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$username' AND login = '$login'");
                            $rows = mysqli_num_rows($query);

                        if ($login && $password_a && $password_n && $password_c == true) {
                        if (empty($password_a)) {
                        
                        if ($rows ==1) {
                            $new_password = mysqli_query($bdd, "UPDATE utilisateurs SET login='$password_n' WHERE login='$username'");

                        }
                        }
                       
                        elseif ($password_n != $password_c) {

                            echo "Mot de passe différent ! ";
                        }

                        elseif ($password_n == $password_c) {

                            header('location:connexion.php');
                        }
                        
                        else {
                            
                            echo "Veuillez saisir votre ancien mot de passe !";
                        }

                    }
                    }
                    }
                   
                        ?>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>