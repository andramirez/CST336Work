<?php
//deletes gem from database
session_start();
include 'includes/db_connect.php';
$conn = getDatabaseConnection();

$MineralID = $_SESSION['MineralID'];
$GemName = $_SESSION['GemName'];
$GemDescription = $_SESSION['Description'];



$sql = "DELETE FROM Gemstones WHERE MineralID = '".$MineralID."'";//deletes gwm info
$sql2 = "DELETE FROM Description WHERE MineralID = '".$MineralID."'"; //deletes gem description
$sql3 = "DELETE FROM upload WHERE MineralID = '".$MineralID."'"; 



echo "<html>
    <head>
        <title>Delete ". $GemName."</title>
        <link rel='stylesheet' type='text/css' href='css/main.css'/>
    </head>
    <body>
        <div id = 'content'>";
            if(getDataBySQL($sql, $conn)){
                getDataBySQL($sql2, $conn);
                getDataBySQL($sql3, $conn);
                echo "<p>Gem Information Deleted Successfully!</p>";
            }
            echo "<form action = 'gems.php'>
              <button class='fsSubmitButton' onclick='window.location.href='gems.php'>Back to Gems</button>
            </form>
        </div>
    </body>
</html>";
?>


