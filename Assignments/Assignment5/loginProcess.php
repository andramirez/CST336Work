<?php 
session_start(); //start or resume an existing session 

include 'db_connect.php'; 

$connection = getDatabaseConnection(); 


if (isset($_POST['loginForm'])) { //checks whether user submitted the form 
     
    $username = $_POST['username']; 
    //$password = sha1($_POST['password']);  
    $password = hash("sha1","gH_*" . $_POST["password"] . "_9\$xP");
    
    $sql = "SELECT *  
            FROM User
            WHERE username = '$username' 
            AND password = '$password'";  //Not preventing SQL Injection 
             

    $sql = "SELECT *  
            FROM User 
            WHERE username = :username 
            AND password = :password";  //Preventing SQL Injection 
             
    $namedParameters = array(); 
    $namedParameters[':username'] = $username;                 
    $namedParameters[':password'] = $password;             
     
    $statement = $connection->prepare($sql);  
    $statement->execute($namedParameters); 
    $record = $statement->fetch(PDO::FETCH_ASSOC); 
     
    if (empty($record['username'])) { //wrong username or password 
         
        include 'login.php';
        
        $_SESSION['message'] = "Wrong username or password";
        
    }
    else { 
         
        $_SESSION['username'] = $record['username']; 
         
        header("Location: quiz.php"); 
                 
    } 
} 




?>