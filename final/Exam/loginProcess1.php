<?php 

session_start(); //start or resume an existing session 

include 'dbConn.php'; 

$connection = getDatabaseConnection(); 


if (isset($_POST['loginForm'])) {
    $dbConn = getDatabaseConnection();
    $sql1 = 'SELECT * FROM fe_login 
            WHERE username = :username';

            
    $namedParameters1 = array();
    $namedParameters1[":username"] = $_POST['username'];
    
    $statement1 = $dbConn->prepare($sql1);
    $statement1->execute($namedParameters1);
    $record1 = $statement1->fetch();
    //print_r($result);
}
//check if username or pass is wrong
if (empty($record1['username']))
{ 
    //check if pass is wrong
          $_SESSION['message1'] = "Wrong username";
          header("Location:program1.php");

        
        // header("Location:program1.php");

}
if(sha1($_POST['password']) != $record1['password'])
    {
        $sql2= "UPDATE fe_login SET failedAttempts = failedAttempts + 1 WHERE username = '".$_POST['username']."'";
        getDataBySQL($sql2); 

    //Check on Number of failed attempts
    $sql3 = "SELECT * FROM fe_login 
            WHERE username = '".$_POST['username']."'";

    $records3 = getDataBySQL($sql3); 
    foreach($records3 as $record3)
    {
    if($record3['failedAttempts'] ==3){
       
         $sql4 = 'INSERT INTO fe_lock(studentId) VALUES (:studentId)';

            
    $namedParameters4 = array();
    $namedParameters4[":studentId"] = $record1['studentId'];
    
    $statement4 = $dbConn->prepare($sql4);
    $statement4->execute($namedParameters4);
     $_SESSION['message2'] = "3 failed attempts. Account has been locked!";
    }
    }
    
        $_SESSION['message1'] = "Wrong password";
        header("Location:program1.php");
    }

else { 
         $sql5 = 'SELECT * FROM fe_lock 
            WHERE studentId = :studentId';
            
    $namedParameters5 = array();
    $namedParameters5[':studentId'] = $record1['studentId'];

    
    $statement5 = $dbConn->prepare($sql5);
    $statement5->execute($namedParameters5);
    $result5 = $statement5->fetch();
     
     if ($result5==NULL) { //wrong username or password 
     header("Location: welcome.php"); 
         
        
        

        }
        else { 
        
        
        $_SESSION['message3'] = "Account is locked!";
        header("Location:program1.php");

        
            }   
         
       
                 
    } 
        
        

                 



?>