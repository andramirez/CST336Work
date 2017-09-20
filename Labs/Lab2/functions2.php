<head>
    <?php echo '<link rel="stylesheet" type="text/css" href="main.css">'; 
    
    ?>
    
</head>

<body>
    <?php
    
    
    
        function addLEDCell2($text) {
            
        
            $text = strtoupper($text);
            //Get the length of the string
            $textLen = strlen($text);
            //Main text processing loop
            for ($p = 0; $p < $textLen; $p++){
                $char = $text[$p];
                
                if(isVowelConNum2($char) == true){
                    printChar2($char);
                }
                else{
                    echo "This is not a letter or number";
                    break;
                }
            }
            echo "<div id = 'mame'></div>";   

            echo "<div id = 'mame'></div>";   
         }
         
         
        function genColor2(){
            return rand(0x000000, 0xFFFFFF);
        }
    
         
         
        function isVowelConNum2($char){
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
        
        function colorNoColor2($cell, $bColor1){
            if ($cell == 1){
                $color = genColor2();
                if ($color == $bColor1)
                {
                    $color = genColor2();
                }
                return $color;
            }
            else{
                return $bColor1;
            }
        }
        
        function printRow2($c1, $c2, $c3, $c4, $c5, $c6, $c7, $bColor){
            
            return
                "<td bgcolor = #" . colorNoColor2($c1, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor2($c2, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor2($c3, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor2($c4, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor2($c5, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor2($c6, $bColor) . "></td>
                <td bgcolor = #" . colorNoColor2($c7, $bColor) . "></td>
            </tr>";
        }
        
        
         function printChar2($char){
             $color2 = genColor2();

            $backColor = FFFFFF;

            switch  ($char){
                case "A";
                echo
                "<table>"
                    .printRow2(0,0,0,1,0,0,0, $backColor) 
                    .printRow2(0,0,1,0,1,0,0, $backColor)
                    .printRow2(0,1,0,0,0,1,0, $backColor)
                    .printRow2(0,1,0,0,0,1,0, $backColor)
                    .printRow2(0,1,1,1,1,1,0, $backColor)
                    .printRow2(1,0,0,0,0,0,1, $backColor)
                    .printRow2(1,0,0,0,0,0,1, $backColor)
                    .printRow2(1,0,0,0,0,0,1, $backColor)
                ."</table>";
                break;
                case "B";
                 echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,0, $backColor)
                    ."</table>"; 
                    break;
                case "C";
                echo
                "<table>"
                   .printRow2(0,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(0,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "D";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,0,0, $backColor)
                   .printRow2(1,0,0,0,0,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,1,0, $backColor)
                   .printRow2(1,1,1,1,1,0,0, $backColor)
                    ."</table>"; 
                    break;
                case "E";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "F";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                    ."</table>"; 
                    break;
                case "G";
                echo
                "<table>"
                   .printRow2(0,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "H";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                    ."</table>"; 
                    break;
                case "I";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "J";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(1,0,0,1,0,0,0, $backColor)
                   .printRow2(0,1,1,0,0,0,0, $backColor)
                    ."</table>"; 
                    break;
                case "K";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,1,0, $backColor)
                   .printRow2(1,0,0,0,1,0,0, $backColor)
                   .printRow2(1,0,0,1,0,0,0, $backColor)
                   .printRow2(1,1,1,0,0,0,0, $backColor)
                   .printRow2(1,0,0,1,0,0,0, $backColor)
                   .printRow2(1,0,0,0,1,0,0, $backColor)
                   .printRow2(1,0,0,0,0,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                    ."</table>"; 
                    break;
                case "L";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "M";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,0,0,0,1,1, $backColor)
                   .printRow2(1,0,1,0,1,0,1, $backColor)
                   .printRow2(1,0,0,1,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                    ."</table>"; 
                    break;
                case "N";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,0,0,0,0,1, $backColor)
                   .printRow2(1,0,1,0,0,0,1, $backColor)
                   .printRow2(1,0,1,1,0,0,1, $backColor)
                   .printRow2(1,0,0,1,0,0,1, $backColor)
                   .printRow2(1,0,0,0,1,0,1, $backColor)
                   .printRow2(1,0,0,0,1,0,1, $backColor)
                   .printRow2(1,0,0,0,0,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                    ."</table>"; 
                    break;
                case "O";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "P";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                    ."</table>"; 
                    break;
                case "Q";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,1,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,0,1,0,0, $backColor)
                   .printRow2(0,0,0,0,0,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "R";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,1,0,0,0, $backColor)
                   .printRow2(1,0,0,0,1,0,0, $backColor)
                   .printRow2(1,0,0,0,0,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                    ."</table>"; 
                    break;
                case "S";
                echo
                "<table>"
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                    ."</table>"; 
                    break;
                case "T";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                    ."</table>"; 
                    break;
                case "U";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                    ."</table>"; 
                    break;
                case "V";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,0,0,0,1,1, $backColor)
                   .printRow2(0,1,0,0,0,1,0, $backColor)
                   .printRow2(0,1,1,0,1,1,0, $backColor)
                   .printRow2(0,0,1,0,1,0,0, $backColor)
                   .printRow2(0,0,1,0,1,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                    ."</table>"; 
                    break;
                case "W";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,1,0,0,1, $backColor)
                   .printRow2(1,0,1,0,1,0,1, $backColor)
                   .printRow2(1,0,1,0,1,0,1, $backColor)
                   .printRow2(1,1,0,0,0,1,1, $backColor)
                   .printRow2(1,1,0,0,0,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                    ."</table>"; 
                    break;
                case "X";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,0,0,0,1,1, $backColor)
                   .printRow2(0,1,1,0,1,1,0, $backColor)
                   .printRow2(0,0,1,1,1,0,0, $backColor)
                   .printRow2(0,1,1,0,1,1,0, $backColor)
                   .printRow2(1,1,0,0,0,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                    ."</table>"; 
                    break;
                case "Y";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,1,0,0,0,1,0, $backColor)
                   .printRow2(0,1,0,0,0,1,0, $backColor)
                   .printRow2(0,0,1,1,1,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                    ."</table>"; 
                    break;
                case "Z";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,1,0, $backColor)
                   .printRow2(0,0,0,0,1,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,1,0,0,0,0, $backColor)
                   .printRow2(0,1,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "0";
                echo
                "<table>"
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                    ."</table>"; 
                    break;
                case "1";
                echo
                "<table>"
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,1,1,0,0,0, $backColor)
                   .printRow2(0,1,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "2";
                echo
                "<table>"
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,1,0, $backColor)
                   .printRow2(0,0,0,0,1,0,0, $backColor)
                   .printRow2(0,0,0,1,0,0,0, $backColor)
                   .printRow2(0,0,1,0,0,0,0, $backColor)
                   .printRow2(0,1,0,0,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "3";
                echo
                "<table>"
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,1,1,1,1,0, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                    ."</table>"; 
                    break;
                case "4";
                echo
                "<table>"
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                    ."</table>"; 
                    reak;
                case "5";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "6";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                    ."</table>"; 
                    break;
                case "7";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,1,1, $backColor)
                   .printRow2(0,0,0,0,1,1,0, $backColor)
                   .printRow2(0,0,0,1,1,0,0, $backColor)
                   .printRow2(0,0,1,1,0,0,0, $backColor)
                   .printRow2(0,1,1,0,0,0,0, $backColor)
                   .printRow2(1,1,0,0,0,0,0, $backColor)
                   .printRow2(1,0,0,0,0,0,0, $backColor)
                    ."</table>"; 
                    break;
                case "8";
                echo
                "<table>"
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(0,1,1,1,1,1,0, $backColor)
                    ."</table>"; 
                    break;
                case "9";
                echo
                "<table>"
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(0,0,0,0,0,0,1, $backColor)
                   .printRow2(1,1,1,1,1,1,0, $backColor)
                    ."</table>"; 
                    break;
            }
        }


?>
</body>
