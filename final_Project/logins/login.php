<?php
    session_start();
    $errorMessage = $_SESSION['message'];

?>
<!--login page-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gemstone Mania Login</title>
        <link rel="stylesheet" href="../css/main.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
        <!--hiding hint of username and password-->
        <style> 
       #hints { 
            
               display: none;  /*hides elements*/ 
       } 
  </style> 
    </head>
    <body>
        <div class="bigContainer2">
            <div class="gemSearch">
            <header>
                <!--Login page title-->
              <h1>Gemstone Mania - Admin Login</h1>
            </header>
            <div>
                <?php
                //error message that appears if username or password are incorrect
                if($errorMessage)
                {
                    echo "<div style= 'color:red'>" . $_SESSION['message'] . "<br/><div>"; 
                }
                ?>
                <!--login form-->
                <form method="POST" action="loginProcess.php">
                    
                    Username: <input type="text" name="username" /> <br /><br/>
                    Password: <input type="password" name="password" /> <br /><br/>
                    <input class="fsSubmitButton" type="submit" value="Login" name="loginForm" /><br/><br/>
                    
                </form>
                <br/>
                <!--option to visit site as user-->
                <a href = "../gems.php">Visit as User</a>
              
            </div>
            <div>
                <br/><a href="#" id="hintsLink"> Login Hint </a> 
            </div>
            
            <!--hints for logging in-->
            <div id="hints"> Username: admin <br/>
            Password: password <br/>
            Username2: User1<br/>
            Password2: usercode<br/>
            Username3: User2<br/>
            Password3: usercode2</div>
            
            <!--script to unhide hints-->
<script> 
            $("#hintsLink").click( function(){ 
         
        $("#hints").css("color","blue"); //displays content         
         
        $("#hints").slideToggle(); 
    } );   
     
</script>
        
            </div>
        </div>
    </body>
</html>