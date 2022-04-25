<!DOCTYPE html>
<html>

<body>

<?php  
$first = 10;
$second = 18;  
$third = 15;

if($first > $second && $third)
{
    
    echo " <h1> $first </h1>";    
} else if($second > $first && $third) {
    echo "<h1> $second </h1>";
} else if($third > $first && $second) {
    echo "<h1> $third </h1>";
}

?>

</body>

</html>