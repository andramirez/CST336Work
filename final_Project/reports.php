<?php
//reports page
include 'includes/db_connect.php';
$con = getDatabaseConnection();

//report of the Total of Highest Priced of All Gems
function MaxTotalHighPrice($con){
    echo "<table border='1' style='background-color:#0389A6'>";
 
        // our table heading
        echo "<tr>";
            echo "<th colspan = '5'>Report of the Total of Highest Priced of All Gems";
        echo "</tr>";
        echo "<tr>";
            echo "<th colspan = '5'>SQL Statement: SELECT SUM(HighPrice) FROM Gemstones</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th class='textAlignLeft'>Total</th>";
        
        $query = "SELECT SUM(HighPrice) FROM Gemstones";
 
        $stmt = $con->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
                echo "<td>{$row['SUM(HighPrice)']}</td>";
            echo "</tr>";
    }
    echo "</table>";
}
//Report of Most Expensive Gem and Least Expensive Gem
function LeastMostExpensive($con){
    echo "<table border='1' style='background-color:#0389A6'>";
 
        // our table heading
        echo "<tr>";
            echo "<th colspan = '5'>Report of Most Expensive Gem and Least Expensive Gem</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th colspan = '5'>SQL Statement: SELECT * FROM Gemstones WHERE LowPrice in (SELECT MIN(LowPrice) FROM Gemstones), <br/>
            SELECT * FROM Gemstones WHERE HighPrice in (SELECT MAX(HighPrice) FROM Gemstones)</th>";
        echo "</tr>";
        echo "<tr>
        <td></td>
        <th>Gem Name</th>
        <th>Price Range (Varies on Gem Quality)</th></tr>";
        
        $query = "SELECT * FROM Gemstones WHERE LowPrice in (SELECT MIN(LowPrice) FROM Gemstones)";
        $query2 = "SELECT * FROM Gemstones WHERE HighPrice in (SELECT MAX(HighPrice) FROM Gemstones)";
 
        $stmt = $con->prepare($query);
        $stmt->execute();
        echo "<tr>";
        echo "<th rowspan='3'>Lowest Priced</th>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo"<tr>";
                echo "<td align='center'>{$row['GemName']}</td>";
                echo "<td align='center'>$".$row['LowPrice']." -$". $row['HighPrice']."</td>";
                echo "</tr>";
    }
    echo "</tr>";
    $stmt = $con->prepare($query2);
        $stmt->execute();
        echo "<tr>";
        echo "<th>Highest Priced</th>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
            
                echo "<td align='center'>{$row['GemName']}</td>";
                echo "<td align='center'>$".$row['LowPrice']." -$". $row['HighPrice']."</td><br/>";
            
    }
    echo "</tr>";
    echo "</table><br/>";
}
//Report of lowest and highest Hardness avgerage Hardness
function Hardness($con){
    echo "<table border='1' style='background-color:#0389A6'>";
 
        // our table heading
        echo "<tr>";
            echo "<th colspan = '5'>Report of lowest and highest Hardness avgerage Hardness</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th colspan = '5'>SQL Statement: SELECT * FROM Gemstones WHERE Hardness in (SELECT MIN(Hardness) FROM Gemstones)</th>";
        echo "</tr>";
        echo "</tr>";
        echo "<tr>
        <td></td>
        <th>Gem Name</th>
        <th>Hardness</th></tr>";
        echo "<tr>";
            echo "<th class='textAlignLeft'>Least Amount of Hardness</th>";
        
        $query = "SELECT * FROM Gemstones WHERE Hardness in (SELECT MIN(Hardness) FROM Gemstones)";
        $query2 = "SELECT * FROM Gemstones WHERE Hardness in (SELECT MAX(Hardness) FROM Gemstones)";
        $query3 = "SELECT AVG(Hardness) FROM Gemstones";
 
        $stmt = $con->prepare($query);
        $stmt->execute();
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
                echo "<td>{$row['GemName']}</td>";
                echo "<td>{$row['Hardness']}</td>";
            echo "</tr>";
    }
    echo "<tr>";
            echo "<th class='textAlignLeft'>Greatest Amount of Hardness</th>";
    $stmt = $con->prepare($query2);
        $stmt->execute();
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
                echo "<td>{$row['GemName']}</td>";
                echo "<td>{$row['Hardness']}</td>";
            echo "</tr>";
    }
    echo "<tr>";
            echo "<th class='textAlignLeft'>Average Amount of Hardness</th>";
    $stmt = $con->prepare($query3);
        $stmt->execute();
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
                echo "<td></td>";
                echo "<td>{$row['AVG(Hardness)']}</td>";
            echo "</tr>";
    }
    echo "</table>";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reports</title>
        <link rel = 'stylesheet' href='css/main.css'>
    </head>
    
    <body >
    <div class="back">
    <div class= "bigContainer3" align='center'>
    
        <?php
    include 'includes/navigation.php';
    ?>
    <h2>Reports</h2>
        <?php
//calls report functions
echo MaxTotalHighPrice($con);
echo LeastMostExpensive($con);
echo Hardness($con);
?>
    </div>
    </body>
</html>


