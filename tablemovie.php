<?php
    require_once("dbcon.php");

    if(isset($_GET['delete'])) {
        $sql = "DELETE FROM movies WHERE movie_id = '{$_GET['id']}'";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    $sql = "SELECT * FROM movies";
    if(isset($_GET['search_click'])) {
        $sql = "SELECT * FROM movies WHERE movie_id LIKE '%{$_GET['search']}%' OR movie_name LIKE '%{$_GET['search']}%'";
        echo "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
    }
    $result = $conn->query($sql);
?>


<form action="." method="get">
    <label for="search">ช่องค้นหา</label>
    <input type="text" name="search" id="search" placeholder="ช่องค้นหา...">
    <button type="submit" name="search_click">ค้นหา</button>
</form>

<form action="." method="post">
    <button type="submit" name="logout">ออกจากระบบ</button>
</form>

<button><a href="insert_form.php">เพิ่มภาพยนต์</a></button>
<table style="width:100%;" border="1">
    <tr>
        <th>รหัสภาพยนต์</th>
        <th>ชื่อภาพยนต์</th>
        <th>วันที่เริ่มฉาย</th>
        <th>เวลาที่เริ่มฉาย</th>
        <th>จัดการ</th>
    </tr>
<?php
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['movie_id']; ?></td>
        <td><?php echo $row['movie_name']; ?></td>
        <td><?php echo $row['movie_day']; ?></td>
        <td><?php echo $row['movie_time']; ?></td>
        
        <td align="center">
        
            <button><a href="update_form.php?id=<?php echo $row['movie_id']; ?>">แก้ไข</a></button>
            <button><a href="?delete=1&id=<?php echo $row['movie_id']; ?>">ลบ</a></button>
        </td>
    </tr>
<?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
</table>