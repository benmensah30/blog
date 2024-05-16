<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
<?php 
       require_once '../../../includes/menu.php';
    ?>
    <div class="signin">
        <form action="">
            <label for="email">Adresse Email</label>
            <input type="email" name="email" id="email" placeholder="Saisir votre Adresse
            email" required>
            <label for="username"> Nom d'utilisateur</label>
            <input type="text"name="username" id="username" placeholder="Saisir le nom 
            d'utilisateur ou le pseudonyme ici" minlength="5" maxlength="20" required>

            <label for="password"> Mot de passe</label>
            <input type="password"name="password" id="password" placeholder="Saisir le nom 
            d'utilisateur ou le pseudonyme ici" minlength="8" maxlength="20" required>

            <label for="comfirmation">Comfirmation de mot de passe</label>
            <input type="comfirmation"name="comfirmation" id="comfirmation" placeholder="Saisir le nom 
            d'utilisateur ou le pseudonyme ici" minlength="8" maxlength="20" required>

            <button type="submit">S'inscrire</button>

            <p>Déja un compte? connectez-vous en cliquant <a href="/blog/assets/css/pages/connexion.php?page=connexion">ici</a></p>
        </form>
    </div>
</body>
</html>