<!DOCTYPE html>
<html>
    <head>
        <title>Keven Siao</title>
    </head>
    <body>
        <?php
        for($i=1; $i<2; $i++){
            ${"randomValue" . $i} = rand(1,10);
        }
        
        $number= $_POST['number1'];
        $guesses = 0;
        $submitbutton= $_POST['test'];

        ?>
        
        
        Guess a Number Between 1 and 10: <br>
        <form action="" method="POST">
            Number 1: 
            <input type="text" name="number1">
            <br>
            Number 2: 
            <input type="text" name="number2">

            <br><br>
            <input type="submit" value="Test" name="test"/><br><br>
            <input type="submit" value="Give Up" name="giveup"/>
            <input type="submit" value="Reset" name="reset"/>
        </form>
        
        Result: 
        
        <?php
    while (!$won){
	$guesses++;
        if ($submitbutton){
            if (($number > 0) && ($number <11)){
                if ($number1 > $randomValue1){
                    echo "Incorrect guess. The correct number is lower than $number1. Try again";
                    if ($number2 > $randomValue2){
                    echo "Incorrect guess. The correct number is lower than $number2. Try again";
                    }
                    else if ($number2 < $randomValue2){
                    echo "Incorrect guess. The correct number is higher than $number2. Try again";
                    }
                }
                else if ($number1 < $randomValue1){
                    echo "Incorrect guess. The correct number is higher than $number1. Try again";
                    if ($number2 > $randomValue2){
                    echo "Incorrect guess. The correct number is lower than $number2. Try again";
                    }
                    else if ($number2 < $randomValue2){
                    echo "Incorrect guess. The correct number is higher than $number2. Try again";
                    }
                }
                else {
                    echo "$randomValue1 and $randomValue2 are the correct guesses. You got it right.";
                }
            }
                
        }
    }
            
        ?>

        




    </body>
</html>