<?php
include 'db_connect.php';
$conn = getDatabaseConnection();

$Product_ID = $_POST['Product_ID'];
$Product_Name = $_POST['Product_Name'];
$Product_Description = $_POST['Product_Description'];
$Product_Price = $_POST['Product_Price'];
$Product_Type = $_POST['Product_Type'];

$sql = "UPDATE Products SET Product_Name = '$Product_Name', Product_Description='$Product_Description', 
Product_Price = '$Product_Price', Product_Type = '$Product_Type' WHERE Product_ID = '$Product_ID'";

?>

<html>
    <head>
        <title>Update Product</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <div id = "content">
            <?php
            if(getDataBySQL($sql, $conn)){
                echo "<p>Product Information Updated Successfully!</p>";
            }
            
            ?>
            <form action = "products.php">
              <button class ="fsSubmitButton" onclick="window.location.href='products.php'">Back to Products</button>
            </form>
        </div>
    </body>
</html>


