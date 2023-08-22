<?php
$nom=$_POST['nom'];
$email=$_POST['email'];
$numero=$_POST['numero'];
$message=$_POST['commentaire'];
$host= "localhost";
$dbname= "association";
$dsn="mysql:host=". $host .";dbname=". $dbname;
$pdo=new PDO($dsn,'root','');
$stmt= $pdo->prepare("insert into contact(nom_prenom,email,tel,message) values(:nom,:email,:numero,:message)");
$stmt->execute([
    ":nom"=>$nom,
    ":email"=>$email,
    ":numero"=>$numero,
    ":message"=>$message
]);
echo "<p>Message envoyé<br/>Merci pour le feedback</p>";
?>