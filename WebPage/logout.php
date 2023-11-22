<?php
session_start();
session_unset();
$_SESSION['user'] = '';
session_destroy();

header('Location: ./main.php?logout=successful');

//header('location: ../Main/mini.php?logout=successful');
exit();
?>