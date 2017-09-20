<?php
session_start(); //start or resume an existing session 
$username = $_SESSION['username'];
$permission = $_SESSION['permission'];

//function that displays the gemstones
function displayAllGemstones($sql, $dbConn, $permission){
    $gems = getDataBySQL($sql, $dbConn);
     //Using Form Buttons
         echo "<table align='center' style='background-color:#0389A6' class='table2 hover table-responsive table-bordered' border = '1'>";
         // table headers
        echo "<tr>";
            echo "<th align='center' style='background-color:#008594'>Gem Name</th>";
            echo "<th align='center' style='background-color:#008594'>Mineral Class</th>";
            echo "<th align='center' style='background-color:#008594'>Hardness (1-10)</th>";
            echo "<th align='center' style='background-color:#008594'>Luster</th>";
            echo "<th align='center' style='background-color:#008594'>Price Range (USD)</th>";
            //when permission is yes, user is given the option to edit or delete item
            if($permission == "yes")
            {
            echo "<th style='background-color:#008594'>Update</th>";
            echo "<th style='background-color:#008594'>Delete</th>";
            }
        echo "</tr>";
        //prints out gemstone names
        foreach ($gems as $gem) {
          echo "<tr rowspan='3'>"; 
          echo "<td align='center'><a class = 'names' href='display.php?id={$gem['MineralID']}&name={$gem['GemName']}' class='btn btn-primary'>";
            echo  $gem['GemName']; 
            echo "</a></td>"; 
            //sql to print out mineral class names for each gemstone
            $sql2 = "SELECT ClassName FROM MineralClass WHERE MineralClassID ='" .  $gem['MineralClassID']  . "'";
            $mineralClasses = getDataBySQL($sql2, $dbConn);
            foreach($mineralClasses as $mineralClass){
          echo "<td align='center'>" . $mineralClass['ClassName'] . "</td>"; 
            //prints out hardness, luster, and price range of gem
          echo "<td align='center'>" . $gem['Hardness'] . "</td>";
          echo "<td align='center'>" . $gem['Luster'] . "</td>"; 
          echo "<td align='center'>$" . $gem['LowPrice'] ." - $" .$gem['HighPrice'] . "</td>";
          //if permission is yes, update and delete buttons show up
          if($permission == "yes")
            {
              echo "<td align='center'> <form action=updateGem.php method='POST'>";
              echo "<input type='hidden' name='MineralID' value='" . $gem['MineralID'] . "'/>";
              echo "<input type='hidden' name='GemName' value='" . $gem['GemName'] . "'/>";
              $sql3 = "SELECT * FROM Description WHERE MineralID ='" .  $gem['MineralID']  . "'";
              $dess = getDataBySQL($sql3, $dbConn);
              foreach($dess as $des){
              echo "<input type='hidden' name='GemDescription' value='" . $des['GemDescription'] . "'/>";
              }
              echo "<input type='hidden' name='ClassName' value='" . $mineralClass['ClassName'] . "'/>";
              echo "<input class='fsSubmitButton' type='submit' value='Update'/></form> </td>";
              echo "<td align='center'> <form action=deleteGem.php method='POST'>";
              echo "<input type='hidden' name='MineralID' value='" . $gem['MineralID'] . "'/>";
              echo "<input type='hidden' name='GemName' value='" . $gem['GemName'] . "'/>";
              $sql3 = "SELECT * FROM Description WHERE MineralID ='" .  $gem['MineralID']  . "'";
              $dess = getDataBySQL($sql3, $dbConn);
              foreach($dess as $des){
              echo "<input type='hidden' name='GemDescription' value='" . $des['GemDescription'] . "'/>";
              }
              echo "<input class='fsSubmitButton2' type='submit' value='Delete'/></form> </td>";
            }
            }



          echo "</tr>";
        } //endForeach
        echo "</table>";
     
}

?>

