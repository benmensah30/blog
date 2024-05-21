<?php 
    require('../config/database.php');

    $username= htmlspecialchars($_POST['username']); //htmspecialchars est un fonction permet d'empèché injection sql
    $password= htmlspecialchars($_POST['password']);
    $hashed_password = md5($password);

    $req = $myPDO->query("SELECT * FROM users WHERE username = '$username' AND password =
    '$hashed_password';");
     $result = $req->fetch();

     if(isset($result) && $result) {
        setcookie('username', $username, time()+3600000, '/');
        setcookie('id', $result['id'], time()+3600000, '/');
       // $_COOKIE['leaderGroup'] = $user->ID;
        header('Location: /blog/index.php');
     }else{
        header('Location: /blog/assets/css/pages/connexion.php?page=connexion&user=unknown');
     }
      // 
?>