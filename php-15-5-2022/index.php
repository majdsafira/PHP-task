<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label>UserName:</label>
        <input type="text" name="user_name" placeholder="Name" required>
        <label>Position:</label>
        <input type="text" name="position" placeholder="Position" required>
        <label>Birthday:</label>
        <input type="date" name="birth" required>
        <label>Salary:</label>
        <input type="text" name="salary" placeholder="salary" required>
        <label>PhoneNumber:</label>
        <input type="text" name="phone_num" placeholder="phonenumber" required>

        <input type="submit" name="submit">
    </form>

    <?php
        include('./check/check_connect.php');
        
        if(isset($_POST['submit'])) {

            $user_name = $_POST['user_name'];
            $position = $_POST['position'];
            $birth = $_POST['birth'];
            $salary = $_POST['salary'];
            $phone_num = $_POST['phone_num'];


            $data="INSERT INTO `employee` (`userName`, `position`, `birthday`, `salary`, `phoneNum`, `id`) 
            VALUES ('$user_name', '$position', '$birth', '$salary', '$phone_num', NULL)
                ";
            $db = mysqli_query($conn , $data);
            


        };


        
            $query = "SELECT * FROM employee";

            $db = mysqli_query($conn, $query);
            
            if($db == false){
                
                echo "Error: " . $query. "<br>" .$conn->error;
            }
            
            
                $arr =  $db->fetch_all();


            echo "<table border='1px'>
            <tr>
                <th>username</th>
                <th>position</th>
                <th>birth</th>
                <th>salary</th>
                <th>phone number</th>
            </tr>
            ";
            foreach($arr as $key){
                echo "<tr>";
                    foreach($key as $value)
                        echo "<td>" .$value ."</td>";
                        
                echo "</tr>";
            }
            echo "</table>";
?>

</body>

</html>