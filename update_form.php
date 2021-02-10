<?php
    require_once("dbcon.php");
    $sql = "SELECT * FROM movies WHERE movie_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
?>

<h3>แก้ไขภาพยนต์ 
    <small>
        <a href=".">ย้อนกลับ
        </a>
    </small>
</h3>

<form action="update.php" method="post"> 
    <label for="movie_id">รหัสภาพยนต์ : </label>
    <?php echo $row['movie_id']; ?>
    <input type="hidden" name="movie_id" id="movie_id" value="<?php echo $row['movie_id']; ?>">
    <br><br>
    <label for="movie_name">ชื่อภาพยนต์ : </label>
    <input type="text" name="movie_name" id="movie_name" value="<?php echo $row['movie_name']; ?>">
    <br><br>
    <label for="movie_day">วันที่ฉาย : </label>
    <input type="date" name="movie_day" id="movie_day" value="<?php echo $row['movie_day']; ?>">
    <br><br>
    <label for="movie_time">เวลาที่ฉาย : </label>
    <input type="time" name="movie_time" id="movie_time" value="<?php echo $row['movie_time']; ?>">
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>