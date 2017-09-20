<?php
session_start();
$id = $_SESSION['ID'];
if(!isset($_SESSION['username']))
{
    header("Location:login.php");
}
function saveImage($id, $name, $image, $type, $size)
{
    $servername = getenv('IP');
    $dbPort = 3306;
    
    // Which database (the name of the database in phpMyAdmin)?
    $database = "fileUpload";
    
    // My user information...I could have prompted for password, as well, or stored in the
    // environment, or, or, or (all in the name of better security)
    $username = getenv('C9_USER');
    $password = "";
    
    // Establish the connection and then alter how we are tracking errors (look those keywords up)
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
if (!$dbConn)
{
  echo "Please try later.";
}
else
{

    $sql = "INSERT INTO up_files (UserID, fileName, fileType, fileSize, Image)
    VALUES ('{$id}','{$name}', '{$type}', '{$size}', '{$image}')";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    if($stmt){
    }
    else{
         echo "<br/>Image not uploaded!";
    }
}
}
function displayImage($id)
{
    $servername = getenv('IP');
    $dbPort = 3306;
    
    // Which database (the name of the database in phpMyAdmin)?
    $database = "fileUpload";
    
    // My user information...I could have prompted for password, as well, or stored in the
    // environment, or, or, or (all in the name of better security)
    $username = getenv('C9_USER');
    $password = "";
    
    // Establish the connection and then alter how we are tracking errors (look those keywords up)
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM up_files WHERE ImageNum in (SELECT MAX(ImageNum) FROM up_files WHERE UserID = '{$id}')";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $results = $stmt;
    if($results)
    {
        foreach($results as $row)
        {
    
            echo "<img width = '300' src='data:image;base64,".$row['Image']."'>"; 

        }
    }
    
}

?>
<html>
    <link rel="stylesheet" href="main.css">
     <style> 
     #wrapper, table { margin:0 auto;  
                 text-align:center; 
                 width:800px 
                } 
       td { padding:20px} 
        
       #directions { 
            
               display: none;  /*hides elements*/ 
       } 
  </style> 
    <body>
        <div id="wrapper">
        <div><h2>Welcome to your Homepage, feel free to update your Profile Picture</h2></div>
        <?php
        if(isset($_POST['upload']))
        {
            if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
            {
                echo "Please select an image.";
            }
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
                saveImage($id, $name, $image, $type, $size);
            }
            
        }
        echo "<div>Current Profile Pic:</div>";
        displayImage($id);
        
        ?>
        <br/>
        <br/>
        <span id = "id" value=". <?php $id; ?> ." style = "visibility:hidden"></span>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="image"/>
            <input type="submit" name="upload" value="Upload"/>
        </form>
        
        <div>
            <form class= "productPageButtons" action="logout.php">
            <input class="fsSubmitButton2" type="submit" value="Logout" />    
         </form>
        </div>
        </div>
    </body>
</html>