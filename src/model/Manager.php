<?php

namespace DTA\FirstComposer\model;

class Manager{
    
    protected function
    dbConnect(){
     
  return new \PDO('mysql:host=localhost;dbname=MVC;charset=utf8','root','Dta2018!');
     
    }
}