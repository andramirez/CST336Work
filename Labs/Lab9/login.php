<?php
    session_start(); //start or resume an existing session 
    $errorMessage = $_SESSION['message'];

?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <title> </title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
        <link rel="stylesheet" href="main.css">
        <style> 
       #directions { 
            
               display: none;  /*hides elements*/ 
       } 
  </style> 
    </head>
    <body>
        <div>
            <header>
              <h1>Profile Login</h1>
            </header>
            <div>
                <?php
                if($errorMessage)
                {
                    echo "<div style= 'color:red'>" . $_SESSION['message'] . "<br/><div>"; 
                }
                ?>
                
                <form method="POST" action="loginProcess1.php">
                    
                    Username: <input type="text" name="username" /> <br />
                    Password: <input type="password" name="password" /> <br /><br/>
                    <input class="fsSubmitButton" type="submit" value="Login" name="loginForm" />
                    
                </form>
              
            </div>
            <div>
                <br/><a href="#" id="directionsLink"> Login Hint </a> 
            </div>
            
            
            <div id="directions"> Username: admin <br/>
            Password: password <br/>
            Username2: User1<br/>
            Password2: usercode<br/>
            Username3: User2<br/>
            Password3: usercode2</div>
        
            <footer>
            </footer>
            <script> 
            $("#directionsLink").click( function(){ 
         
        $("#directions").css("color","blue"); //displays content         
         
        $("#directions").slideToggle(); 
    } );   
     
</script> 
        </div>
    </body>
</html>