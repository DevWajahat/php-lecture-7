<?php

// numerical array
// $num = array (21,23,34,44,10,12);

// for ($i = 0 ; $i <= 5 ; $i++) {
//     echo  $num[$i] . "<br>";
// }

// for each loop numerical array

// foreach($num as $store){
//     echo $store . "<br>";
// }
 
// associative array

// $age= array('Wajahat'=> 24,'Ahsen' => 20,'Ahmed' => 18);

// for each loop associative array

// foreach ($age as $store){
//     echo $store. "<br>";
// }



// Multidimensional array

$student = array (
    array("Name" =>  "Rizwan", "Age" => 26, "Salary" => 30000),
    array("Name" =>  "Erum", "Age" => 22, "Salary" => 25000),
    array("Name" =>  "Kashif", "Age" => 40, "Salary" => 20000),
    array("Name" =>  "Tuba", "Age" => 21, "Salary" => 15000)
    
);

echo "My name is " . $student[2]["Name"]. " and ". $student [1]["Name"]. "my sis and her age is ". $student[1]["Age"];
?>