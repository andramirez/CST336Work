<?php
    include 'db_connect.php';
    $conn = getDatabaseConnection();
?>
<header>
    <link rel="stylesheet" href="main.css">
</header>
<?php
session_start();

if (!isset($_SESSION['username'])) {  //checks whether user has logged in
    
    header("Location: login.php");
    
}

function displayAllProducts(){
    $sql = "SELECT * FROM Products ORDER BY Product_Name";
    $records = getDataBySQL($sql, $dbConn);

     //Using Form Buttons
         echo "<table class = 'products' border = '1'>";
         // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Product Name</th>";
            echo "<th>Product Type</th>";
            echo "<th>Product Price (USD)</th>";
            echo "<th>Product Description</th>";
            echo "<th>Update</th>";
            echo "<th>Delete</th>";
        echo "</tr>";
        foreach ($records as $record) {
          echo "<tr rowspan='3'>"; 
          echo "<td align='center'>" . $record['Product_Name'] . "</td>"; 
          echo "<td align='center'>" . $record['Product_Type'] . "</td>"; 
          echo "<td align='center'>" . $record['Product_Price'] . "</td>"; 
          echo "<td width ='50%'>" . $record['Product_Description'] . "</td>"; 
          echo "<td> <form action=updateProduct.php method='POST'>";
          echo "<input type='hidden' name='Product_ID' value='" . $record['Product_ID'] . "'/>";
          echo "<input class='fsSubmitButton' type='submit' value='Update'/></form> </td>";
          echo "<td> <form action=deleteProduct.php method='POST'>";
          echo "<input type='hidden' name='Product_ID' value='" . $record['Product_ID'] . "'/>";
          echo "<input class='fsSubmitButton2' type='submit' value='Delete'/></form> </td>";



          echo "</tr>";
        } //endForeach
        echo "</table>";
     
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Products</title>
  <meta name="description" content="">
  <meta name="author" content="lara4594">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
    <div class="bigContainer">
  <div class = "productBody">
    <header class ="productTitle">
      <h1>Product Administration</h1>
    </header>

   
    <div>
     <strong> Welcome <?=$_SESSION['adminName']?>! </strong>
     <div class = "productForm" >
            <form class= "productPageButtons" action="logout.php">
            <input class="fsSubmitButton2" type="submit" value="Logout" />    
         </form>
             
         <form class= "productPageButtons" action="addProduct.php">
            <input class="fsSubmitButton" type="submit" value="Add New Product" />    
         </form>

             
          <br /><br /> 
     </div>
   
      <?=displayAllProducts()?>
      
      
      
      
    </div>

    <footer>

    </footer>
  </div>
  </div>
</body>
</html>