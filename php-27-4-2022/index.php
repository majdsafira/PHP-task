<?php



echo "-----1-----</br>";
function primeCheck($number){
    if ($number == 1) {
    return 0;
    }
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0) {
            return 0;
        }
    }
    return 1;
}
 
$number = 31;
$flag = primeCheck($number);
if ($flag == 1) {
    echo "Prime";

} else {
    echo "Not Prime";
}






echo "</br>-----2-----</br>";
function rev($st) {
    return $st;
}

$x = rev("majd");
echo "Reverse string of $x is " .strrev ( $x );  






echo "</br>-----3-----</br>";
function test($low) {
    return $low;
}

$testcase = test("majd");
if (ctype_lower($testcase)) {
    echo "Your String is Ok ";
} else {
    echo "Your String is not Ok ";
}






echo "</br>-----4-----</br>";
function swap($num1, $num2, $num) {
    $num = $num1;
    $num1 = $num2;
    $num2 = $num;
    echo $num1, $num2;
}

$sw = swap(7, 2, 0);
echo $sw;





echo "</br>-----5-----</br>";
echo "</br>-----6-----</br>";

function armstrongNum($num){
    $len = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for($i=0; $i<$len; $i++){
        $sum +=  pow($num[$i],3);
    }
    if($sum == $num)
    echo "$num is Armstrong Number";
    else
    echo "$num is NOT Armstrong Number";

}
armstrongNum(407);






echo "</br>-----7-----</br>";
function isPalindrome($string)
{
    if (strcasecmp(strrev($string),$string)==0) {
        echo "Yes it is a palindrome";
    } else {
       echo "No it is not a palindrome";

    }

}
echo isPalindrome('Mum') . "\n";




echo "</br>-----8-----</br>";
$array1 = array(2, 4, 7, 4, 8, 4);
function removeDuplicate($arr){
    $newArr = array_unique($arr);
    print_r($newArr);
}
removeDuplicate($array1);

?>