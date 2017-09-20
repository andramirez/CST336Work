<!DOCTYPE html>
<html>
    <head>
        
        <?php
        $pageName = "Home: ";
        include "header.php"; 
        include "functions2.php";
        
        echo '<link rel="stylesheet" type="text/css" href="main.css">';
        ?>
        
        
    </head>
    <body>
        <?php

        #Same Color can not occur between colors next to each other
        #input the word
        #each letter is a table

        #addCell
            #isNumber
            #isConsonant
            #isVowel
            #print table
                #print row
                #print Cell
                
        function addLEDCell($text) {
            
        
            $text = strtoupper($text);
            //Get the length of the string
            $textLen = strlen($text);
            //Main text processing loop
            for ($p = 0; $p < $textLen; $p++){
                $char = $text[$p];
                
                if(isVowelConNum($char) == true){
                    printChar($char);
                }
                else{
                    echo "This is not a letter or number";
                    break;
                }
            }
         echo "<div id = 'mame'></div>";   

         echo "<div id = 'mame'></div>";   
        }
        
        
        function isVowelConNum($char){
            if ($char == 'A'){
                return true;
            }
            
            else if ($char == 'E'){
                return true;
            }
              
            else if ($char == 'I'){
                return true;
            }
            
            else if ($char == 'O'){
                return true;
            }
            else if ($char == 'U'){
                return true;
            }
            else if ($char == 'B'){
                return true;
            }
            
            else if ($char == 'C'){
                return true;
            }
              
            else if ($char == 'D'){
                return true;
            }
            
            else if ($char == 'F'){
                return true;
            }
            
            else if ($char == 'G'){
                return true;
            }
                
            else if ($char == 'H'){
                return true;
            }
            
            else if ($char == 'J'){
                return true;
            }
              
            else if ($char == 'K'){
                return true;
            }
            
            else if ($char == 'L'){
                return true;
            }
            else if ($char == 'M'){
                return true;
            }
                
            else if ($char == 'N'){
                return true;
            }
            
            else if ($char == 'P'){
                return true;
            }
              
            else if ($char == 'Q'){
                return true;
            }
            
            else if ($char == 'R'){
                return true;
            }
            else if ($char == 'S'){
                return true;
            }
                
            else if ($char == 'T'){
                return true;
            }
            
            else if ($char == 'V'){
                return true;
            }
              
            else if ($char == 'W'){
                return true;
            }
            
            else if ($char == 'X'){
                return true;
            }
            else if ($char == 'Y'){
                return true;
            }
            
            else if ($char == 'Z'){
                return true;
            }
            else if ($char == '0'){
                return true;
            }
              
            else if ($char == '1'){
                return true;
            }
            
            else if ($char == '2'){
                return true;
            }
            else if ($char == '3'){
                return true;
            }
                
            else if ($char == '4'){
                return true;
            }
            
            else if ($char == '5'){
                return true;
            }
              
            else if ($char == '6'){
                return true;
            }
            
            else if ($char == '7'){
                return true;
            }
            else if ($char == '8'){
                return true;
            }
            
            else if ($char == '9'){
                return true;
            }
            else{
                return false;
            }
        }
        
        
        function genColor(){
            return rand(0x000000, 0xFFFFFF);
        }

        
        function colorNoColor($cell, $color2, $bColor1){
            if ($cell == 1){
                return $color2;
            }
            else{
                return $bColor1;
            }
        }
        function printRow($c1, $c2, $c3, $c4, $c5, $c6, $c7, $color1, $bColor){
            
            return
                "<td bgcolor = #" . colorNoColor($c1, $color1, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor($c2, $color1, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor($c3, $color1, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor($c4, $color1, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor($c5, $color1, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor($c6, $color1, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor($c7, $color1, $bColor) . "></td>
            </tr>";


        }
        
        #prints out LED Letter
        function printChar($char){

            $color = genColor();
                        //making background color
            $backColor = FFFFFF;
            
            //making sure the background color is not the same as the letter color
            if ($color == $backColor)
            {
                $color = genColor();
            }
            switch  ($char){
                case "A";
                echo
                "<table>"
                    .printRow(0,0,0,1,0,0,0, $color, $backColor) 
                    .printRow(0,0,1,0,1,0,0, $color, $backColor)
                    .printRow(0,1,0,0,0,1,0, $color, $backColor)
                    .printRow(0,1,0,0,0,1,0, $color, $backColor)
                    .printRow(0,1,1,1,1,1,0, $color, $backColor)
                    .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    .printRow(1,0,0,0,0,0,1, $color, $backColor)
                ."</table>";
                break;
                case "B";
                 echo
                "<table>"
                   .printRow(1,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "C";
                echo
                "<table>"
                   .printRow(0,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(0,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "D";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,1,0, $color, $backColor)
                   .printRow(1,1,1,1,1,0,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "E";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "F";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "G";
                echo
                "<table>"
                   .printRow(0,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "H";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "I";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "J";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(1,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,1,1,0,0,0,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "K";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,1,0, $color, $backColor)
                   .printRow(1,0,0,0,1,0,0, $color, $backColor)
                   .printRow(1,0,0,1,0,0,0, $color, $backColor)
                   .printRow(1,1,1,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,1,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,1,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "L";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "M";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,0,0,0,1,1, $color, $backColor)
                   .printRow(1,0,1,0,1,0,1, $color, $backColor)
                   .printRow(1,0,0,1,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "N";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,1,0,0,0,1, $color, $backColor)
                   .printRow(1,0,1,1,0,0,1, $color, $backColor)
                   .printRow(1,0,0,1,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,1,0,1, $color, $backColor)
                   .printRow(1,0,0,0,1,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "O";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "P";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "Q";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,1,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,0,1,0,0, $color, $backColor)
                   .printRow(0,0,0,0,0,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "R";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,1,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,1,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "S";
                echo
                "<table>"
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "T";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "U";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "V";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,0,0,0,1,1, $color, $backColor)
                   .printRow(0,1,0,0,0,1,0, $color, $backColor)
                   .printRow(0,1,1,0,1,1,0, $color, $backColor)
                   .printRow(0,0,1,0,1,0,0, $color, $backColor)
                   .printRow(0,0,1,0,1,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "W";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,1,0,0,1, $color, $backColor)
                   .printRow(1,0,1,0,1,0,1, $color, $backColor)
                   .printRow(1,0,1,0,1,0,1, $color, $backColor)
                   .printRow(1,1,0,0,0,1,1, $color, $backColor)
                   .printRow(1,1,0,0,0,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "X";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,0,0,0,1,1, $color, $backColor)
                   .printRow(0,1,1,0,1,1,0, $color, $backColor)
                   .printRow(0,0,1,1,1,0,0, $color, $backColor)
                   .printRow(0,1,1,0,1,1,0, $color, $backColor)
                   .printRow(1,1,0,0,0,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "Y";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,1,0,0,0,1,0, $color, $backColor)
                   .printRow(0,1,0,0,0,1,0, $color, $backColor)
                   .printRow(0,0,1,1,1,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "Z";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,1,0, $color, $backColor)
                   .printRow(0,0,0,0,1,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,1,0,0,0,0, $color, $backColor)
                   .printRow(0,1,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "0";
                echo
                "<table>"
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "1";
                echo
                "<table>"
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,1,1,0,0,0, $color, $backColor)
                   .printRow(0,1,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "2";
                echo
                "<table>"
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,1,0, $color, $backColor)
                   .printRow(0,0,0,0,1,0,0, $color, $backColor)
                   .printRow(0,0,0,1,0,0,0, $color, $backColor)
                   .printRow(0,0,1,0,0,0,0, $color, $backColor)
                   .printRow(0,1,0,0,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "3";
                echo
                "<table>"
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,1,1,1,1,0, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "4";
                echo
                "<table>"
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                    ."</table>"; 
                    reak;
                case "5";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "6";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                    ."</table>"; 
                    break;
                case "7";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,1,1, $color, $backColor)
                   .printRow(0,0,0,0,1,1,0, $color, $backColor)
                   .printRow(0,0,0,1,1,0,0, $color, $backColor)
                   .printRow(0,0,1,1,0,0,0, $color, $backColor)
                   .printRow(0,1,1,0,0,0,0, $color, $backColor)
                   .printRow(1,1,0,0,0,0,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "8";
                echo
                "<table>"
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,1,1,1,1,1,0, $color, $backColor)
                    ."</table>"; 
                    break;
                case "9";
                echo
                "<table>"
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(0,0,0,0,0,0,1, $color, $backColor)
                   .printRow(1,1,1,1,1,1,0, $color, $backColor)
                    ."</table>"; 
                    break;
            }
        }
        

        echo 
        "<table class = 'mainT'>
            <tr class = 'rows'>
                <td>" . addLEDCell("Three") . "</td>
            </tr>
            <tr class = 'rows'>
                <td>" . addLEDCell2("blind") . "</td>
            </tr>
            <tr class = 'rows'>
                <td>" . addLEDCell("mice") . "</td>
            </tr>
        </table>";
  



        ?>


    </body>
</html>
