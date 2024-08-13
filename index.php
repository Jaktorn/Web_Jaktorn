<?php 
    session_start(); // ต้องใส่เครื่องหมาย ; ปิดท้าย
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Jaktorn</h1>
    <hr>
    หมวดหมู่: 
    <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <?php
             if (!isset($_SESSION['id'])) {
                echo "<a href='login.php' style='float: right;'> เข้าสู่ระบบ </a>";
            } else {
                echo "<div style='float: right;'>
                    ผู้ใช้งานระบบ : " . htmlspecialchars($_SESSION['username']) . "&nbsp;&nbsp;
                    <a href='logout.php'>ออกจากระบบ</a>
                </div>";
                echo "<br><a href='newpost.php'>สร้างกระทู้ใหม่</a>";
            }
        ?>
    <br><br>
    <ul>
    <?php
    for($i=1; $i<=10;$i++){ 
        echo "<li><a href='post.php?id=$i'> กระทู้ที่ $i</a>";
        
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            echo " <a href='delete.php?id=$i' style='color: blue;'>ลบ</a>";
        }
        
        echo "</li>";
    }
    ?>
    </ul>
</body>
</html>
