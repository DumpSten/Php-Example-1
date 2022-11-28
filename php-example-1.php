
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"My Website";  ?></title>
</head>
<body>
<?php
    $name="Alper Çatal";
    $Name="Alper Çatal 2";
    $namE="Alper Çatal 3";
    echo $name;
    echo "</br>";
    echo $Name;
    echo "</br>";
    echo $namE;
    echo "</br>";
    echo "-----------------------------------------------";
    echo "</br>";
    echo  "Data Types";
    echo "</br>"; 
    echo "-----------------------------------------------";
    echo "</br>";    

    $string ="Alper Çatal";
    $int = 500;
    $float = 5.5;
    $bool = false;
    $array = array();
    $object = new stdClass;
    $null = NULL;

    echo gettype ($bool);
    echo "</br>"; 
    echo gettype ($int);
    echo "</br>"; 
    echo "-----------------------------------------------";
    echo "</br>";
    echo  "constant variables";
    echo "</br>"; 
    echo "-----------------------------------------------";
    echo "</br>";   
    
    $example="Alper Çatal";
    //echo $name2;
     
    define("example","Alper Çatal ds "); 
    define("ExamplE","Alper Çatal 4"); 
    echo example;
    echo "</br>";  
    echo ExamplE;
    echo "</br>"; 
    echo "-----------------------------------------------";
    echo "</br>";
    echo  "magic characters";
    echo "</br>"; 
    echo "-----------------------------------------------";
    echo "</br>";   
    $test="Alper\tÇ\natal  \\test\  ";
    echo $test;
    $ad = "alper";
    echo "</br>";
    echo " \$ad değişkeni $ad değerine eşittir";
    echo "</br>";
    echo "Alper Say: \"Hello\"...";
?> 
</body>
</html>