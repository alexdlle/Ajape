<?php
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
