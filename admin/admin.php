<?php
  $title = "Administration";

  ob_start();

?>

<form aciton="admin_connexion.php" method="post">
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

?>
