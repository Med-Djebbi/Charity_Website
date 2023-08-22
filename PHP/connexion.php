<?php
$succes="";
$erreur="";
if(isset($_POST['login'])){
    if(isset($_POST['email'])&& isset($_POST['password'])){
        $email=$_POST['email'];
        $mdp=$_POST['password'];
        $con= mysqli_connect("localhost","root","","association");
        $req= mysqli_query($con,"select* from inscription where email='$email' and mdp='$mdp'");
        $num_ligne= mysqli_num_rows($req);
        if($num_ligne >0){
            $succes= "Bienvenue, vous êtes connecté.";
        }
        else{
            $erreur= "Adresse mail ou mot de passe incorrectes !!";
        }
        $con->close();
    }
}  
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Connexion</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/style1.css">
        <link rel="stylesheet" href="../CSS/style3.css">
        <link rel="stylesheet" href="../CSS/style4.css">
    </head>
    <body class="page3" vlink="white" link="white" alink="white">
        <div style="color: white;">
        <div class="logo">
            <a href="index.html"><img src="../Images/logo.png" alt="logo" width="55px"></a>
        </div>
        <div class="title">
            <a href="index.html"><h2>UN ENFANT,<br/> UN ESPOIR</h2></a>
        </div>
        <div class="menu">
            <div class="flexbox_item"><a href="Qui_nous_sommes.html">QUI NOUS SOMMES</a></div>
            <div class="flexbox_item"><a href="actions.html">ACTIONS</a></div>
            <div class="flexbox_item"><a href="projets.html">PROJETS</a></div>
            <div class="flexbox_item"><a href="evenement.html">EVENEMENT</a></div>
            <div class="flexbox_item"><a href="connexion.html">SE CONNECTER</a></div>
        </div>
    </div>
        <div class="form_connex">
            <form name="connexion" method="post">
                <div><h4>Se connecter</h4>
                <hr>
                <div style="color: red; padding-left: 35px;"><?php echo $erreur; ?></div><div style="color: green; padding-left: 80px;"><?php echo $succes; ?></div>
                </div>
                <div class="login_field">
                <div class="donnee">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="donnee">
                    <label for="password"><strong>Mot de passe</strong></label>
                    <input type="password" name="password" id="password" required>
                </div>
                <input type="submit" name="login" value="Connexion">
            </div>
        </div>
    </body>
</html>