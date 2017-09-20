<?php
include 'db_connect.php';
$connection = getDatabaseConnection(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <div>
            <?php
            
            $saltedAndHashedPassword = hash("sha1","gH_*" . $_POST["password"] . "_9\$xP");
            echo $saltedAndHashedPassword;
            
            $sql = "INSERT INTO oe_admin
            (username, password, EmailAddress, Salt,  FullName, Client_ID) 
            VALUES 
            ('" . $_POST['username'] . "', '" . $saltedAndHashedPassword . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "', '" . $_POST['name'] . "', '" . $_POST['client_id'] . "')";
            
            getDataBySQL($sql, $connection);
            // header("Location: login.php");
            ?>
            

        </div>
    </body>
</html>