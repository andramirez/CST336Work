<?php
//page that processes the gem info updates
include 'includes/db_connect.php';
$conn = getDatabaseConnection();

$MineralID = $_POST['MineralID'];
$GemName = $_POST['GemName'];
$GemDescription = $_POST['GemDescription'];
$MineralClassID = $_POST['MineralClassID'];
$Hardness = $_POST['Hardness'];
$Luster = $_POST['Luster'];
$LowPrice = $_POST['LowPrice'];
$HighPrice = $_POST['HighPrice'];

$sql1 = "UPDATE Gemstones SET GemName='" .$GemName."', MineralClassID= '".$MineralClassID."',
Hardness='" .$Hardness."', Luster= '".$Luster."', 
HighPrice= '".$HighPrice."', LowPrice='" .$LowPrice."' WHERE MineralID = '".$MineralID."'";//updates info
$sql2 = "UPDATE Description SET GemDescription = '".$GemDescription."' WHERE MineralID = '".$MineralID."'"; //updates descriptions




echo "<html>
    <head>
        <title>Update $GemName</title>
        <link rel='stylesheet' type='text/css' href='css/main.css'/>
    </head>
    <body>
        <div id = 'content'>";
            if((getDataBySQL($sql1, $conn)) && (getDataBySQL($sql2, $conn)))
            {
                echo "<p>Gem Information Updated Successfully!</p>"; //echoes when update is processed
            }
            
            echo "<form action = 'gems.php'>
              <button class ='fsSubmitButton' onclick='window.location.href='gems.php''>Back to Gems</button>
            </form>
        </div>
    </body>
</html>";
?>


