<?php
include'jQFunctions.php';
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8"> 
  <title>Lab 7</title> 
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
   
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
   
  
   
   
</head> 

<body> 
  <div id="wrapper"> 
  <a href="JS.php"> Go to Javascript Version </a>
    <h1> Find the Letter!</h1> 

    <form onsubmit="return formValidation()"> 
      Select a Letter to Find: 
      <select id="toFind" name="letterToFind"> 
       <?php 
         for ($i = 65; $i <= 90; $i++) { 
            echo "<option value=" . chr($i) . ">" . chr($i) . "   </option>"; 
         } 
        ?> 
       </select> 
       <br /> 
        
        Select Table Size: 
        <select name="tableSize"> 
            <option value="6">6x6</option> 
            <option value="7">7x7</option> 
            <option value="8">8x8</option> 
            <option value="9">9x9</option> 
            <option value="10">10x10</option> 
        </select> 
        <br/> 
        Select a Letter to Omit: 
        <select id="toOmit" name="letterToOmit"> 
        <?php 
        for ($i = 65; $i <= 89; $i++) { 
            echo "<option value=" . chr($i) . ">" . chr($i) . "   </option>"; 
        } 
        ?>  <option value="Z" selected>Z</option> 
        </select> 
        <br/> 
        <input type="submit" value="Create Table" name="submitForm" /> 
        <br /> <br /> 
        <a href="#" id="directionsLink"> Directions </a> 
         
    </form> 

    <h2 id="feedback"></h2>  
    <h3 id="timeTaken"></h3>
    <h3 id="score"></h3> 
  
     <div id="directions"> Directions: Select the letter you want to find, the table size, 
     and the Letter you want to omit from the table. When done, select the Create Table Button
     and find the letter in the table!</div> 

    <?= displayTable() ?> 

</div> 

</div> 
<script> 
     
    $("#letterToFind").click( function(){ 
         
        youFoundIt(); 
         
         
    } ); 
     
     
    $("#directionsLink").click( function(){ 
         
        //$("#directions").css("display","block"); //displays content         
         
        $("#directions").slideToggle(); 
    } );   
     
</script> 

</body> 
</html> 