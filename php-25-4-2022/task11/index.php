<!DOCTYPE html>
<html>

<body>

<?php  
function calculator($num1, $num2, $sign){
    if($sign === "+"){
        return $num1 + $num2;
    }elseif($sign === "-"){
        return $num1 - $num2;
    }elseif($sign === "*"){
        return $num1 * $num2;
    }elseif($sign === "/"){
        return $num1 / $num2;
    }
}
echo calculator(2, 5 , "*");
?>

</body>

</html>