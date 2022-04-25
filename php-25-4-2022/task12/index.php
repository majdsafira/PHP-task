<!DOCTYPE html>
<html>

<body>

<?php  
function GPA($arr){
    $grade = "";
    $sum=0;
    foreach($arr as $grade){
        $sum += $grade;
    }
    $sum /= count($arr);
    switch($sum){
        case $sum <= 60:
            $grade = "F";
            break;
        case $sum <= 70 :
            $grade = "D";
            break;
        case $sum <= 80:
            $grade = "C";
            break;
        case $sum <= 90:
            $grade = "B";
            break;
        case $sum <= 100:
            $grade = "A";
            break;
    }
    return $grade;
}
echo GPA([60,86,95,63,55,74,79,62,70]);
?>

</body>

</html>