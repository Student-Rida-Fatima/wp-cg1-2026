 <?php

// $number=-4;


// if ($number > 0) {
//     echo "The number is positive.";
// } 
// else if($number < 0){
//     echo "The number is not positive.";
// }
// else{
//     echo "it is not a number" ;
// }
// echo "<br>";
// $person = [
//     "name" => "Ali",
//     "age" => 25,
//     "city" => "Karachi"
// ];

// print_r($person);
// echo "<br>";
// $cars_obj = [
//    "cars" => "fortuner",
//    "color" => "black",
//     "price" => "2 cr",
// ];
    


// print_r($cars_obj);
// echo "<br>";

// $car=["mehran","audi","BMW","CIVIC"];
// print_r($car);

// $std_number= 40;
// if ($std_number >= 80) {
//     echo "Student pass  with A1 grade.";
// } 
// else if($std_number >= 60){
//     echo "Student pass  with B grade.";
// }
// else if($std_number  >= 50){
//     echo "Student pass  with c grade.";
// }
// else{
//     echo "<h1>Failed</h1>" ;
// }
// echo "<br>";


// $car_name= ( "audi","civic","BMW");
// // print_r($car_name);

// for ($i = 0; $i < count($car_name); $i++) {
//     echo "$car[i]. <br>";
// }



$name = "Ali";
$marks = [80, 75, 85];  

$total = array_sum($marks);

$average = $total / count($marks);

if ($average >= 80) {
    $grade = "A";
} elseif ($average >= 70) {
    $grade = "B";
} elseif ($average >= 60) {
    $grade = "C";
} else {
    $grade = "F";
}

echo "Name: " . $name . "<br>";
echo "Total: " . $total . "<br>";
echo "Average: " . $average . "<br>";
echo "Grade: " . $grade . "<br>"."<br>"."<br>";


 echo"<h1> products </h1> .<br> ";
$products = [
    "Mobile Phone" => 10,
    "Machine" => 5,
    "Laptop" => 7
];

foreach ($products as $product => $quantity) {
    echo "Product: " . $product . " - Quantity: " . $quantity . "<br>";
}


?>  