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
    <table>
      <tr>
        <th>#</th>
        <th>Task Description</th>
        <th>Points</th>
      </tr>
      <tr>
        <td>1</td>
        <td>There is a Login form with all appropriate HTML elements</td>
        <td>5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>When changing the username, a jQuery event is executed</td>
        <td>5</td>
      </tr>
      <tr>
        <td>3</td>
        <td>When changing the username, an AJAX call is executed, displaying the last date/time the user logged in and the last login status (Successful, Unsuccessful)</td>
        <td>15</td>
      </tr>
      <tr>
        <td>4</td>
        <td>When submitting the Login form, the last date/time is updated correctly</td>
        <td>15</td>
      </tr>
      <tr>
        <td>5</td>
        <td>When submitting the Login form, the Login Status is updated accordingly, whether it was Successulf (S) or Unsuccessful (U)</td>
        <td>20</td>
      </tr>
      <tr>
        <td>6</td>
        <td>When submitting the Login form, if the credentials are wrong, the user is taking back to the login screen.</td>
        <td>5</td>
      </tr>
      <tr>
        <td>7</td>
        <td>When submitting the Login form, if the credentials are correct, a "username" session variable is set and it is displayed in a new page called "welcome.php"</td>
        <td>10</td>
      </tr>
      <tr>
        <td>8</td>
        <td>At least five CSS rules are included</td>
        <td>5</td>
      </tr>
      <tr>
        <td>9</td>
        <td>This rubric is properly included AND UPDATED (BONUS)</td>
        <td>2</td>
      </tr>
      <tr>
        <td colspan=1>T O T A L</td>
      </tr>
    </table>
            <div>
            <header>
              <h1>Quiz</h1>
            </header>
            <link rel="stylesheet" type="text/css" href="jquerymobile/jquery.mobile-1.0a1.min.css" />
        <script type="text/javascript" src="jquerymobile/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="jquerymobile/jquery.mobile-1.0a1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script>
                 $(document).ready(function() {
                var username = $("#user").val();
            jQuery.ajax({
              method:'POST', //Or get
              url: "nameLookup.php",
              data:{username: username},
              success:function(data){
                data = jQuery.parseJSON(data);
              $("#last").html("The last login for " + data[0] + " was on " + data[1] + " and was " + data[2]); 
              $("#last").css("color","#99ff66");
              },
            });
            });
            </script>
            <div>
              <div id="last"></div>
                <?php
                if($errorMessage)
                {
                    echo "<div style= 'color:red'>" . $_SESSION['message'] . "<br/><div>"; 
                }
                ?>
                
                <form method="POST" action="loginProcess.php">
                    
                    Username: <input type="text" name="username" id="user"/> <br />
                    Password: <input type="password" name="password" /> <br />
                    <input class="fsSubmitButton" type="submit" value="Login" name="loginForm" />
                    
                </form>
              
            </div>
        
            <footer>
            </footer>
        </div>
  </body>
</html>	 




	 