<h1>ส่งค่า Update</h1>
<br><br>
<small><a href="index.php">กลับหน้าหลัก</a></small>

<?php
    require_once("dbcon.php");
    $sql = "UPDATE movies SET
            movie_name = '{$_POST['movie_name']}',
            movie_day = '{$_POST['movie_day']}',
            movie_time = '{$_POST['movie_time']}'
            WHERE movie_id = '{$_POST['movie_id']}' ";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>