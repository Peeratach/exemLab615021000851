<h3>เพิ่มภาพยนต์ 
    <small>
        <a href=".">ย้อนกลับ
        </a>
    </small>
</h3>

<form action="insert.php" method="post"> 
    <label for="movie_id">รหัสภาพยนต์ : </label>
    <input type="text" name="movie_id" id="movie_id">
    <br><br>
    <label for="movie_name">ชื่อภาพยนต์ : </label>
    <input type="text" name="movie_name" id="movie_name">
    <br><br>
    <label for="movie_day">วันที่ฉาย : </label>
    <input type="date" name="movie_day" id="movie_day">
    <br><br>
    <label for="movie_time">เวลาที่ฉาย : </label>
    <input type="time" name="movie_time" id="movie_time">
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>