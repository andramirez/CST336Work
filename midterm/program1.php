
<html>
<link rel="stylesheet" type="text/css" href="program1.css">
    <body background="img/lightblue.jpg">
    <Div class="intro">
            <div class='g'>Let's Make a Table</div>
    <form action="program1.php" method="POST">
        Please input Row Size:
        <select name = 'row'>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            <option>32</option>
            <option>33</option>
            <option>34</option>
            <option>35</option>
            <option>36</option>
            <option>37</option>
            <option>38</option>
        </select>
            Please input Column Size:
            <select name = 'column'>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            <option>32</option>
            <option>33</option>
            <option>34</option>
            <option>35</option>
            <option>36</option>
            <option>37</option>
            <option>38</option>
        </select>
        Suit to Omit:
        <select name='omit'>
                <option></option>
                <option>Clubs</option>
                <option>Diamonds</option>
                <option>Hearts</option>
                <option>Spades</option>
        </select>
        <input type='submit' name='button' value='Make a Table'>
    </form>
    </Div>
        <?php
                $h=100;
                $w=80;
                //individual cards
                $cardC1 = ["score" => 1, 
                        "suit" => "Clubs",
                        "rank" => "A"
                        ,"pic" => "<img src='img/cards/Clubs/1.png' height='$h' width='$w'>&nbsp;"];
                $cardC2 = ["score" => 2, 
                        "suit" => "Clubs",
                        "rank" => "2" 
                        ,"pic" => "<img src='img/cards/Clubs/2.png' height='$h' width='$w'>&nbsp;"];
                $cardC3 = ["score" => 3, 
                        "suit" => "Clubs",
                        "rank" => "3"
                        ,"pic" => "<img src='img/cards/Clubs/3.png' height='$h' width='$w'>&nbsp;"];
                $cardC4 = ["score" => 4, 
                        "suit" => "Clubs",
                        "rank" => "4"
                        ,"pic" => "<img src='img/cards/Clubs/4.png' height='$h' width='$w'>&nbsp;"];
                $cardC5 = ["score" => 5, 
                        "suit" => "Clubs",
                        "rank" => "5"
                        ,"pic" => "<img src='img/cards/Clubs/5.png' height='$h' width='$w'>&nbsp;"];
                $cardC6 = ["score" => 6, 
                        "suit" => "Clubs",
                        "rank" => "6"
                        ,"pic" => "<img src='img/cards/Clubs/6.png' height='$h' width='$w'>&nbsp;"];
                $cardC7 = ["score" => 7, 
                        "suit" => "Clubs",
                        "rank" => "7"
                        ,"pic" => "<img src='img/cards/Clubs/7.png' height='$h' width='$w'>&nbsp;"];
                $cardC8 = ["score" => 8, 
                        "suit" => "Clubs",
                        "rank" => "8"
                        ,"pic" => "<img src='img/cards/Clubs/8.png' height='$h' width='$w'>&nbsp;"];
                $cardC9 = ["score" => 9, 
                        "suit" => "Clubs",
                        "rank" => "9"
                        ,"pic" => "<img src='img/cards/Clubs/9.png' height='$h' width='$w'>&nbsp;"];
                $cardC10 = ["score" => 10, 
                        "suit" => "Clubs",
                        "rank" => "10"
                        ,"pic" => "<img src='img/cards/Clubs/10.png' height='$h' width='$w'>&nbsp;"];
                $cardC11 = ["score" => 11, 
                        "suit" => "Clubs",
                        "rank" => "J"
                        ,"pic" => "<img src='img/cards/Clubs/11.png' height='$h' width='$w'>&nbsp;"];
                $cardC12 = ["score" => 12, 
                        "suit" => "Clubs",
                        "rank" => "Q"
                        ,"pic" => "<img src='img/cards/Clubs/12.png' height='$h' width='$w'>&nbsp;"];
                $cardC13 = ["score" => 13, 
                        "suit" => "Clubs",
                        "rank" => "K"
                        ,"pic" => "<img src='img/cards/Clubs/13.png' height='$h' width='$w'>&nbsp;"];
                        
                $cardD1 = ["score" => 1, 
                        "suit" => "Diamonds",
                        "rank" => "A"
                        ,"pic" => "<img src='img/cards/Diamonds/1.png' height='$h' width='$w'>&nbsp;"];
                $cardD2 = ["score" => 2, 
                        "suit" => "Diamonds",
                        "rank" => "2"
                        ,"pic" => "<img src='img/cards/Diamonds/2.png' height='$h' width='$w'>&nbsp;"];
                $cardD3 = ["score" => 3, 
                        "suit" => "Diamonds",
                        "rank" => "3"
                        ,"pic" => "<img src='img/cards/Diamonds/3.png' height='$h' width='$w'>&nbsp;"];
                $cardD4 = ["score" => 4, 
                        "suit" => "Diamonds",
                        "rank" => "4"
                        ,"pic" => "<img src='img/cards/Diamonds/4.png' height='$h' width='$w'>&nbsp;"];
                $cardD5 = ["score" => 5, 
                        "suit" => "Diamonds",
                        "rank" => "5"
                        ,"pic" => "<img src='img/cards/Diamonds/5.png' height='$h' width='$w'>&nbsp;"];
                $cardD6 = ["score" => 6, 
                        "suit" => "Diamonds",
                        "rank" => "6"
                        ,"pic" => "<img src='img/cards/Diamonds/6.png' height='$h' width='$w'>&nbsp;"];
                $cardD7 = ["score" => 7, 
                        "suit" => "Diamonds",
                        "rank" => "7"
                        ,"pic" => "<img src='img/cards/Diamonds/7.png' height='$h' width='$w'>&nbsp;"];
                $cardD8 = ["score" => 8, 
                        "suit" => "Diamonds",
                        "rank" => "8"
                        ,"pic" => "<img src='img/cards/Diamonds/8.png' height='$h' width='$w'>&nbsp;"];
                $cardD9 = ["score" => 9, 
                        "suit" => "Diamonds",
                        "rank" => "9"
                        ,"pic" => "<img src='img/cards/Diamonds/9.png' height='$h' width='$w'>&nbsp;"];
                $cardD10 = ["score" => 10, 
                        "suit" => "Diamonds",
                        "rank" => "10"
                        ,"pic" => "<img src='img/cards/Diamonds/10.png' height='$h' width='$w'>&nbsp;"];
                $cardD11 = ["score" => 11, 
                        "suit" => "Diamonds",
                        "rank" => "J"
                        ,"pic" => "<img src='img/cards/Diamonds/11.png' height='$h' width='$w'>&nbsp;"];
                $cardD12 = ["score" => 12, 
                        "suit" => "Diamonds",
                        "rank" => "Q"
                        ,"pic" => "<img src='img/cards/Diamonds/12.png' height='$h' width='$w'>&nbsp;"];
                $cardD13 = ["score" => 13, 
                        "suit" => "Diamonds",
                        "rank" => "K"
                        ,"pic" => "<img src='img/cards/Diamonds/13.png' height='$h' width='$w'>&nbsp;"];
                        
                $cardH1 = ["score" => 1, 
                        "suit" => "Hearts",
                        "rank" => "A"
                        ,"pic" => "<img src='img/cards/Hearts/1.png' height='$h' width='$w'>&nbsp;"];
                $cardH2 = ["score" => 2, 
                        "suit" => "Hearts",
                        "rank" => "2"
                        ,"pic" => "<img src='img/cards/Hearts/2.png' height='$h' width='$w'>&nbsp;"];
                $cardH3 = ["score" => 3, 
                        "suit" => "Hearts",
                        "rank" => "3"
                        ,"pic" => "<img src='img/cards/Hearts/3.png' height='$h' width='$w'>&nbsp;"];
                $cardH4 = ["score" => 4, 
                        "suit" => "Hearts",
                        "rank" => "4"
                        ,"pic" => "<img src='img/cards/Hearts/4.png' height='$h' width='$w'>&nbsp;"];
                $cardH5 = ["score" => 5, 
                        "suit" => "Hearts",
                        "rank" => "5"
                        ,"pic" => "<img src='img/cards/Hearts/5.png' height='$h' width='$w'>&nbsp;"];
                $cardH6 = ["score" => 6, 
                        "suit" => "Hearts",
                        "rank" => "6"
                        ,"pic" => "<img src='img/cards/Hearts/6.png' height='$h' width='$w'>&nbsp;"];
                $cardH7 = ["score" => 7, 
                        "suit" => "Hearts",
                        "rank" => "7"
                        ,"pic" => "<img src='img/cards/Hearts/7.png' height='$h' width='$w'>&nbsp;"];
                $cardH8 = ["score" => 8, 
                        "suit" => "Hearts",
                        "rank" => "8"
                        ,"pic" => "<img src='img/cards/Hearts/8.png' height='$h' width='$w'>&nbsp;"];
                $cardH9 = ["score" => 9, 
                        "suit" => "Hearts",
                        "rank" => "9"
                        ,"pic" => "<img src='img/cards/Hearts/9.png' height='$h' width='$w'>&nbsp;"];
                $cardH10 = ["score" => 10, 
                        "suit" => "Hearts",
                        "rank" => "10"
                        ,"pic" => "<img src='img/cards/Hearts/10.png' height='$h' width='$w'>&nbsp;"];
                $cardH11 = ["score" => 11, 
                        "suit" => "Hearts",
                        "rank" => "J"
                        ,"pic" => "<img src='img/cards/Hearts/11.png' height='$h' width='$w'>&nbsp;"];
                $cardH12 = ["score" => 12, 
                        "suit" => "Hearts",
                        "rank" => "Q"
                        ,"pic" => "<img src='img/cards/Hearts/12.png' height='$h' width='$w'>&nbsp;"];
                $cardH13 = ["score" => 13, 
                        "suit" => "Hearts",
                        "rank" => "K"
                        ,"pic" => "<img src='img/cards/Hearts/13.png' height='$h' width='$w'>&nbsp;"];
                        
                $cardS1 = ["score" => 1, 
                        "suit" => "Spades",
                        "rank" => "A"
                        ,"pic" => "<img src='img/cards/Spades/1.png' height='$h' width='$w'>&nbsp;"];
                $cardS2 = ["score" => 2, 
                        "suit" => "Spades",
                        "rank" => "2"
                        ,"pic" => "<img src='img/cards/Spades/2.png' height='$h' width='$w'>&nbsp;"];
                $cardS3 = ["score" => 3, 
                        "suit" => "Spades",
                        "rank" => "3"
                        ,"pic" => "<img src='img/cards/Spades/3.png' height='$h' width='$w'>&nbsp;"];
                $cardS4 = ["score" => 4, 
                        "suit" => "Spades",
                        "rank" => "4"
                        ,"pic" => "<img src='img/cards/Spades/4.png' height='$h' width='$w'>&nbsp;"];
                $cardS5 = ["score" => 5, 
                        "suit" => "Spades",
                        "rank" => "5"
                        ,"pic" => "<img src='img/cards/Spades/5.png' height='$h' width='$w'>&nbsp;"];
                $cardS6 = ["score" => 6, 
                        "suit" => "Spades",
                        "rank" => "6"
                        ,"pic" => "<img src='img/cards/Spades/6.png' height='$h' width='$w'>&nbsp;"];
                $cardS7 = ["score" => 7, 
                        "suit" => "Spades",
                        "rank" => "7"
                        ,"pic" => "<img src='img/cards/Spades/7.png' height='$h' width='$w'>&nbsp;"];
                $cardS8 = ["score" => 8, 
                        "suit" => "Spades",
                        "rank" => "8"
                        ,"pic" => "<img src='img/cards/Spades/8.png' height='$h' width='$w'>&nbsp;"];
                $cardS9 = ["score" => 9, 
                        "suit" => "Spades",
                        "rank" => "9"
                        ,"pic" => "<img src='img/cards/Spades/9.png' height='$h' width='$w'>&nbsp;"];
                $cardS10 = ["score" => 10, 
                        "suit" => "Spades",
                        "rank" => "10"
                        ,"pic" => "<img src='img/cards/Spades/10.png' height='$h' width='$w'>&nbsp;"];
                $cardS11 = ["score" => 11, 
                        "suit" => "Spades",
                        "rank" => "J"
                        ,"pic" => "<img src='img/cards/Spades/11.png' height='$h' width='$w'>&nbsp;"];
                $cardS12 = ["score" => 12, 
                        "suit" => "Spades",
                        "rank" => "Q"
                        ,"pic" => "<img src='img/cards/Spades/12.png' height='$h' width='$w'>&nbsp;"];
                $cardS13 = ["score" => 13, 
                        "suit" => "Spades",
                        "rank" => "K"
                        ,"pic" => "<img src='img/cards/Spades/13.png' height='$h' width='$w'>&nbsp;"];
                
                            
                 
                //indexed array of the card objects      
                $deck = [$cardC1, $cardC2, $cardC3, $cardC4, $cardC5, $cardC6, $cardC7, $cardC8, $cardC9, $cardC10, $cardC11, $cardC12, $cardC13,
                        $cardD1, $cardD2, $cardD3, $cardD4, $cardD5, $cardD6, $cardD7, $cardD8, $cardD9, $cardD10, $cardD11, $cardD12, $cardD13,
                        $cardH1, $cardH2, $cardH3, $cardH4, $cardH5, $cardH6, $cardH7, $cardH8, $cardH9, $cardH10, $cardH11, $cardH12, $cardH13,
                        $cardS1, $cardS2, $cardS3, $cardS4, $cardS5, $cardS6, $cardS7, $cardS8, $cardS9, $cardS10, $cardS11, $cardS12, $cardS13];
        $row = $_POST['row'];
        $column = $_POST['column'];
        $omit = $_POST['omit'];
    if($row > 0 && $column > 0)
    {
        
        $chosenCards = [""];
        $chosenCardsIncrement = 0;
        $chosenImgs =[""];
        $Aces = 0;
        $Kings = 0;
        //Table that prints out image of player, cards, scores
        echo "<table align='center'>

        <td colspan = 7 align='center'><font size=\"18\"> Aces Vs. Kings</font></td></tr>";
        for ($j = 0; $j < $row; $j++)
        {
        echo "<tr>";
            for ($k = 0; $k < $column; $k++)
            {
                //cards for each players' hand
                $playersHand = [""];
                $cardInHand = $deck[array_rand($deck, 1)];
                while($cardInHand['suit'] == $omit)
                {
                         $cardInHand = $deck[array_rand($deck, 1)];
                }
                while(in_array($cardInHand, $chosenCards) == true)
                {
                        $cardInHand = $deck[array_rand($deck, 1)];
                }

                if($cardInHand['score'] == 1)
                {
                        echo "<td align='center' style='background-color:yellow'>";
                        echo $cardInHand["pic"];
                        $Aces++;
                        echo "</td>";
                }
                else if($cardInHand['score'] == 13)
                {
                        echo "<td align='center' style='background-color:cyan'>";
                        echo $cardInHand["pic"];
                        $Kings++;
                        echo "</td>";
                }
                else
                {
                        echo "<td align='center'>";
                        echo $cardInHand["pic"];
                        echo "</td>";
                }
                $chosenCards[$chosenCardsIncrement] = $cardInHand;
                $chosenCardsIncrement++;
                $playersHand[$i] = $cardInHand;
                $table[$j]["hand"]["cards"] = $playersHand;

                
            }
            echo "</tr>";
        }
        if ($Kings > $Aces)
        {
                echo "<td colspan = $column>";
                echo "There are " . $Kings . " Kings and " . $Aces . " Aces";
                echo "</br>Kings are the Winner!";
                echo "</td>";
        }
        else if ($Kings < $Aces)
        {
                echo "<td colspan = $column>";
                echo "There are " . $Kings . " Kings and " . $Aces . " Aces";
                echo "</br>Aces are the Winner!";
                echo "</td>";
        }
        else
        {
                echo "<td colspan = $column>";
                echo "There are " . $Kings . " Kings and " . $Aces . " Aces";
                echo "</br>There is no Winner!";
                echo "</td>";
                
        }
                
        echo "</table>";
    }
    ?>
    </body>
</html>

