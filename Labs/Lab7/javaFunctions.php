        <script>
            var d= new Date();
            var startTime= d.getTime();
            function youFoundIt(){
                document.getElementById("feedback").innerHTML="Awesome You Found it!!!";
                document.getElementById("feedback").style.color="green";
                document.getElementById("letterToFind").style.backgroundColor="yellow";
                d= new Date();
                var endTime= d.getTime();
                var timeTaken=(endTime - startTime)/ 1000; ;
                document.getElementById("timeTaken").innerHTML="You Took " + timeTaken + " seconds";
                if(timeTaken < 4)
                {
                   document.getElementById("score").innerHTML="OUTSTANDING!";
                   document.getElementById("score").style.color="green";
                }
                else if(timeTaken < 7)
                {
                   document.getElementById("score").innerHTML="Very Good!";
                   document.getElementById("score").style.color="blue";
                }
                else if(timeTaken > 7)
                {
                   document.getElementById("score").innerHTML="Not So Good";
                   document.getElementById("score").style.color="red";
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
        
        
