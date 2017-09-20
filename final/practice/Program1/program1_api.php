 <?php
    include 'db_connect.php';
    $dbConn = getDatabaseConnection();
    $sql = 'SELECT lastLogin, lastLoginStatus FROM fp_login 
            WHERE username = :username';
    $namedParameters = array();
    $namedParameters[":username"] = $_GET['username'];
    
    $statement = $dbConn->prepare($sql);
    $statement->execute($namedParameters);
    $result = $statement->fetch(PDO::FETCH_ASSOC);        
    
    echo json_encode($result);    
?> 