<?php

//     1. 
$colors = array('white', 'green', 'red');
echo "<ul>";
foreach ($colors as $value) {
    echo "<li> $value </li>" ;
}
echo "</ul>";





//     2. 
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($cities);
foreach ($cities as $key => $value) {
    echo "The capital of $key is $value <br>";
}


//     3. 
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color["4"] . "<br>";




//     4. 
$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $value) {
    echo $key . "= " . $value . "<br>";
}


//     8. 
$words= array("abcd","abc","de","hjjj","g","wer");

$lengths = array_map('strlen', $words);

echo "The shortest array length is " . min($lengths) . ". The longest array length is " . max($lengths) . ".";

		          