<?php
//checks if name given is in current database
include 'includes/db_connect.php';
$conn = getDatabaseConnection();
$sql = "SELECT GemName FROM Gemstones";
$gems = getDataBySQL($sql, $conn);
$array = array();
foreach ($gems as $gem)
{
    if  ($_POST['name'] == $gem['GemName']) 
    {
    $status = "Available"; //if in current database, then echo Available
    // $array[] = ;
    }
}

echo $status;




?>