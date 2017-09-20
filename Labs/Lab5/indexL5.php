<!DOCTYPE html>
<html>
    <head>
        <title> Welcome to Otter Express Online!</title>
        
      <link rel="stylesheet" href="L5.css">
      
      <script language="JavaScript">
            function ShowHide(divId)
            {
            if(document.getElementById(divId).style.display == 'none')
            {
            document.getElementById(divId).style.display='block';
            }
            else
            {
            document.getElementById(divId).style.display = 'none';
            }
            }
        </script>
    </head>
    <body>
        
        <div class = "bigContainer">
            <!--Drop Down options for the user to select an item -->
        <form action = 'indexL5.php' method = 'POST' >
            <h1 > Otter Express Online! </h1 >
            <img src="img/otter.jpeg"><br/>
            <span id='title'>Product Search: </span>
            <b>By Type:</b> <select name = 'type'>
                </br >
                </br >
                <option></option>
                <option>Chips</option>
                <option>Beverage</option>
                <option>Candy</option>
                <option>Fruit</option>
                <option>Snack</option>
                <option>WOW Cafe</option>
            </select>
            
            <b>Max Price:</b> $<select name = 'maxPrice'>
                </br >
                </br >
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
            
            <b>Max Calories:</b> <select name = 'cal'>
                </br >
                </br >
                <option></option>
                <option>200</option>
                <option>400</option>
                <option>600</option>
                <option>800</option>
                <option>1000</option>
                <option>1200</option>
            </select>
            
            <b>Order By:</b> <select name = 'order'>
                </br >
                </br >
                <option></option>
                <option>Name</option>
                <option>Price</option>
                <option>Calories</option>
            </select>
            
        <input type = 'submit' name = 'submit' value = 'Search' >
        </form>   

         


<?php
        

// Establish the connection and then alter how we are tracking errors (look those keywords up)
    //Turns items of rows in database into variables to be used in php
    $button = $_POST [ 'submit' ];
    $type = $_POST [ 'type' ];
    $maxPrice = $_POST [ 'maxPrice' ];
    $cal = $_POST[ 'cal' ];
    $order = $_POST[ 'order' ];
    $servername = getenv('IP');
    $dbPort = 3306;
    $database = "OtterExpress";
    $username = getenv('C9_USER');
    $password = "";
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    //echos the results you put into the drop down boxes
    echo "<div class = 'results'>
    <span class = 'r'>Your Search Results for Type: <b>" . $type . "</b> </span>
    <span class= 'r'>Max Price: <b>$" . $maxPrice . ".00</b> </span>
    <span class= 'r'>Max Calories: <b>" . $cal . " </b></span>
    <span class= 'r'>Order By: <b>" . $order . "</b> </span>
    </div>";
    
    
    //SQL comboes based on the user input to the drop-down boxes
    $sql = "SELECT * FROM Products ORDER BY Product_Price ASC";
    //By Price
    //When the order category is filled out
    if ($order != NULL)
    {
        //when the type is filled out
        if($type != NULL)
        {
            $sql ="SELECT * FROM Products WHERE Product_Type='" . $type . "' ORDER BY Product_Price ASC";
            //when the price is filled out
            if($maxPrice != NULL)
            {
                $sql ="SELECT * FROM Products WHERE Product_Type='" . $type . "' AND Product_Price < " .  $maxPrice. " ORDER BY Product_" . $order . " ASC";
                //when the calorie amount is filled out
                 if($cal != NULL)
                {
                    $sql ="SELECT * FROM Products WHERE Product_Type='" . $type . "' AND Product_Price < " .  $maxPrice. " AND Product_Calories < " .  $cal. " ORDER BY Product_" . $order . " ASC";
                }
            }
        }
        //type is empty
        if($type == NULL)
        {
            //price is filled
             if($maxPrice != NULL)
            {
                $sql ="SELECT * FROM Products WHERE Product_Price < " .  $maxPrice. " ORDER BY Product_" . $order . " ASC";
                 if($cal != NULL)
                {
                    $sql ="SELECT * FROM Products WHERE Product_Price < " .  $maxPrice. " AND Product_Calories < " .  $cal. " ORDER BY Product_" . $order . " ASC";
                }
            }
            
        }
        //type is empty
        if($type == NULL)
        {
            if($maxPrice == NULL)
            {
                if($cal != NULL)
                {
                    $sql ="SELECT * FROM Products WHERE Product_Calories < " .  $cal. " ORDER BY Product_" . $order . " ASC";
                }
            }
            
        }
    }
    if($order == NULL)
    {
        if($type != NULL)
        {
            $sql ="SELECT * FROM Products WHERE Product_Type='" . $type . "' ORDER BY Product_Price ASC";
            if($maxPrice != NULL)
            {
                $sql ="SELECT * FROM Products WHERE Product_Type='" . $type . "' AND Product_Price < " .  $maxPrice. " ORDER BY Product_Price ASC";
                 if($cal != NULL)
                {
                    $sql ="SELECT * FROM Products WHERE Product_Type='" . $type . "' AND Product_Price < " .  $maxPrice. " AND Product_Calories < " .  $cal. " ORDER BY Product_Calories ASC";
                }
            }
        }
        if($type == NULL)
        {
             if($maxPrice != NULL)
            {
                $sql ="SELECT * FROM Products WHERE Product_Price < " .  $maxPrice. " ORDER BY Product_Price ASC";
                 if($cal != NULL)
                {
                    $sql ="SELECT * FROM Products WHERE Product_Price < " .  $maxPrice. " AND Product_Calories < " .  $cal. " ORDER BY Product_Calories ASC";
                }
            }
            
        }
        if($type == NULL)
        {
            if($maxPrice == NULL)
            {
                if($cal != NULL)
                {
                    $sql ="SELECT * FROM Products WHERE Product_Calories < " .  $cal. " ORDER BY Product_Calories ASC";
                }
            }
            
        }
    }
    
    // Prepare the SQL...the DBMS uses this to figure out how best to execute the query
    $stmt = $dbConn->prepare($sql);
    
    // Execute the query
    $stmt -> execute ();
    $i = 1;
    while ($row = $stmt -> fetch())  {
        // Notice how it represents my numbers and dates in the associative array
        // How would I use this? How do I get from the string to a number or a date?
        echo "<br /><br />";
        
        echo
        "<div class = 'container'>
            <span id='title'>Product Name: </span><a onclick =\"javascript:ShowHide('description')\" href=\"javascript:;\">" . $row['Product_Name'] . "</a>
             <span id='title'> Product ID: </span>" . $row['Product_ID'] . "<span id='title'> Product Price: </span> $"  . $row['Product_Price']. " <span id='title'> Calories: </span>"  . $row['Product_Calories'] . 
            "<br /><br />
        <div id = \"description\" style=\"DISPLAY: none\"><span id=\"title\"> Product Description: </span>"
           . $row[ 'Product_Description' ].
           "</div>
          </div>";
          $i++;

    }

 ?>


</div>
    </body>
</html>