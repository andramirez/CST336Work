<script> 
       
       var d = new Date(); 
       var startTime = d.getTime(); //gets the time in miliseconds 
      
       
      function youFoundIt(){ 
          //alert("Congrats! You found it!"); 
           
          //document.getElementById("feedback").innerHTML = "Awesome!!! You found it!"; 
          $("#feedback").html("Awesome!!! You found it!"); 
           
          //document.getElementById("feedback").style.color = "green"; 
          $("#feedback").css("color","green"); 
           
          //document.getElementById("letterToFind").style.backgroundColor = "yellow"; 
          $("#letterToFind").css("backgroundColor","yellow"); 
          $("#letterToFind").parent().css("backgroundColor","cyan"); 
           
          d = new Date(); 
          var endTime = d.getTime(); 
        var timeTaken = (endTime - startTime) / 1000;     
       
        //alert("Time taken: " + timeTaken + " seconds"); 
        //document.getElementById("timeTaken").innerHTML  = "You took " + timeTaken + " seconds."; 
        $("#timeTaken").html("You took " + timeTaken + " seconds.");
        $("#timeTaken").parent().css("color","black");
        if(timeTaken < 4)
                {
                   $("#score").html("OUTSTANDING!");
                   $("#score").css("color","green");
                }
                else if(timeTaken < 7)
                {
                   $("#score").html("Very Good!");
                   $("#score").css("color","blue");
                }
                else if(timeTaken > 7)
                {
                   $("#score").html("Not so Good");
                   $("#score").css("color","red");
                }
         
         
        
           
      } 
       
      function formValidation() { 
           
          //check whether letterToFind == letterToOmit 
          if ($("#toFind").val() == $("#toOmit").val()) { 
              //alert("Letters must be different!"); 
              $("#feedback").html("Letters must be different!"); 
              $("#feedback").css("color","red"); 
               
              return false; 
          }  
           
      } 
       
  </script>

<?php
function displayTable(){
    if (isset($_GET['submitForm'])) {//CHECKS WHETHER THE FORM WAS SUBMITTED{
        $letterToFind = $_GET['letterToFind'];
        $letterToOmit = $_GET['letterToOmit'];
        $tableSize = $_GET['tableSize'];
        if ($letterToFind == $letterToOmit) {
            echo "error, letter to find should not be the same";
            return;
        }
        for ($i = 0; $i < $tableSize * $tableSize; $i++) {

            do {
                $randomLetter = chr(rand(65, 90));
            } while ($randomLetter == $letterToOmit || $randomLetter == $letterToFind);

            $lettersArray[] = $randomLetter;

        }
        $randomIndex = array_rand($lettersArray);
        //random number from 0 to array size
        $lettersArray[$randomIndex] = $letterToFind;
        $index = 0;
        echo "<table border = 1>";
        $find = 0;
        for ($x = 0; $x < $tableSize; $x++) {
        echo "<tr>";
        for ($y = 0; $y < $tableSize; $y++) {
            if ($lettersArray[$index] <= "G") {
                    echo "<td style='color:red'>";
                } else if ($lettersArray[$index] <= "O") {
                    echo "<td style='color:blue'>";
                } else {
                    echo "<td style='color:green'>";
                }
                //echo $lettersArray[$index++];
                if ($lettersArray[$index] == $letterToFind){
                    
                    echo "<span id='letterToFind' onclick='youFoundIt()'>"  .$letterToFind  . "</span>";
                    
                } else {
                        
                    echo $lettersArray[$index];
                    
                }
                $index++;
                
                
                echo "</td>";
            }//endFor columns
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>

