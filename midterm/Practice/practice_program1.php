<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <title> </title>
        <?php
        function choose_letter($list, $omitL)
        {
            $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ';
            $QuantidadeCaracteres = strlen($Caracteres);
            $QuantidadeCaracteres--;
            $letter = substr($Caracteres,rand(0,$QuantidadeCaracteres),1);
            if($letter == $omitL)
            {
                $letter = substr($Caracteres,rand(0,$QuantidadeCaracteres),1);
            }
            array_push($list, $letter);
            echo $letter;
        }
        function letterColor($letter){
            if($letter == "A" or $letter == "B" or $letter == "C" or $letter == "D" or $letter == "E" or $letter == "F" or $letter == "G"){
            echo "<td class=\"red\" align=\"center\">" . $letter . "</td>";
            }
            if($letter == "H" or $letter == "I" or $letter == "J" or $letter == "K" or $letter == "L" or $letter == "M" or $letter == "N" or $letter == "O"){
            echo "<td class=\"blue\" align=\"center\">" . $letter . "</td>";
            }
            if($letter == "P" or $letter == "Q" or $letter == "R" or $letter == "S" or $letter == "T" or $letter == "U" or $letter == "V" or $letter == "W" or $letter == "X" or $letter == "Y" or $letter == "Z"){
            echo "<td class=\"green\" align=\"center\">" . $letter . "</td>";
            }
        }
        ?>
    </head>
    <body>
        <form action="practice_program1.php" method="POST">
            Select a Table Size: <select name= "table">
                <option></option>
                <option>6x6</option>
                <option>7x7</option>
                <option>8x8</option>
                <option>9x9</option>
                <option>10x10</option>
            </select>
            Select a Letter for the Table to Find: <select name= "letter">
                <option></option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
                <option>G</option>
                <option>H</option>
                <option>I</option>
                <option>J</option>
                <option>K</option>
                <option>L</option>
                <option>M</option>
                <option>N</option>
                <option>O</option>
                <option>P</option>
                <option>Q</option>
                <option>R</option>
                <option>S</option>
                <option>T</option>
                <option>U</option>
                <option>V</option>
                <option>W</option>
                <option>X</option>
                <option>Y</option>
                <option>Z</option>
            </select>
            Select a Letter for the Table to Omit: <select name= "o_letter">
                <option></option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
                <option>G</option>
                <option>H</option>
                <option>I</option>
                <option>J</option>
                <option>K</option>
                <option>L</option>
                <option>M</option>
                <option>N</option>
                <option>O</option>
                <option>P</option>
                <option>Q</option>
                <option>R</option>
                <option>S</option>
                <option>T</option>
                <option>U</option>
                <option>V</option>
                <option>W</option>
                <option>X</option>
                <option>Y</option>
                <option>Z</option>
            </select>
            <input type= "submit" value="create table">
        </form>
        <?php
        $table_size = $_POST['table'];
        $letter= $_POST['letter'];
        $omit= $_POST['o_letter'];
        $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ';
        $QuantidadeCaracteres = strlen($Caracteres);
        $QuantidadeCaracteres--;
        $letter_list=[];
        if($table_size != NULL)
        {
            echo choose_letter($letter_list, $omit);
            echo
            "<table class='table' border=\"1\">
                <tr colspan=\"10\"><td align=\"center\"><b>Find the Letter " . $letter . "</b></td align=\"center\"></tr>
                <tr colspan=\"10\"><td align=\"center\"><b>Letter to Omit " . $omit . "</b></td align=\"center\"></tr>";
                if($table_size == "6x6")
                {
                    $letter = choose_letter($letter_list, $omit);
                    echo "<tr>
                    <td class=" . letterColor($letter) .  "align=\"center\">" . $letter . "</td>
                    
                    
                    </tr>";
                }
            "</table>";
        }
        ?>
    </body>
</html>

