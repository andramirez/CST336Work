
<html>
    <head>
        <title>Survey Conformation</title>
        <link rel="stylesheet" type="text/css" href= "mainA3.css">
    </head>
    <body>
         <div class="container" >
            <div id="main">
                <div>
                    <?php
                        session_start();
                        $_SESSION['Jamaica'] = 0;
                        $_SESSION['Fiji'] = 0;
                        $_SESSION['Hawaii'] = 0;
                        $_SESSION['CostaRica'] = 0;
                        $_SESSION['Tahiti'] = 0;
                        $_SESSION['Borabora'] = 0;
                        
                        echo  "<div>
                                <div class='formcont'> Dear <b><i>" . $_REQUEST['name1']  . "</i></b>,</div>
                                <div class='formcont'> Thank you for entering the Take A Chance Get-Away Sweepstakes!
                                <div class='formcont'> Please review your information below: </div>
                                
                                <div class='con'>
                                    <b>Gender:</b> " . $_REQUEST['gender'] . "
                                </div>
                                <div class='con'>
                                <b>Birthdate:</b> " . $_REQUEST['month'] . "/" . $_REQUEST['day'] . "/" . $_REQUEST['year'] ."
                                </div>
                                <div class='con'>
                                <b>Email:</b> " . $_REQUEST['email'] . "
                                </div>
                                <div class='con'>
                                <b>Address:</b> " . $_REQUEST['address1'] . "<br/>" . $_REQUEST['city'] . ", " . $_REQUEST['state'] . " " . $_REQUEST['ZIP'] . "
                                </div>
                                <div class='con'>
                                <b>Entries:</b> 
                                </div>
                            </div>";
                        echo    "<div class='conEntries'>"
                                . entries($_REQUEST['Jamaica'], $_REQUEST['Fiji'], $_REQUEST['Hawaii'], $_REQUEST['CostaRica'], $_REQUEST['Tahiti'], $_REQUEST['BoraBora'] ) . "
                                </div>";
                            
                          
                            
                        function entries($j, $f, $r, $c, $t, $b){
                            if ($j == "Jamaica")
                            {
                                echo "<div class='place'>Take a Chance Weekend Get-Away: <b>Jamaica</b><br/></div>";
                                $_SESSION['Jamaica'] = $j;
                            }
                            if ($f == "Fiji")
                            {
                                echo "<div class='place'>Take a Chance Weekend Get-Away: <b>Fiji</b><br/></div>";
                                $_SESSION['Fiji'] = $f;
                            }
                            if ($r == "Hawaii")
                            {
                                echo "<div class='place'>Take a Chance Weekend Get-Away: <b>Hawaii</b><br/></div>";
                                $_SESSION['Hawaii'] = $r;
                            }
                            if ($c == "CostaRica")
                            {
                                echo "<div class='place'>Take a Chance Weekend Get-Away: <b>Costa Rica</b><br/></div>";
                                $_SESSION['CostaRica'] = $c;
                            }
                            if ($t == "Tahiti")
                            {
                                echo "<div class='place'>Take a Chance Weekend Get-Away: <b>Tahiti</b><br/></div>";
                                $_SESSION['Tahiti'] = $t;
                            }
                            if ($b == "BoraBora")
                            {
                                echo "<div class='place'>Take a Chance Weekend Get-Away: <b>Bora Bora</b><br/></div>";
                                $_SESSION['BoraBora'] = $b;
                            }
                        }
                    session_start();
                    ?>
                    <form action="SCon.php" method="POST">
                        <input type ="hidden" name="name1" value="<?php echo $_REQUEST['name1'] ?>"/>
                        <input type ="hidden" name="gender" value="<?php echo $_REQUEST['gender'] ?>"/>
                        <input type ="hidden" name="month" value="<?php echo $_REQUEST['month'] ?>"/>
                        <input type ="hidden" name="day" value="<?php echo $_REQUEST['day'] ?>"/>
                        <input type ="hidden" name="year" value="<?php echo $_REQUEST['year'] ?>"/>
                        <input type ="hidden" name="email" value="<?php echo $_REQUEST['email'] ?>"/>
                        <input type ="hidden" name="address1" value="<?php echo $_REQUEST['address1'] ?>"/>
                        <input type ="hidden" name="address2" value="<?php echo $_REQUEST['address2'] ?>"/>
                        <input type ="hidden" name="city" value="<?php echo $_REQUEST['city'] ?>"/>
                        <input type ="hidden" name="state" value="<?php echo $_REQUEST['state'] ?>"/>
                        <input type ="hidden" name="ZIP" value="<?php echo $_REQUEST['ZIP'] ?>"/>
                        <input type ="hidden" name="Jamaica" value="<?php echo $_REQUEST['Jamaica'] ?>"/>
                        <input type ="hidden" name="Fiji" value="<?php echo $_REQUEST['Fiji'] ?>"/>
                        <input type ="hidden" name="Hawaii" value="<?php echo $_REQUEST['Hawaii'] ?>"/>
                        <input type ="hidden" name="Costa Rica" value="<?php echo $_REQUEST['CostaRica'] ?>"/>
                        <input type ="hidden" name="Tahiti" value="<?php echo $_REQUEST['Tahiti'] ?>"/>
                        <input type ="hidden" name="Bora Bora" value="<?php echo $_REQUEST['BoraBora'] ?>"/>
                    </form>
                    <?php
                    $_SESSION['name1'] = $_REQUEST['name1'];
                    $_SESSION['gender'] = $_REQUEST['gender'];
                    $_SESSION['month'] = $_REQUEST['month'];
                    $_SESSION['day'] = $_REQUEST['day'];
                    $_SESSION['year'] = $_REQUEST['year'];
                    $_SESSION['email'] = $_REQUEST['email'];
                    $_SESSION['address1'] = $_REQUEST['address1'];
                    $_SESSION['address2'] = $_REQUEST['address2'];
                    $_SESSION['city'] = $_REQUEST['city'];
                    $_SESSION['state'] = $_REQUEST['state'];
                    $_SESSION['ZIP'] = $_REQUEST['ZIP'];
                    
                    ?>
                    <form action="indexA3.php">
                        <button href="indexA3.php" class="btn">Re-Start</button>
                    </form>
                    <form action="reciept.php" method="session">
                        <input type="submit" class="btn" value="Take A Chance!"> 
                    </form>
                    
                
                </div>
            </div>
        </div>

    </body>
</html>