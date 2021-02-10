<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ภาพยนต์</title>
</head>
<body>
<?php
    require_once("dbcon.php");
    session_start();
    
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM user WHERE users_id = '{$_POST['users_id']}' AND users_pin = '{$_POST['users_pin']}'";
        $result = $conn->query($sql); //อ่านข้อมูล
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["users_id"] = $row['users_id'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }

    if(isset($_POST['logout'])) {
        session_unset(); //รีค่า
    }

    if(isset($_SESSION['users_id'])) {
        require_once("tablemovie.php"); // เรียกใช้ table.php
    } else {
        require_once("login.php");//เรียกใช้ หน้า Login
    }
?>
</body>
</html>