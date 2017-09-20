 <?php
session_start();
$errorMessage2 = $_SESSION['message2'];
$errorMessage1 = $_SESSION['message1'];
$errorMessage3 = $_SESSION['message3'];
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="jquerymobile/jquery.mobile-1.0a1.min.css" />
        <script type="text/javascript" src="jquerymobile/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="jquerymobile/jquery.mobile-1.0a1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#Action").click(function(){
            var name = $("#username").val();

            jQuery.ajax({
              method:'POST', //Or get
              url: "lookup.php",
              data:{name: name},
              success:function(data){
                  console.log(data);
                     $("#usernameInfo").html(data); 
                     $("#usernameInfo").css("color","red");

              }
 });
            });
        });
 
     
</script>
</head>
<body>

<form method="post" action= "loginProcess1.php">
    <?php
                if($errorMessage1)
                {
                    echo "<div style= 'color:red'>" . $_SESSION['message1'] . "<br/><div>"; 
                }
                if($errorMessage2)
                {
                    echo "<div style= 'color:red'>" . $_SESSION['message2'] . "<br/><div>"; 
                }
                if($errorMessage3)
                {
                    echo "<div style= 'color:red'>" . $_SESSION['message3'] . "<br/><div>"; 
                }
                ?>

    
    username: <input type="text" name="username" id="username"/> <span id="usernameInfo"></span> <a href="#" id = "Action">password status</a>
    <br>password: <input type="password" name="password" /> <br>
    <input type="submit" name="loginForm" /> <br>

</form> 
</body>
</html>
