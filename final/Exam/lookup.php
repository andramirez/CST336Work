<?php
//checks if name given is in current database
include 'dbConn.php';
$conn = getDatabaseConnection();
$sql = "SELECT * FROM fe_login";
$names= getDataBySQL($sql, $conn);

foreach ($names as $name)
{
    if  ($name['username'] == $_POST['name']) 
    {
        if($name['daysLeftPwdChange'] == 0)
        {
            $status = "You must change your password. Go to http://id.xyz.edu";
        }
        if($name['daysLeftPwdChange'] > 0)
        {
            $status= "You have ".$name['daysLeftPwdChange']." days to change your password";
        
        }
    
    }
}

echo  json_encode($status);




?>