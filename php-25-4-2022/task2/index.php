<!DOCTYPE html>
<html>

<body>

    <form action="index.php" method = "get">
        temp: <input type="text" name="temp">
        <input type="submit">
    </form>
<?php  
@$temp1 = $_GET["temp"];
if ($temp1 == null) {echo "please enter the temp";}
else {
if($temp1 < 20 )
{
echo "we are in winter";    
}
else  
{  
echo " its summer time.";    
}}
?>

</body>

</html>