<html>
    <head>
        <title>My Movies:</title>
        <link rel="stylesheet" type="text/css" href= "main.css">
    </head>
    <body>
    <?php
    
    
        function choosingMovies($array){
        //array of DVD's to be watched(3)
        $moviesWatch = [];
        $nums = [];
        $order = [" ", " ", " "];
        //For loop to randomly choose the DVDs(3 out of 9) (rand)
        for ($i = 0; $i < 3; $i++)
        {
            $num = rand(0, 8);
            while (in_array($num, $nums) == true) //checks to make sure that movies aren't chosen twice
            {
                $num = rand(0, 8);
            }
        $nums[$i] = $num;
        $moviesWatch[$i] = $array[$num];
        }
    
        //choose random number to order DVD
        //For loop to randomly choose the order of the DVDs(3)(array_rand)
        for ($i = 0; $i < count($moviesWatch); $i++)
        {
            $mov = $moviesWatch[array_rand($moviesWatch, 1)];
            
            while (in_array($mov, $order) == true) //checks to make sure that movies aren't chosen twice
            {
                $mov = $moviesWatch[array_rand($moviesWatch, 1)];
            }
    
            $order[$i] = $mov;
            echo "<br/>";
            echo
            "<tr>
            <td><div class=\"title\">" . $order[$i] .
            "</div></td>
            </tr>";
            echo
            "<tr>
            <td class = \"images\">" . printImage($order[$i]) . 
            "</td>
            </tr>
            ";
            echo "<br/>";

        }
    }
    
    function printImage($movIM){
        //Conditional Statement: Switch: prints out dvd cover when dvd is called. 
        switch($movIM){
            case "Bee Movie":
                echo "<img src=\"img/beeMovie.jpg\"> ";
                break;
            case "Brave":
                echo "<img src=\"img/brave.jpg\">";
                break;
            case "Godzilla":
                echo "<img src=\"img/Godzilla.jpg\">";
                break;
            case "Harry Potter and the Half Blood Prince":
                echo "<img src=\"img/HPHBP.jpg\">";
                break;
            case "Jurassic Park":
                echo "<img src=\"img/JurPark.jpg\">";
                break;
            case "National Treasure":
                echo "<img src=\"img/NatTreasurer.jpg\">";
                break;
            case "Napoleon Dynamite":
                echo "<img src=\"img/ND.jpg\">";
                break;
            case "Princess Bride":
                echo "<img src=\"img/PB.jpg\">";
                break;
            case "Yes Man":
                echo "<img src=\"img/yesMan.jpg\">";
                break;
        }
    }
    
    //array of DVD's (index: 1-9)
    $movies = ["Jurassic Park", 
                "Napoleon Dynamite", "Yes Man", "Princess Bride", "Bee Movie",
                 "Godzilla", "National Treasure", "Brave", "Harry Potter and the Half Blood Prince"];
    
    echo "<font class =\"movie\", color='white'>Movie Options: </font><br/><br/>";
    
    
    for($i = 0; $i < count($movies); $i++)
    {
        echo "<font class =\"movies\">" . $movies[$i] . "</font>";
    }
    
   echo "<div class = \"playing\"><br/> --------------------------------------------------------- <br/><br/><u>Now Playing:</u></div>";
    
    echo 
    "<table>" . choosingMovies($movies) . "</table>";
    
    echo "<br/><br/><br/>";
    echo "<a href=\"imgref.php\"><font color = 'red'>Image References</font></a>";

    include "footer.php";

    ?>
    </body>
</html>

