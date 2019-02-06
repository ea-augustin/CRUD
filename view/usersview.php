<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<h1>Users</h1>
         <div class="container">
        
        <div class="row justify-content-center"></div>
        <table class="table">
        <thead>
        <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th colspan="2">Action</th>
        </tr>
        </thead>
        
 <?php
foreach ($users as $user) {
    ?>
         <tr>
                <td><?= $user-> id; ?></td>
                <td><?=$user->firstname; ?></td>
                <td><?=$user->lastname; ?></td>
                <td><a href="../index.php?edit=<?= $user-> id;?>"
                      class="btn btn-info">Edit</a>
                      <a href="../controller/userController.php?delete=<?= $user-> id;?>"
                      class="btn btn-danger">Delete</a>
                     
                </td>
            </tr>

        <?php
        }

       
        ?>
        </table>
        
   <div class="row justify-content-center" >
  <form action="#" method="POST">
  <div class="form-group">
  <label>Firstname</label>
  <input type="text" name="firstname" class="form-control" placeholder="Enter your Firstname">
  </div>
  <div class="form-group">
  <label>Lastname</label>
  <input type="text" name="lastname" class="form-control" placeholder="Enter your Lastname">
  </div>
  <div class="form-group">
  <label>Password</label>
  <input type="password" name="password" class="form-control" placeholder="Enter your Password">
  </div>
  <div class="form-group">
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
  </div>
</div>

  <?php $content = ob_get_clean(); ?>

<?php require('template.php'); 
//require('controller/userController.php');?>
