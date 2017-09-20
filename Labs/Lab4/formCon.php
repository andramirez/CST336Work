
<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="mainL4.css">
        <title> </title>
    </head>
    <body>
        <div class="container" >
            <div class="content">
                <div>
                    
                        <form action="formCon.php" method="POST">
                            <input type ="hidden" name="name" value="<?php echo $_REQUEST['name'] ?>"/>
                            <input type ="hidden" name="age" value="<?php echo $_REQUEST['age'] ?>"/>
                            <input type ="hidden" name="mySel" value="<?php echo $_REQUEST['mySel'] ?>"/>
                            <input type ="hidden" name="mug" value="<?php echo $_REQUEST['mug'] ?>"/>
                            <input type ="hidden" name="cap" value="<?php echo $_REQUEST['cap'] ?>"/>
                            <input type ="hidden" name="tote" value="<?php echo $_REQUEST['tote'] ?>"/>
                            <input type ="hidden" name="pin" value="<?php echo $_REQUEST['pin'] ?>"/>
                            <input type ="hidden" name="1month" value="<?php echo $_REQUEST['1month'] ?>"/>
                            <input type ="hidden" name="3month" value="<?php echo $_REQUEST['3month'] ?>"/>
                            <input type ="hidden" name="6month" value="<?php echo $_REQUEST['6month'] ?>"/>
                            <input type ="hidden" name="12month" value="<?php echo $_REQUEST['12month'] ?>"/>
                        </form>
                    
                        <div class="ConCont">
                            <?php
                            echo $_REQUEST['6month'];
                            echo 
                            "<div>
                                <div class='formcont'> Dear <b><i>" . $_REQUEST['name']  . "</i></b>,</div>
                                <div class='formcont'> Thank you for supporting your candidate, <b><i>" . $_REQUEST['mySel'] . "</i></b></div>
                                <div class='formcont2'> Your ordered these products:</div>
                            </div>";
                            echo "<div>
                                <div class='items'>" . items($_REQUEST['mug'], $_REQUEST['cap'], $_REQUEST['tote'], $_REQUEST['pin'], $_REQUEST['1month'], $_REQUEST['3month'], $_REQUEST['6month'], $_REQUEST['12month']) . "</div>
                                </div>";
                            
                            
                            
                            function items($mug, $cap, $tote, $pin, $oneMonth, $threeMonth, $sixMonth, $tweleveMonth){
                                if ($mug == 15)
                                {
                                    echo "<div class='formcont3'>Mug (" . '$15' . ")</div><br/>";
                                }
                                if ($cap == 20)
                                {
                                    echo "<div class='formcont3'>Cap (" . '$20' . ")</div><br/>";
                                }
                                if ($tote == 10)
                                {
                                    echo "<div class='formcont3'>Tote (" . '$10' . ")</div><br/>";
                                }
                                if ($pin == 5)
                                {
                                    echo "<div class='formcont3'>Pin (" . '$5' . ")</div><br/>";
                                }
                                if ($oneMonth == 10)
                                {
                                    echo "<div class='formcont3'>1-month Campaign Magazine Subscription (" . '$10' . ")</div><br/>";
                                }
                                if ($threeMonth == 30)
                                {
                                    echo "<div class='formcont3'>3-month Campaign Magazine Subscription (" . '$30' . ")</div><br/>";
                                }
                                if ($sixMonth == 60)
                                {
                                    echo "<div class='formcont3'>6-month Campaign Magazine Subscription (" . '$60' . ")</div><br/>";
                                }
                                if ($twelveMonth == 120)
                                {
                                    echo "<div class='formcont3'>12-month Campaign Magazine Subscription (" . '$12' . ")</div><br/>";
                                }
                                $price = ($mug + $cap + $pin + $tote + $oneMonth + $threeMonth + $sixMonth + $twelveMonth);
                                echo"<div class='total'>
                                    Total: $" . $price . "
                                </div>";
                            }
                            
                            
                            
                        
    
                            ?>
                        </div>
                </div>
            </div>
        </div>

    </body>
</html>