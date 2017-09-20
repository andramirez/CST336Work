<?php
include 'db_connect.php';
$conn = getDatabaseConnection();

$id = $_POST['Product_ID'];
$sql = "SELECT * FROM Products WHERE Product_ID ='" .  $id . "'";
$result = getDataBySQL($sql, $conn);
$product = $result->fetch(PDO::FETCH_ASSOC); 

?>

<html>
    <head>
        <title>Delete Product</title>
        <link rel = "stylesheet" href="main.css">
    </head>
    
    <body>
        <div id ="content">
            <h3>Delete Product</h3>
            <form method="POST" action = "process_delete.php">
                <span type="hidden" name= "Product_ID" value = "<?php echo $product['Product_ID'];?>"/>
                <table>
                    <tr>
                        <td>Product Name:</td>
                        <td><span type="text" name = "Product_Name" size = "45"></span><?php echo $product['Product_Name']; ?></span></td>
                    </tr>
                    <tr>
                        <td>Product Description:</td>
                        <td><p name = "Product_Description" rows ="10"
                        cols = "45"><?php echo $product['Product_Description']; ?></p></td>
                    </tr>
                    <tr>
                        <td>Product Price:</td>
                        <td><span type="text" name = "Product_Price" size = "5"><?php echo $product['Product_Price']; ?></span></td>
                    </tr>
                    <tr>
                        <td>Product Type:</td>
                        <td><span type="text" name = "Product_Type" size = "5"><?php echo $product['Product_Type']; ?></span></td>
                    </tr>
                    <tr>
                        <br/>
                        <td><input class = "fsSubmitButton" type="submit" value="Delete Product"/></td>

                    </tr>
                </table>
            </form>
            <form action = "products.php">
              <button class="fsSubmitButton2" onclick="window.location.href='products.php'">Back to Products</button>
            </form>
        </div>
    </body>
</html>