<?php
require '../vendor/autoload.php';
require '../src/model/UserManager.php';

use DTA\FirstComposer\model\Usersmanager as UsersManager;

$usersmanager = new UsersManager();

$users= $usersmanager->getUsers();

require '../view/usersview.php';


$conn = new PDO('mysql:host=localhost;dbname=MVC;charset=utf8','root', 'Dta2018!');

if (isset($_POST['submit'])) {
    
    
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $password=$_POST['password'];
    
    $req = $conn->prepare('INSERT INTO users (firstname, lastname, password) VALUES (:firstname, :lastname, :password)');
    //possibilité d'enchainer plusieurs insert avec des variables différentes sur les requêtes préparées
    $req->execute(array('firstname' => $firstname,'lastname' => $lastname,'password'=> $password ));
    
}


if (isset($_GET['delete'])){
    
    $id =$_GET['delete'];
    
    $req = $conn->prepare('DELETE FROM users WHERE id = $id');
    //possibilité d'enchainer plusieurs insert avec des variables différentes sur les requêtes préparées
    //$req->execute(array('firstname' => $firstname,'lastname' => $lastname,'password'=> $password ));
    
    
}