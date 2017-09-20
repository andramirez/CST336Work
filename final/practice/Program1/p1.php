 <?php
 session_start();


if (isset($_POST['loginForm'])) {
     include 'db_connect.php';
    $dbConn = getDatabaseConnection();
    $sql = 'SELECT * FROM fp_login 
            WHERE username = :username
            AND password = :password';
            
    $namedParameters = array();
    $namedParameters[":username"] = $_POST['username'];
    $namedParameters[":password"] = sha1($_POST['password']);
    
    $statement = $dbConn->prepare($sql);
    $statement->execute($namedParameters);
    $result = $statement->fetch();
    //print_r($result);
    
    if (empty($result)){
        echo "Wrong username/password";
        $sql = "UPDATE fp_login SET lastLoginStatus= 'U' WHERE username = :username";
    } else {
        $sql = "UPDATE fp_login SET lastLoginStatus= 'U' WHERE username = :username";
    }
        
    $namedParameters = array();
    $namedParameters[":username"] = $_POST['username'];
    $statement = $dbConn->prepare($sql);
    $statement->execute($namedParameters);
    
}


?>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    
 $(document).ready( function(){
     
     $("#username").change( function(){
         
         //alert( $("#username").val());
   $.ajax({
            type: "get",
            url: "program1_api.php",
            dataType: "json",
            data: {"username" : $('#username').val() },
            success: function(data,status) {
                $("#usernameInfo").html("Last login: " + data["lastLogin"]);
              },
            complete: function(data,status) { //optional, used for debugging purposes
                 //alert(status);
              }
         });               
         
     } );
     
     
 });
 
     
</script>

<form method="post">
    
    username: <input type="text" name="username" id="username"/> <span id="usernameInfo"></span> <br>
    password: <input type="password" name="password" /> <br>
    <input type="submit" name="loginForm" /> <br>

</form> 