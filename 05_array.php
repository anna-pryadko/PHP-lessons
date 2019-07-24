<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

$numberList = array(267,8765,345,'5345', 345, '<h1>Hello</h1>');

//print_r($numberList);
    $NUM = 15;
    print_r($NUM);


 echo $numberList[5];
    
 $cars = array("Volvo", "BMW", "Toyota");
 echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
 $cars[] = "HONDA";
 print_r($cars);

 $cart = [];
 $cart[] = 13;
 $cart[] = "foo";
 print_r($cart);
 
?>

</body>
</html>