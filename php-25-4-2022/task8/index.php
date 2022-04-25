
<!DOCTYPE html>
<html>

<body>

<?php  

function electricBill($voltage){
    if ($voltage > 0 && $voltage <= 50){
        return "<h1> Your bill is: " . $voltage * 2.5 . "JOD";
    }
    elseif($voltage > 50 && $voltage <= 150){
        return "<h1> Your bill is: " . 50 * 2.5 + ($voltage - 50) * 5 . "JOD";
    }
    elseif($voltage > 150 && $voltage <= 250){
        return "<h1> Your bill is: " . 50 * 2.5 + 100 * 5 + ($voltage - 150) * 6.2 . "JOD";
    }
    elseif($voltage > 250){
        return "<h1> Your bill is: " . 50 * 2.5 + 100 * 5 + 100 * 6.2 + ($voltage - 250) * 7.5 . "JOD";
    }
    else{
        return "Please enter a valid number";
    }
}
echo electricBill(40);

?>

</body>

</html>