<!DOCTYPE html>
<html>
    <head>
        <?php
        $pageName = "Home: ";
        include "header.php" ?>
    </head>
    <body>
        <h1><?= "TMNT Store" ?></h1>
        
        <?php
        
            for($i = 0; $i < 10; $i++){
                jackUpPricing(rand(20,30), rand(70,80));
                echo "<br/><br/>";
            }
        
        function jackUpPricing($vatLevel2, $vatLevel3){
            $product1 = "Raphael Costume";
            $price1 = rand(1, 99) + rand(0,99) / 100;
            $tax1 = 0.0825;
            $tax2 = 2.0000;
            $tax3 = 0.9000;
            $vatLevel2 = 50.0;
            $vatLevel3 = 80.0;
           
           $totalPrice = $price1 * (1 + $tax1);
           $taxAmount = $price1 * $tax1;
           
           $totalPrice = number_format($totalPrice, 2);
           $taxAmount = number_format($taxAmount, 2);
            
            
            echo "<div> \"$product1\" </div>";
            echo "<div> Price: $$price1 </div>";
    
            
            if($price1 >= $vatLevel3)
            {
                $taxRate = $tax3;
            }
            
            else if ($price1 >= $vatLevel2)
            {
                $taxRate= $tax2;
            }
            
            else
            {
                $taxRate = $tax1;
            }
            
            $taxRate = number_format($taxRate, 2);
            
            echo "<div> Tax Rate: $taxRate</div>";
            echo "<div> Tax: $$taxAmount </div>";
            echo "<div> Total: $$totalPrice </div>";
        }
        

  
        
        
        ?>

    </body>
</html>

