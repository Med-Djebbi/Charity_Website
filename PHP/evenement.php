<?php
$host= "localhost";
$dbname= "association";
$dsn="mysql:host=". $host .";dbname=". $dbname;
$pdo=new PDO($dsn,'root','');
$req="insert into evenement(nom_prenom,nom_evenement,role,temps) values(:nom,:event,:role,:temps)";
$stmt= $pdo->prepare($req);
$stmt->execute([
    ":nom"=>$_POST['name'],
    ":event"=>$_POST['evenement'],
    ":role"=>$_POST['role'],
    ":temps"=>$_POST['arrival-time']
]);
echo "Votre participation a été enregistrée";
?>