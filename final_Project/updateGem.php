<?php
//updates gem info
session_start();
include 'includes/db_connect.php';

$conn = getDatabaseConnection();

$id = $_POST['MineralID'];
$sql = "SELECT * FROM Gemstones WHERE MineralID ='" .  $id . "'";
$gems = getDataBySQL($sql, $conn);
foreach($gems as $gem)
{

echo "<html>
    <head>
        <title>Update " . $gem['GemName'] . "</title>
        <link rel = 'stylesheet' href='css/main.css'>
    </head>
    
    <body>
    <div class='bigContainer3'>";
include 'includes/navigation.php';
            echo"<h3>Update Gemstone " . $gem['GemName'] . "</h3>
            <form method='POST' action = 'process_update.php'>
                <input type='hidden' name= 'MineralID' value ='" .  $gem['MineralID'] . "'/>
                <table>
                <div>
                    <tr>
                        <th>Gemstone Name</th>
                        <td><input type='text' name = 'GemName' size = '45' value = '" .$gem['GemName'] . "'/></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <th>Mineral Class:</th>";
                        $sql2 = "SELECT ClassName FROM MineralClass WHERE MineralClassID ='" .  $gem['MineralClassID']  . "'";
                        $mineralClasses = getDataBySQL($sql2, $dbConn);
                        echo "<td><select name = 'MineralClassID'>";
                        foreach($mineralClasses as $mineralClass){
                      echo "<option value =" . $gem['MineralClassID'].">" . $mineralClass['ClassName'] . "</option>"; 
                        }
                        $sql3 = "SELECT * FROM MineralClass";
                        $mineralClasses2 = getDataBySQL($sql3, $dbConn);
                        foreach($mineralClasses2 as $mineralClass2){
                      echo "<option value =" . $mineralClass2['MineralClassID'].">" . $mineralClass2['ClassName'] . "</option>"; 
                        }
                        echo "</select></td>
                        <tr>
                        <th>Hardness(1-10)</th>
                        <td><input type='text' name = 'Hardness' size = '45' value = '" .$gem['Hardness'] . "'/></td>
                    </tr>
                    <tr>
                        <th>Luster</th>
                        <td><input type='text' name = 'Luster' size = '45' value = '" .$gem['Luster'] . "'/></td>
                    </tr>
                    <tr>
                        <th>Price Range</th>
                        <td>$<input type='text' name = 'LowPrice' size = '45' value = '" .$gem['LowPrice'] . "'/> - 
                        $<input type='text' name = 'HighPrice' size = '45' value = '" .$gem['HighPrice'] . "'/></td>
                    </tr>
                    </tr></div>
                    <tr>
                        <th>Gemstone Description</th>
                        <td>";
                        $sql2 = "SELECT * FROM Description WHERE MineralID ='" . $id . "'";
                        $gems2 = getDataBySQL($sql2, $conn);
                        
                        foreach($gems2 as $gem2)
                        {
                        echo "<textarea name = 'GemDescription' rows ='10'
                        cols = '45'>{$gem2['GemDescription']}</textarea>";
                        }
                        
                    echo "</td></tr>";

                    echo "<tr>
                        <td><input class ='fsSubmitButton' type='submit' value='Update Gemstone'/></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>";
}
?>