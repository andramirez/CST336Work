<?php
//switches permission to no
session_start();

$_SESSION['permission'] = "no";

header('Location:gems.php')

?>