<?php
namespace DTA\FirstComposer\model;

require '../vendor/autoload.php';

require 'Manager.php';

require '../src/domain/user.php';


use DTA\FirstComposer\domain\User as User;

class UsersManager extends Manager {
    
    public function getUsers() {
        
        $bdd = $this->dbConnect();
        
      $req= $bdd->query('SELECT id, firstname,lastname FROM users order by id');
       $users =[];
       
       while ($userRow = $req->fetch()){
         
           $user = new User();
           $user->id = $userRow['id'];
           $user->firstname = $userRow['firstname'];
           $user->lastname = $userRow['lastname'];
           array_push($users,$user);
       }
       return $users;
    }
    
    public function getUser($id) {
        
        $user = null;
        
        $bdd = $this->dbConnect();
        
        $req = $bdd->prepare('SELECT id, firstname, lastname, password FROM user where id = :id');
        
        $req->bindParam(":id", $id);
        
        if ($req->execute()) {
            
            if ($userRow = $req->fetch()) {
                
                $user = new User();
                
                $user->id = $userRow['id'];
                
                $user->firstname = $userRow['firstname'];
                
                $user->lastname = $userRow['lastname'];
                
                $user->password = $userRow['password'];
            }
        }
        
        return $user;
    }
}