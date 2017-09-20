
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php
    session_start();
    
            include 'includes/db_connect.php';
            //includes the table function
            include 'includes/displayGems.php';
            $conn = getDatabaseConnection();
            //Carries username and permission status over from login page
            $username = $_SESSION['username'];
            $permission = $_SESSION['permission'];
        ?>
        <header>
            
        <link rel="stylesheet" href="css/main.css">
        </header>
        <link rel="stylesheet" type="text/css" href="jquerymobile/jquery.mobile-1.0a1.min.css" />
        <script type="text/javascript" src="jquerymobile/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="jquerymobile/jquery.mobile-1.0a1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
        //Ajax call to check to see if item is in the database
        $(document).ready(function() {
            $("#Action").click(function(){
                var name = $("#name").val();
                name = name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
                });
            jQuery.ajax({
              method:'POST', //Or get
              url: "nameLookup.php",
              data:{name: name},
              success:function(data){
                  //prints Available if found
                if (data == "Available") {
                     $("#noName").html("Gem is in Database!"); 
                     $("#noName").css("color","#99ff66");
                 }
                else {
                    //prints not Available if found
                        $("#noName").html("Gem is not in Database!");         
                        $("#noName").css("color","red");
                 }  
              },
            });
            });
        });
        
        </script>
    </head>
    
        <body>
            <div class="bigContainer">
                <?php
                //puts navigation bar on site
                include 'includes/navigation.php'; 
                ?>
                <!--Title of page-->
                  <div class="gemSearch"><h1>Gemstones</h1>
                 <div class = "search">
                     <a href = "UserStory.php" style="color:yellow">User Story</a><br/>
                     <a href = "Diagram.php" style="color:yellow">Diagram</a><br/><br/>
                     <!--Button to redirect to page that adds gems-->
                     <?php
                     if(isset($username))
                     {
                         if($permission == "yes")
                         {
                             echo "<form class= 'button' action='addGem.php'>
                        <input class='fsSubmitButton' type='submit' value='Add Gem to Database' />    
                     </form>";
                         }
                     }
                     
                     ?>
                     
                        <!--Search option to check if specific gem is in database-->
                        <h3 > Search: </h3>
                    <form action = 'gems.php' method = 'POST' >
                        Check if Gem is in Database: <input type='text' name='name' id="name"/>&nbsp;<span id="noName"></span>
                            <a id="Action" href="#" style="color:yellow">Go</a><br/><br/>OR<br/><br/>
                        <b>Order By:</b> 
                        <!--Drop Down options for the user to select an item -->
                        <!--Option to search for specific quality of gem-->
                        <select name = 'order'>
                            <option value = "GemName">Name</option>
                            <option value = "MineralClassID">Class</option>
                            <option value = "Hardness">Hardness</option>
                            <option value = "HighPrice">Highest Priced</option>
                            <option value = "LowPrice">Lowest Priced</option>
                        </select>&nbsp;&nbsp;
                        <!--Option to search gems of specific mineral class-->
                        <b>Mineral Class</b>
                        <select name = "class">
                            <option></option>
                        <?php
                        //sql to call all mineral class names
                        $sql = "SELECT * FROM MineralClass";
                        $classes = getDataBySQL($sql, $dbConn);
                        foreach($classes as $class)
                        {
                            echo "<option value = '" . $class['MineralClassID'] . "'>" . $class['ClassName'] . "</option>";
                        }
                        ?>
                        </select>&nbsp;&nbsp;
                        
                        <!--Option to choose the order of the items displayed-->
                        <b>Ascending/Descending:</b> <select name = 'direction'>
                            <option>ASC</option>
                            <option>DESC</option>
                        </select>
                        &nbsp;&nbsp; 
                        
                     &nbsp; &nbsp;   
                     <!--button that submits choses to sql-->
                    <input type = 'submit' name = 'submit' value = 'Search' class="fsSubmitButton"><br/>
                    <span class = "buttons">
                      </span>
                    </form>  
                </div>
                        <div>
            
        </div>
        </div>
                
            
               
               <?php
        

//sets POST reponses to variables
    $button = $_POST [ 'submit' ];
    $class = $_POST['class'];
    $order = $_POST [ 'order' ];
    $direction = $_POST[ 'direction' ];
    $name = $_POST['name'];

    
    //echos the results you put into the drop down boxes
    echo "<div align='center' class = 'results'>
    <span class = 'r'>Your Search Results &nbsp;&nbsp;
    <u>Order By:</u>&nbsp;&nbsp;<b>" . $order . "</b></span> &nbsp;&nbsp;
    <u>Mineral Class:</u>&nbsp;&nbsp;<b>" . $class . "</b></span> &nbsp;&nbsp;
    <span class= 'r'><u>Ascending or Descending:</u>&nbsp;&nbsp;<b>" . $direction . " </b></span>
    
    </div>";
    
    
    //SQL comboes based on the user input to the drop-down boxes
    
    //Portions of query are added based on search inputs
    $query = "SELECT * FROM Gemstones";
    if($class != "")
    {
     $query .= " WHERE MineralClassID = '" . $class . "'";
    }
    if(isset($order))
    {
        $query .= " ORDER BY " . $order;
    }
    if(isset($direction))
    {
        $query .= " " . $direction;
    }
    if($name != "")
    {
        $query = "SELECT * FROM Gemstones WHERE GemName= '".$name."'";
    }

    //displays table containing all dataase items
  displayAllGemstones($query, $conn, $permission);  
   
 ?>  
        
        </div>
        
        </body>
</html>