<?php 
require_once "config.php"; 
$sql = "INSERT INTO user(email,password,login) VALUES(:email,:password,:login)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':username'=> $_POST['username']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>