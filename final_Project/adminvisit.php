<?php
//switches permission to no
session_start();

$_SESSION['permission'] = "yes";

header('Location:gems.php')

?>