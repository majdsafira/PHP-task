
<?php


// PHP Basic Tasks                                            

// Date: 26/Apr/2022    Duration: until 4:00 am            
// Loops 

//  
//     1. 
$sum = 0;
for($i=0 ; $i <=30 ; $i++){
    $sum += $i; 
}
echo "<h1> $sum </h1>";







//     4. 
echo "<h1>";
$arr =[0,0,0,0,0];
for($i=0 ; $i<count($arr) ; $i++){
    echo "<br>";
    $arr[$i]=$i+1;
    for($j=0 ; $j < 5  ; $j++){
        echo  " " . $arr[$j] ;
    }
    $arr = [0,0,0,0,0];
}
echo "</h1>";


//     5.
function fact($num){
    for ($j=$num - 1; $j > 0; $j--) { 
        $num *= $j;
    }
    return $num;
}
echo "<h1>" .  fact(5) . "</h1>";

//     6. 

$fibon = [0,1];
// printing only the first 20 number on this example.
for ($i=2; $i <20; $i++) { 
    $fibon[$i] = $fibon[$i-1] + $fibon[$i-2];
}
echo "<h1>" . join(",",$fibon) . "</h1>";



//     9. 

function FloydTriangle($n){
  $rows = 1;
  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "$rows "; 
      $rows++;
    }
    echo "<br>"; 
  }
}
echo "<h1>";
FloydTriangle(12);
echo "</h1>";




