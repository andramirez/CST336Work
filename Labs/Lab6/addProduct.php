<?php
session_start();

if(isset($_SESSION['username'])){
  if (isset($_GET['addForm'])) {  //admin submitted form to add product
      
    include 'db_connect.php';
  
    $sql = "INSERT INTO Products ( Product_Name, Product_Description, Product_Price, Product_Type) 
            VALUES ( :Product_Name, :Product_Description, :Product_Price, :Product_Type)";
            
    $namedParameters = array();
    $namedParameters[':Product_Name'] = $_GET['Product_Name'];
    $namedParameters[':Product_Description'] = $_GET['Product_Description'];
    $namedParameters[':Product_Price'] = $_GET['Product_Price'];
    $namedParameters[':Product_Type'] = $_GET['Product_Type'];
  
    $conn = getDatabaseConnection();    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);    
        
    echo "Record has been added!";    
  }
  
  
  
  ?>
  
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
  
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
         Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
    <title>Add new Product</title>
    <meta name="description" content="">
    <meta name="author" content="lara4594">
  
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
  
    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  </head>
  
  <body>
    <div>
      <header>
        <link rel="stylesheet" href="main.css">
        <h1>Adding New Product</h1>
      </header>
  
      <div>
        
        <form>
            
            Product Name: <input type="text" name="Product_Name" required /> <br />
            Description: <textarea rows="4" cols="20" name="Product_Description" required></textarea><br />
            Price: <input type="text" name="Product_Price" required/> <br />
            Category: <select name="Product_Type" required>
                         <option >Beverage</option>
                         <option >Candy </option>
                         <option >Chips</option>
                         <option >Snacks</option>
                         <option >Fruit</option>
                         <option >WOW Cafe</option>
                      </select>
            <br />          
            <input class="fsSubmitButton" type="submit" value="Add Product" name="addForm" >
            
            
            
        </form>
              <form action = "products.php">
              <button class= "fsSubmitButton2" onclick="window.location.href='products.php'">Back to Products</button>
            </form>
        
      </div>
    <?php
}
else{
  echo "No login found. Please log-in to Otter Express Administration to Edit Products";
}
?>

    <footer>
    </footer>
  </div>
</body>
</html>