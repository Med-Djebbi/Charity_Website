<?php
$somme=$_POST['somme'];
$nom=$_POST['nom'];
$numcarte=$_POST['numcarte'];
$date=$_POST['date'];
$code_securite=$_POST['code_securite'];
$code_postal=$_POST['code_postal'];
$host= "localhost";
$dbname= "association";
$dsn="mysql:host=". $host .";dbname=". $dbname;
$pdo=new PDO($dsn,'root','');
$stmt= $pdo->prepare("insert into donation(somme,nom,num_carte,date_exp,code_sec,code_postal) values(:somme,:nom,:numcarte,:date,:code_securite,:code_postal)");
$stmt->execute([
    ":somme"=>$somme,
    ":nom"=>$nom,
    ":numcarte"=>$numcarte,
    ":date"=>$date,
    ":code_securite"=>$code_securite,
    ":code_postal"=>$code_postal
]);
echo "<p>Paiement terminé<br/>Merci pour votre contribution</p>";
?>