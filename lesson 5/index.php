<?php
//phpinfo();

$x = 5;
$name = "Puhiza";
$number = 9.14;

echo gettype ($x);
echo '<br>';
echo gettype ($name);
echo '<br>';
echo gettype ($number);

function addnumber( $number1, $number2){
    $sum= $number1+$number2;
    echo "<br> The sum of $number1 and $number2 is $sum";


}

addnumber(10,5);


function addproduct ($product1,$product2){
    $sum = $product1 * $product2;
    echo "<br> the sum of $product1 and $product2 is $sum";
}


addproduct (5,6);

function maxnumber ($number1,$number2){
    if ($number1 > $number2){
    return $number1;
    }else{$number2}

  
}
echo"<br> max is $max";
$max= maxnumber(5,7);




?>