<?php

include 'model/dbh.inc.php';

$firstname="Bobby";
$lastname="Firmino";
$password="LFC";

$firstname2="Sadio";
$lastname2="Mané";
$password2="LFC";

$firstname3="Mohamed";
$lastname3="Salah";
$password3="LFC";

$firstname4="Ezra";
$lastname4="Augustin";
$password4="LFC";

$firstname5="Shawn";
$lastname5="Augustin";
$password5="LFC";

$req = $conn->prepare('INSERT INTO users (firstname, lastname, password) VALUES (:firstname, :lastname, :password)');
//possibilité d'enchainer plusieurs insert avec des variables différentes sur les requêtes préparées
$req->execute(array('firstname' => $firstname,'lastname' => $lastname,'password'=> $password ));
$req->execute(array('firstname' => $firstname2,'lastname' => $lastname2,'password'=> $password2 ));
$req->execute(array('firstname' => $firstname3,'lastname' => $lastname3,'password'=> $password3));
$req->execute(array('firstname' => $firstname4,'lastname' => $lastname4,'password'=> $password4));
$req->execute(array('firstname' => $firstname5,'lastname' => $lastname5,'password'=> $password5));

$req->closeCursor();
