<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
                <link rel="stylesheet" type="text/css" href= "mainA3.css">
    </head>
    <body>
        <div class="container2" >
            <?php
            if ($_SESSION['Jamaica'] == "Jamaica")
            {
                $num = rand(0, 4);
                $win = rand(0,4);
                if($num == $win)
                {
                    echo "<div class='result'>CONGRATULATIONS, <b>" . $_SESSION['name1'] . "</b>, You have won an all-expense paid trip to " . $_SESSION['Jamaica'] ."!!</div><br/>";
                    echo "<img src='img/jamaica.jpg' class='resImg'>";
                    echo "<div class='result'>We will message you more details about your amazing prize within the next few days to your email: <b>" . $_SESSION['email'] ."</b>.";
                    echo "<div class='result2'>A congratulations letter will also be sent to you at the address: <br/><div class='add'><b>" . $_SESSION['address1'] ."<br/>" . $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['ZIP'] . "</b></div>";
                    echo
                "<form action='indexA3.php'>
                    <button href='indexA3.php' class='btn'>Start Over</button>
                </form>";
                }
                else{
                    $_SESSION['Jamaica'] = 1;
                }
            }
            if ($_SESSION['Fiji'] == "Fiji")
            {
                $num = rand(0, 4);
                $win = rand(0,4);
                if($num == $win)
                {
                    echo "<div class='result'>CONGRATULATIONS, <b>" . $_SESSION['name1'] . "</b>, You have won an all-expense paid trip to " . $_SESSION['Fiji'] ."!!</div><br/>";
                     echo "<img src='img/fiji.jpg' class='resImg'>";
                     echo "<div class='result'>We will message you more details about your amazing prize within the next few days to your email: <b>" . $_SESSION['email'] ."</b>.";
                    echo "<div class='result'>A congratulations letter will also be sent to you at the address: <br/><div class='add'><b>" . $_SESSION['address1'] ."<br/>" . $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['ZIP'] . "</b></div>";
                    echo
                "<form action='indexA3.php'>
                    <button href='indexA3.php' class='btn'>Start Over</button>
                </form>";
                }
                
                else{
                    $_SESSION['Fiji'] = 1;
                }
            }
            if ($_SESSION['Hawaii'] == "Hawaii")
            {
                $num = rand(0, 4);
                $win = rand(0,4);
                if($num == $win)
                {
                    echo "<div class='result'>CONGRATULATIONS, <b>" . $_SESSION['name1'] . "</b>, You have won an all-expense paid trip to " . $_SESSION['Hawaii'] ."!!</div><br/>";
                    echo "<img src='img/hawaii.jpg' class='resImg'>";
                     echo "<div class='result'>We will message you more details about your amazing prize within the next few days to your email: <b>" . $_SESSION['email'] ."</b>.";
                    echo "<div class='result'>A congratulations letter will also be sent to you at the address: <br/><div class='add'><b>" . $_SESSION['address1'] ."<br/>" . $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['ZIP'] . "</b></div>";
                    echo
                "<form action='indexA3.php'>
                    <button href='indexA3.php' class='btn'>Start Over</button>
                </form>";
                }
                else{
                    $_SESSION['Hawaii'] = 1;
                }
            }
            if ($_SESSION['CostaRica'] == "CostaRica")
            { 
                $num = rand(0, 4);
                $win = rand(0,4);
                if($num == $win)
                {
                    echo "<div class='result'>CONGRATULATIONS, <b>" . $_SESSION['name1'] . "</b>, You have won an all-expense paid trip to Costa Rica!!</div><br/>";
                     echo "<img src='img/cr.jpg' class='resImg'>";
                     echo "<div class='result'>We will message you more details about your amazing prize within the next few days to your email: <b>" . $_SESSION['email'] ."</b>.";
                    echo "<div class='result'>A congratulations letter will also be sent to you at the address: <br/><div class='add'><b>" . $_SESSION['address1'] ."<br/>" . $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['ZIP'] . "</b></div>";
                    echo
                "<form action='indexA3.php'>
                    <button href='indexA3.php' class='btn'>Start Over</button>
                </form>";
                }
                else{
                    $_SESSION['CostaRica'] = 1;
                }
            }
            if ($_SESSION['Tahiti'] == "Tahiti")
            {
                $num = rand(0, 4);
                $win = rand(0,4);
                if($num == $win)
                {
                    echo "<div class='result'>CONGRATULATIONS, <b>" . $_SESSION['name1'] . "</b>, You have won an all-expense paid trip to " . $_SESSION['Tahiti'] ."!!</div><br/>";
                    echo "<img src='img/tahiti.jpg' class='resImg'>";
                    echo "<div class='result'>We will message you more details about your amazing prize within the next few days to your email: <b>" . $_SESSION['email'] ."</b>.";
                    echo "<div class='result'>A congratulations letter will also be sent to you at the address: <br/><div class='add'><b>" . $_SESSION['address1'] ."<br/>" . $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['ZIP'] . "</b></div>";
                    echo
                "<form action='indexA3.php'>
                    <button href='indexA3.php' class='btn'>Start Over</button>
                </form>";
                }
                else{
                    $_SESSION['Tahiti'] = 1;
                }
            }
            if ($_SESSION['BoraBora'] == "BoraBora")
            {
                $num = rand(0, 4);
                $win = rand(0,4);
                if($num == $win)
                {
                    echo "<div class='result'>CONGRATULATIONS, <b>" . $_SESSION['name1'] . "</b>, You have won an all-expense paid trip to Bora Bora!!</div><br/>";
                    echo "<img src='img/bb.jpg' class='resImg'>";
                    echo "<div class='result'>We will message you more details about your amazing prize within the next few days to your email: <b>" . $_SESSION['email'] ."</b>.";
                    echo "<div class='result'>A congratulations letter will also be sent to you at the address: <br/><div class='add'><b>" . $_SESSION['address1'] ."<br/>" . $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['ZIP'] . "</b></div>";
                    echo
                "<form action='indexA3.php'>
                    <button href='indexA3.php' class='btn'>Start Over</button>
                </form>";
                }
                else{
                    $_SESSION['BoraBora'] = 1;
                }
            }
            if($_SESSION['Jamaica'] == 0 && $_SESSION['Fiji'] == 0 && $_SESSION['CostaRica'] == 0 && $_SESSION['Hawaii'] == 0 && $_SESSION['Tahiti'] == 0 && $_SESSION['BoraBora'] == 0){
                echo "<div class='result'><b>" . $_SESSION['name1'] . "</b>, You did not Enter Any of our Sweepstakes! Please Enter in your info again and be sure to choose a sweepstakes to enter.</div>";
                echo
                    "<form action='indexA3.php'>
                        <button href='indexA3.php' class='btn'>Start Over</button>
                    </form>";

            }   
            if ($_SESSION['Jamaica'] == 1 && $_SESSION['Fiji'] == 1 && $_SESSION['CostaRica'] == 1 && $_SESSION['Hawaii'] == 1 && $_SESSION['Tahiti'] == 1 && $_SESSION['BoraBora'] == 1)
            {
                echo "<div class='result'>Sorry, <b>" . $_SESSION['name1'] . "</b>, you did not win any of the Sweepstakes you entered.<br/><br/> Feel free to try again.</div>";
                echo
                "<form action='indexA3.php'>
                    <button href='indexA3.php' class='btn'>Start Over</button>
                </form>";
            }
            ?>
        </div>
    </body>
</html>