<?php
    require_once("dbcon.php");
    $sql = "INSERT INTO movies (movie_id, movie_name, movie_day, movie_time)
    VALUES ('{$_POST['movie_id']}', '{$_POST['movie_name']}', '{$_POST['movie_day']}', '{$_POST['movie_time']}')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
<?php
    echo "";
?>
<br><br>
<small><a href="index.php">กลับหน้าหลัก</a></small>