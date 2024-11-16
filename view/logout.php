<?php
setcookie("usuario", "", time() - 3600, "/");
setcookie("senha", "", time() - 3600, "/");

header('Location: login.php');
exit();
?>
