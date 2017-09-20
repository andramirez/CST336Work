<?php
//page to delete gem of choice
session_start();
include 'includes/db_connect.php';

$conn = getDatabaseConnection();

$id = $_POST['MineralID'];
$_SESSION['MineralID']=$_POST['MineralID'];
$_SESSION['Description'] = $_POST['GemDescription'];
$_SESSION['GemName']=$_POST['GemName'];
$sql = "SELECT * FROM Gemstones WHERE MineralID ='" .  $id . "'";
$gems = getDataBySQL($sql, $conn);
foreach($gems as $gem)
{
//table that displays all gem's info and option to delete
echo "<html>
    <head>
        <title>Delete ".$_SESSION['GemName']."</title>
        <link rel = 'stylesheet' href='css/main.css'>
    </head>
    
    <body>
        <div class= 'bigContainer3'>";
        include 'includes/navigation.php';
        echo"
            <h3>Delete ".$_SESSION['GemName']."</h3>
            <form method='POST' action = 'process_delete.php'>
                <span type='hidden' name= 'MineralID' value = '{$gem['MineralID']}'/>
                <table border=1 class='table2' style='color:white; background-color:#047d9a'>
                    <tr>
                        <td width= 150px height=50px align=center>Gem Name:</td>
                        <td><span type='text' name = 'GemName' size = '45'>{$gem['GemName']}</span></td>
                    </tr>
                    <tr>
                        <td height=50px align=center>Mineral Class:</td>";
                        $sql2 = "SELECT ClassName FROM MineralClass WHERE MineralClassID ='" .  $gem['MineralClassID']  . "'";
                        $mineralClasses = getDataBySQL($sql2, $dbConn);
                        foreach($mineralClasses as $mineralClass){
                      echo "<td><span type = 'text' name = 'ClassName' size='30' >" . $mineralClass['ClassName'] . "</span></td>"; 
                        }
                    echo "</tr>
                    <tr>
                       <td align=center>Gemstone Description</td>
                        <td>";
                        $sql2 = "SELECT * FROM Description WHERE MineralID ='" . $id . "'";
                        $gems2 = getDataBySQL($sql2, $conn);
                        foreach($gems2 as $gem2)
                        {
                        echo "<p name = 'GemDescription' rows ='10'
                        cols = '45'>{$gem2['GemDescription']}</p>";
                        }
                    echo "</td></tr>";
                        echo "<td height=50px align=center>Gem Price Range:</td>
                        <td><span type='text' name = 'GemPrice' size = '5'>\${$gem['LowPrice']} - \$ {$gem['HighPrice']}</span></td>
                    </tr>
                </table>
                <br/>
                <input class = 'fsSubmitButton' type='submit' value='Delete Product'/>

            </form>
        </div>
    </body>
</html>";
}
?>