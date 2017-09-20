<?php 
session_start(); //start or resume an existing session 

include 'resultsTable.php';

if (!isset($_SESSION['username'])) {  //checks whether user has logged in
    
    header("Location: login.php");
    
}
$username = $_SESSION['username'];
$_SESSION['Q3'] = $_POST['Q3'];
$_SESSION['Q4'] = $_POST['Q4'];
echo $_SESSION['Q3'];



?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> </title>
        <link rel="stylesheet" href="main.css">
         <link rel="stylesheet" type="text/css" href="jquerymobile/jquery.mobile-1.0a1.min.css" />
        <script type="text/javascript" src="jquerymobile/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="jquerymobile/jquery.mobile-1.0a1.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
        var A1;
        var A2;
        var A3;
        var A4;
        var A5;
    function checkQ1()
          {
              console.log( "ready One!" );
              if(($('#Q1').val()) == "Sacramento"){
                  $('#Q1Report').html("Correct");
                  $('#Q1Report').css("color","green");
              }
              else if (($('#Q1').val()) == "sacramento"){
                  $('#Q1Report').html("Correct");
                  $('#Q1Report').css("color","green");
              }
              else{
                  $('#Q1Report').html("Incorrect");
                  $('#Q1Report').css("color","red");
              }
          }
    function checkQ2()
          {
              if(($('#Q2').val()) == "Jerry Brown"){
                  $('#Q2Report').html("Correct");
                  $('#Q2Report').css("color","green");
              }
              else{
                  $('#Q2Report').html("Incorrect");
                  $('#Q2Report').css("color","red");
              }
          }
    function checkQ3()
          {
              var oRadio;
              oRadio = document.forms[0].elements['Q3'];
 
               for(var i = 0; i < oRadio.length; i++)
               {
                  if(oRadio[i].checked)
                  {
                      
                      A3 = oRadio[i].value;
                     if(oRadio[i].value == "E")
                    {   
                        $('#Q3EReport').html("Correct");
                        $('#Q3EReport').css("color","green");
                    }
                    else{
                        var report = oRadio[i].value;
                        $('#Q3' + report + 'Report').html("Incorrect");
                        $('#Q3' + report + 'Report').css("color","red");
                    }
                  }
               }
          }
          function checkQ4()
          {
              var oCheck;
              oCheck = document.forms[0].elements['Q4'];
               for(var i = 0; i < oCheck.length; i++)
               {
                  if(oCheck[i].checked)
                  {
                     A4 = oCheck[i].value;
                     if(oCheck[i].value == "A")
                    {   
                        $('#Q4AReport').html("Correct");
                        $('#Q4AReport').css("color","green");
                    }
                    else if(oCheck[i].value == "C")
                    {   
                        $('#Q4CReport').html("Correct");
                        $('#Q4CReport').css("color","green");
                    }
                    else{
                        var report = oCheck[i].value;
                        $('#Q4' + report + 'Report').html("Incorrect");
                        $('#Q4' + report + 'Report').css("color","red");
                    }
                  }
               }
          }
        function checkQ5()
          {
              if(($('#Q5').val()) == "40"){
                  $('#Q5Report').html("Correct");
                  $('#Q5Report').css("color","green");
              }
              else{
                  $('#Q5Report').html("Incorrect");
                  $('#Q5Report').css("color","red");
              }
          }
          function ajax()
          {
              console.log( "ready 2!" ),
              jQuery.ajax({
            url: "getScore.php",
            type: "GET",
            data: "call=Times",
            success: function(msg) {
              },
            complete: function() { //optional, used for debugging purposes
                 //alert(status);
              }
         });
          }
          function ajax2()
          {
              var AA4;
              AA4 = JSON.stringify(A4);
              A1= $('#Q1').val();
              A2 = $('#Q2').val();
              A5 = $('#Q5').val();
              console.log( "ready 3!" ),
              jQuery.ajax({
            url: "getScore.php",
            type: "GET",
            data: {'call':'getScore', 'Q1': A1, 
                'Q2': A2,  'Q31': A3, 
                'Q41': AA4,  'Q5': A5 },
            success: function(q4) {
 
              },
            success: function(msg) {
              },
            complete: function() { //optional, used for debugging purposes
                 //alert(status);
              }
         });
          }
          </script>
        <script>
    

      $(document).ready(function() {
            $(".go-button").click(function(){
                console.log( "ready One!" ),
                    checkQ1(),
                    checkQ2(),
                    checkQ3(),
                    checkQ4(),
                    checkQ5();
                    ajax(),
                    ajax2();
            });
      });
        
</script>
    </head>
    <body>
        <div id ="resultsTable1"> </div>
        <div>
        <header>

              <h1>Quiz!</h1>
            </header>
            <div>
                <form method="POST">
                    <div>1.What is the capital of California? 
                    <input type="text" name="Q1" id="Q1"/> <span id="Q1Report"></span>
                    </div>
                    <div>
                        2. Who is the current Governer of California? </br>
                        <img id = "img" name="Q2" src="img/jb.jpg"></br>
                        <select name= "Q2" id="Q2">
                            <option>Dan Rathers</option>
                            <option>Jerry Seinfeld</option>
                            <option>Jerry Brown</option>
                            <option>Donald Trump</option>
                            <option>Batman</option>
                        </select> <span id="Q2Report"> </span>
                    </div>
                    <div>
                        3. What Q3 is the sky on a nice day?</br>
                        A.<input type="radio" id ="Q3" name="Q3" value="A"> Red <span id="Q3AReport"> </span><br>
                        B.<input type="radio" id ="Q3" name="Q3" value="B"> Orange <span id="Q3BReport"> </span><br>
                        C.<input type="radio" id ="Q3" name="Q3" value="C"> Purple <span id="Q3CReport"> </span><br>
                        D.<input type="radio" id ="Q3" name="Q3" value="D"> Mint Green <span id="Q3DReport"> </span><br>
                        E.<input type="radio" id ="Q3" name="Q3" value="E"> Blue <span id="Q3EReport"> </span><br>
                        F.<input type="radio" id ="Q3" name="Q3" value="F"> Black <span id="Q3FReport"> </span><br>
                    </div>
                    <div>
                        4. Which of these options are true?</br>
                        A. <input type="checkbox" id ="Q4" name="Q4" value="A"> I attend CSUMB <span id="Q4AReport"> </span><br>
                        B. <input type="checkbox" id ="Q4" name="Q4" value="B"> I am a bird <span id="Q4BReport"> </span><br>
                        C. <input type="checkbox" id ="Q4" name="Q4" value="C"> Monte is cool <span id="Q4CReport"> </span><br>
                        D. <input type="checkbox" id ="Q4" name="Q4" value="D"> A Lobster is a type of cat <span id="Q4DReport"> </span><br>
                        
                    </div>
                    <div>
                        5. Refer to the image below: <br>
                        <img src="img/squares.jpg"><br>
                        <input type="number" name = "Q5" id="Q5">
                        <span id="Q5Report"> </span>
                    </div>
                    <div>
                        <a class="go-button" href="#">Go</a>
                    </div>
                    
                    
                </form>
              
            </div>
        
            <footer>
            </footer>
        </div>
    </body>
</html>