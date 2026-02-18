<?php

$number=-4;


if ($number > 0) {
    echo "The number is positive.";
} 
else if($number < 0){
    echo "The number is not positive.";
}
else{
    echo "it is not a number" ;
}
echo "<br>";
$person = [
    "name" => "Ali",
    "age" => 25,
    "city" => "Karachi"
];

print_r($person);
echo "<br>";
$cars_obj = [
   "cars" => "fortuner",
   "color" => "black",
    "price" => "2 cr",
];
    


print_r($cars_obj)


?>