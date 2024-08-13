<?php
session_start();

// กำหนดค่าล็อกอินเบื้องต้น
$login = $_POST['login'];
$pwd = $_POST['pwd'];

// ตรวจสอบข้อมูลเบื้องต้นแบบง่าย
if ($login === 'admin' && $pwd === 'ad1234') {
    $_SESSION['id'] = 1;
    $_SESSION['username'] = 'admin';
    $_SESSION['role'] = 'admin'; // บทบาท admin
    $welcomeMessage = "ยินดีต้อนรับคุณ ADMIN";
} elseif ($login !== 'admin' && $pwd === 'mem1234') {
    $_SESSION['id'] = 2;
    $_SESSION['username'] = 'member';
    $_SESSION['role'] = 'member'; // บทบาท member
    $welcomeMessage = "ยินดีต้อนรับคุณ MEMBER";
} else {
    $welcomeMessage = "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    header("refresh:3; url=index.php"); // ให้รอ 3 วินาทีแล้วกลับไปหน้า index.php
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Jaktorn</h1>
    <hr>
    <div style="text-align: center;"><br>
        <?php echo $welcomeMessage; ?>
    </div>
    <div style="text-align: center;">
        <a href="index.php" style="color: blueviolet;">กลับสู่หน้าหลัก</a>
    </div>
</body>
</html>
