<html>
<body>
<title>Guessing game for Abhishek Mundada</title>
<h1>Welcome to my guessing game</h1>
</body>
<?php 
$randomnumber = 49;
$guess = $_GET[guess];

if(isset($guess) == false){
    echo "missing guess parameter\n";
}
else if($guess == null){
    echo "Your guess is too short\n";
}
else if(is_numeric($guess)!= true){
    echo "Your guess is not a number\n";
}
else{
    if($randomnumber > $guess){
        echo "Your guess is too low\n";
    }
    else if($randomnumber == $guess){
        echo "Congratulations - You are right\n";
    }
    else if($randomnumber < $guess){
        echo "Your guess is too high\n";
    }
}
?>
</html>