<?php
$host= "localhost";
$dbname= "association";
$dsn="mysql:host=". $host .";dbname=". $dbname;
$pdo=new PDO($dsn,'root','');
$req="insert into inscription(nom,prenom,sexe,date_naiss,adresse_exacte,ville,code_postal,entreprise,tel,email,mdp) values(:nom,:prenom,:sexe,:date_naiss,:adresse_exacte,:ville,:code_postal,:entreprise,:tel,:email,:mdp)";
$stmt= $pdo->prepare($req);
$stmt->execute([
":nom"=>$_POST['nom'],
":prenom"=>$_POST['prenom'],
":sexe"=>$_POST['sexe'],
":date_naiss"=>$_POST['date_naiss'],
":adresse_exacte"=>$_POST['adresse'],
":ville"=>$_POST['ville'],
":code_postal"=>$_POST['code_postal'],
":entreprise"=>$_POST['entreprise'],
":tel"=>$_POST['telephone'],
":email"=>$_POST['email'],
":mdp"=>$_POST['password']
]);
echo "Inscription valide";
?>