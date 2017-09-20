<?php
    session_start();
    $errorMessage = $_SESSION['message'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div>
            <header>
              <h1>Quiz</h1>
            </header>
            <div>
                <?php
                if($errorMessage)
                {
                    echo "<div style= 'color:red'>" . $_SESSION['message'] . "<br/><div>"; 
                }
                ?>
                
                <form method="POST" action="loginProcess.php">
                    
                    Username: <input type="text" name="username" /> <br />
                    Password: <input type="password" name="password" /> <br />
                    <input class="fsSubmitButton" type="submit" value="Login" name="loginForm" />
                    
                </form>
              
            </div>
        
            <footer>
            </footer>
        </div>
    </body>
</html>