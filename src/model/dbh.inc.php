<?php

function getUsers(){
   

$conn = new PDO('mysql:host=localhost;dbname=MVC;charset=utf8','root', 'Dta2018!');


$req = $conn->query('SELECT id, firstname, lastname FROM users order by id');

return $req;
   
}
$conn = new PDO('mysql:host=localhost;dbname=MVC;charset=utf8','root', 'Dta2018!');