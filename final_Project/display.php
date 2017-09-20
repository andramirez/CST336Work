<?php
//page that display's gem's description and image
echo "<link rel='stylesheet' type='text/css' href='css/main.css' />";

session_start();
include 'includes/db_connect.php';
echo "<div align='center' class='bigContainer4'>";
include 'includes/navigation.php';
$conn = getDatabaseConnection();


// get the product id and name
$MineralID = isset($_GET['id']) ? $_GET['id'] : "";
$GemName = isset($_GET['name']) ? $_GET['name'] : "";
 
$sql = "SELECT * FROM Description WHERE MineralID =" . $MineralID;
$dess = getDataBySQL($sql, $conn);
echo "<table style='background-color:#F8F8F8' width=650 height=400px class='table-hover table-responsive table-bordered'>";
echo "<tr height='50px'>";
            
            echo "<td colspan='2' align='center'>".$GemName."</td>";
        echo "</tr>";
echo "<tr>";
$sql2 = "SELECT * FROM upload WHERE MineralID = '".$MineralID."'"; //calls database table with image
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $results = $stmt;
    if($results)
    {
        foreach($results as $row)
        {
    
            echo "<td align='center' colspan='2'><img width = '300' src='data:image;base64,".$row['Image']."'></td>"; //displaying image fron database

        }
    }
    echo "</tr>";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $Descriptions = $stmt;
    echo "<tr height='200px'>";
    foreach ($Descriptions as $des){
        echo "<td colspan='4' align='center'>".$des['GemDescription']."</td>";
    }
    echo "</tr>";
    echo "<tr height='40px'>";
    echo "<td>Mineral Class: </td>";
    $sql2 = "SELECT * FROM Gemstones WHERE MineralID ='" .  $MineralID  . "'"; //retrieving gem info
            $gems = getDataBySQL($sql2, $conn);
            foreach($gems as $gem){
    $sql2 = "SELECT * FROM MineralClass WHERE MineralClassID ='" .  $gem['MineralClassID']  . "'"; //getting mineral id
            $mineralClasses = getDataBySQL($sql2, $conn);
            foreach($mineralClasses as $mineralClass){
          echo "<td align='center'>" . $mineralClass['ClassName'] . "</td>";
    echo "</tr>";
    
    echo "<tr height='40px'>";
    echo "<td>Hardness</td>";
          echo "<td align='center'>" . $gem['Hardness'] . "</td>";
     echo "</tr>";
    echo "<tr height='40px'>";
    echo "<td>Luster</td>";
    echo "<td align='center'>" . $gem['Luster'] . "</td>";
     echo "</tr>";
    echo "<tr height='40px'>";
    echo "<td>Price Range</td>";
    echo "<td align='center'>$" . $gem['LowPrice'] . " - $".$gem['HighPrice']."</td>";
     echo "</tr>";
}
}
echo "</table></div>
</div>";
?>