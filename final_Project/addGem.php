<?php
//Adding gemstone to datase
session_start(); //start or resume an existing session 

include 'includes/db_connect.php';
$conn = getDatabaseConnection();
//function to save image of gemstone to database
function saveImage($name, $image, $type, $size, $conn)
{
  //if connection is bad, prints out:
  if (!$conn)
  {
    echo "Please try later.";
  }
  //if connection is good, then inserts image into database
  else
  {
  
      $sql = "INSERT INTO upload (fileName, fileType, fileSize, Image)
      VALUES ('{$name}', '{$type}', '{$size}', '{$image}')";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
  }
}

//runs when the form is filled out
  if(isset($_POST['upload']))
  {

   //assigns mineral name if the new mineral class form isnt filled
    if($_POST['ClassName'] == NULL)
    {
      $mineral = $_POST['MineralClassID'];
    }
    //creates new mineral class
    else{
      $sql3 = "INSERT INTO MineralClass (ClassName, Tenacity, RockTypeID, RockTypeID2, RockTypeID3) 
            VALUES ( :ClassName, :Tenacity, :RockType1, :RockType2, :RockType3)";
            $namedParameters2 = array();
              $namedParameters2[':ClassName'] = $_POST['ClassName'];
              $namedParameters2[':Tenacity'] = $_POST['Tenacity'];
              $namedParameters2[':RockType1'] = $_POST['RockType1'];
              $namedParameters2[':RockType2'] = $_POST['RockType2'];
              $namedParameters2[':RockType3'] = $_POST['RockType3'];
      $statement3 = $conn->prepare($sql3);
      $statement3->execute($namedParameters2); 
      $sql4= "SELECT MineralClassID FROM MineralClass WHERE ClassName='".$_POST['ClassName']."'";
      $ids = getDatabaseConnection($sql4, $conn);
      foreach($ids as $id)
      {
        $mineral = $id['MineralClassID'];
      }
    }
    $sql = "INSERT INTO Gemstones (GemName, MineralClassID, Hardness, Luster, HighPrice, LowPrice) 
            VALUES (:GemName, :MineralClassID, :Hardness, :Luster, :HighPrice, :LowPrice)";
    $sql2 = "INSERT INTO Description (GemDescription) 
            VALUES (:GemDescription)";
            
    $namedParameters = array();
    $namedParameters[':GemName'] = $_POST['GemName'];
    $namedParameters[':MineralClassID'] = $mineral;
    $namedParameters[':Hardness'] = $_POST['Hardness'];
    $namedParameters[':Luster'] = $_POST['Luster'];
    $namedParameters[':HighPrice'] = $_POST['HighPrice'];
    $namedParameters[':LowPrice'] = $_POST['LowPrice'];
     $namedParameters3 = array();
     $namedParameters3[':GemDescription'] = $_POST['GemDescription'];
    
    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);   
    $statement2 = $conn->prepare($sql2);
    $statement2->execute($namedParameters3);
    //gets image
    if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
    {
        echo "Please select an image.";
    }
    //prints out image info after upload
    else{
        $image = addslashes($_FILES['image']['tmp_name']);
        $name = addslashes($_FILES['image']['name']);
        $type = addslashes($_FILES['image']['type']);
        $size = addslashes($_FILES['image']['size']);
        $image = file_get_contents($image);
        $image =base64_encode($image);
        echo "File Name: " . $name ."<br/>";
        echo "File Type: " . $type."<br/>";
        echo "File Size: " . ($size / 1024) . " KB <br/>";
        saveImage($name, $image, $type, $size, $conn);
    }
        
    echo "Record has been added!";    
  }
  
  
  
  ?>
  
  <!--form to add a new gemstone-->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--title-->
    <title>Add New Gem</title>
     <style> 
     /*hides mineral class form*/
       #directions { 
            
               display: none;  /*hides elements*/ 
       } 
       form{
         display:block;
       }
  </style> 
  </head>
  
  <body>
    <!--add gem form-->
    <div class="bigContainer">
      <?php
      include 'includes/navigation.php';
      ?>
      <header>
        <link rel="stylesheet" href="css/main.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
        <h1>Add New Gem</h1>
      </header>
      <div>
        <form method="POST" enctype="multipart/form-data" name="upload">
            <!--enter all gem info-->
            Gem Name: <input type="text" name="GemName" required /><br />
            Hardness: <input type="text" name="Hardness" required/><br/>
            Luster: <input type="text" name="Luster" required/><br/>
            Price Range: Low: <input type="text" name="LowPrice" required/>&nbsp;-&nbsp;
            High: <input type="text" name="HighPrice" required/><br/>
            Mineral Class: <select name="MineralClassID">
              <option></option>
               <?php
               //sql that displays all current mineral classes
               $sql3 = "SELECT * FROM MineralClass";
                        $mineralClasses2 = getDataBySQL($sql3, $conn);
                        foreach($mineralClasses2 as $mineralClass2){
                      echo "<option value =" . $mineralClass2['MineralClassID'].">" . $mineralClass2['ClassName'] . "</option>"; 
                        }
               ?>
            </select>
            OR
            <!--option to add new mineral class-->
            <a href='#' id="directionsLink">Add New Mineral Class</a><br/>
            <div id="directions"> 
            Mineral Class Name:<input type="text" name = "ClassName"/><br/>
            Tenacity:<input type="text" name = "Tenacity"/><br/>
            
            Rock Type 1:<select name= "RockType1">
              <option></option>
              <?php
              $sql5 = "SELECT * FROM RockType";
              $rocks = getDataBySQL($sql5, $conn);
              foreach($rocks as $rock)
              {
                 echo "<option value =" . $rock['RockTypeID'].">" . $rock['RockTypeName'] . "</option>";
              }
              ?>
            </select>
            Rock Type 2:<select name= "RockType2">
              <option></option>
              <?php
              $sql5 = "SELECT * FROM RockType";
              $rocks = getDataBySQL($sql5, $conn);
              foreach($rocks as $rock)
              {
                 echo "<option value =" . $rock['RockTypeID'].">" . $rock['RockTypeName'] . "</option>";
              }
              ?>
            </select>
            Rock Type 3:<select name= "RockType3">
              <option></option>
              <?php
              $sql5 = "SELECT * FROM RockType";
              $rocks = getDataBySQL($sql5, $conn);
              foreach($rocks as $rock)
              {
                 echo "<option value =" . $rock['RockTypeID'].">" . $rock['RockTypeName'] . "</option>";
              }
              ?>
            </select>
            </div> <br/>
            Gem Description: <textarea height='3px' name="GemDescription" required></textarea><br /><br/>
            Gem Image <input type="file" name="image"/><br/>
            <input type="submit" class="fsSubmitButton" name="upload" value="Add Gem"/>
        </form>
        <form>
            
            
            
            
        </form><br/>
              <form action = "gems.php">
              <button class= "fsSubmitButton2" onclick="window.location.href='gems.php'">Back to Products</button>
            </form>
        
      </div>

    <footer>
    </footer>
  </div>
  <script>
     $("#directionsLink").click( function(){ 
         
        //$("#directions").css("display","block"); //displays content         
         
        $("#directions").slideToggle(); 
    } );
  </script>
</body>
</html>