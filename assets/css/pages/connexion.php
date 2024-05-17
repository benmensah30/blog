<?php 
    if(isset($_COOKIE['username'])){
        header('Location: /blog');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
<?php 
       require_once '../../../includes/menu.php';
    ?>
    <div class="login">
        <?php
            if (isset($_GET['user']) && $_GET['user'] == 'unknown') {
                echo "<h2>Les identifiants saisis sont incorrects. Veuillez les vérifier et
                réessayez !</h2>";
            } 
        ?>
    <form action="/blog/processing/login.php" method="POST">

            <label for="username"> Nom d'utilisateur</label>
            <input type="text"name="username" id="username" placeholder="Saisir le nom 
            d'utilisateur ou le pseudonyme ici" minlength="5" maxlength="20" required>

            <label for="password"> Mot de passe</label>
            <input type="password"name="password" id="password" placeholder="Saisir le nom 
            d'utilisateur ou le pseudonyme ici" minlength="8" maxlength="20" required>

            <button type="submit">S'inscrire</button>

            <p>Pas encore de compte? Inscrivez-vous en cliquant <a href="/blog/assets/css/pages/connexion.php?page=connexion">ici</a></p>
        </form>
    </div>
</body>
</html>