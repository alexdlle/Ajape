<?php

$title = "Home";
ob_start();

?>

<p>test</p>
<a href="index.php">Link</a>

<?php

$body = ob_get_clean();
require('../style/template.php'); 

?>
