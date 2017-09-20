<?php 
session_start(); //start or resume an existing session 

include '../includes/db_connect.php'; 

$connection = getDatabaseConnection(); 

if (isset($_POST['loginForm'])) { //checks whether user submitted the form 
     
    $username = $_POST['username']; 
    //$password = sha1($_POST['password']);  
    $password = hash("sha1","gH_*" . $_POST["password"] . "_9\$xP");
    
    $sql = "SELECT *  
            FROM Admin
            WHERE username = '$username' 
            AND password = '$password'";  //Not preventing SQL Injection 
             

    $sql = "SELECT *  
            FROM Admin
            WHERE username = :username 
            AND password = :password";  //Preventing SQL Injection 
             
    $namedParameters = array(); 
    $namedParameters[':username'] = $username;                 
    $namedParameters[':password'] = $password;             
     
    $statement = $connection->prepare($sql);  
    $statement->execute($namedParameters); 
    $record = $statement->fetch(PDO::FETCH_ASSOC); 
     
    //records username
    if (empty($record['username'])) { //wrong username or password 
         
        include 'login.php';
        
        $_SESSION['message'] = "Wrong username or password";
        
    }
    // records username and permission
    else { 
         
        $_SESSION['username'] = $record['username']; 
        $_SESSION['permission'] = "yes";
        // $_SESSION['adminName'] = $record['FullName']; 
         
        header("Location: ../gems.php"); 
                 
    } 
} 




?>