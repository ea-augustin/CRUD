<?php
namespace DTA\FirstComposer\test;

require '../vendor/autoload.php';
require '../model/manager.php';
require '../model/UserManager.php';

use PHPUnit\test\calcutest as TestCase;

use DTA\FirstComposer\model\UsersManager as UsersManager;

class UsersManagerTest extends TestCase {
        
        private $usersManager;
        
        protected function setUp() {
            
            parent::setUp();
            
            $this->usersManager = new UsersManager();
        }
        
        protected function tearDown() {
            
            $this->usersManager = null;
            
            parent::tearDown();
        }
        
        public function testGetUsers() {
            
            $users = $this->usersManager->getUsers();
            
            $this->assertEquals(7, count($users));
        }
        
        public function testGetUser() {
            
            $user = $this->usersManager->getUser(1);
            
            $this->assertEquals(7, $user->id);
            
            $this->assertEquals('Bobby', $user->firstname);
            
            $this->assertEquals('Firmino', $user->lastname);
            
            $this->assertEquals('LFC', $user->password);
        }
    }
    