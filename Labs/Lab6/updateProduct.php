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
        <title>Update Product</title>
        <link rel = "stylesheet" href="main.css">
    </head>
    
    <body>
        <div id ="content">
            <h3>Update Product</h3>
            <form method="POST" action = "process_update.php">
                <input type="hidden" name= "Product_ID" value = "<?php echo $product['Product_ID'];?>"/>
                <table>
                    <tr>
                        <td>Product Name</td>
                        <td><input type="text" name = "Product_Name" size = "45" value = "<?php echo $product['Product_Name']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Product Description</td>
                        <td><textarea name = "Product_Description" rows ="10"
                        cols = "45"><?php echo $product['Product_Description']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Product Price</td>
                        <td><input type="text" name = "Product_Price" size = "5" value = "<?php echo $product['Product_Price']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Product Type</td>
                        <td>Category: <select name="Product_Type" required>
                         <option >Beverage</option>
                         <option >Candy </option>
                         <option >Chips</option>
                         <option >Snacks</option>
                         <option >Fruit</option>
                         <option >WOW Cafe</option>
                      </select>
                      </td>
                    </tr>
                    <tr>
                        <td><input clas ="fsSubmitButton" type="submit" value="Update Product"/></td>
                    </tr>
                </table>
            </form>
            <form action = "products.php">
              <button class = "fsSubmitButton2" onclick="window.location.href='products.php'">Back to Products</button>
            </form>
        </div>
    </body>
</html>