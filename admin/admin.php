<?php
  $title = "Administration";

  ob_start();

?>

<form action="" method="post">
  <div class="form-group col-md-6">
    <label for="formUsername">Username</label>
    <input type="text" name="username" id="formUsername">
  </div>
  <div class="form-group col-md-6">
    <label for="formPassword">Password</label>
    <input type="text" name="password" id="formPassword">
  </div>
  <button type="submit" class="btn btn-dark">Sign in</button>
</form>


<?php

$body = ob_get_clean();
require('../style/template.php');

$user = "id11179498_hugzrr";
$pass = "cqfdcqfd";
$dbh = new PDO('mysql:host=localhost;dbname=id11179498_ajape', $user, $pass);

$username = $_POST['username'];
$password = $_POST['password'];

$connexionAdmin = $dbh->query('SELECT * FROM admin_users WHERE username = "'. $username .'" AND password = MD5("'. $password .'")');

if(count($connexionAdmin) > 0) {
  echo 'coucou pute';
} else {
  echo 'ntm';
}

?>
