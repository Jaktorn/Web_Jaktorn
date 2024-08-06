<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;" >Webboard Jaktorn</h1>
    <hr>
    <div style="text-align: center;"><br>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $user = htmlspecialchars($_POST['user']);
            $password = htmlspecialchars($_POST['password']);
            
            if ($user == "admin" && $password == "ad1234") {
                echo "ยินดีต้อนรับคุณ Admin";
            } elseif ($user == "member" && $password == "mem1234") {
                echo "ยินดีต้อนรับคุณ member";
            } else {
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
        }
        ?>
    </div>
    <div style="text-align: center;"><a href="index.php" style="color: blueviolet;">กลับสู่หน้าหลัก</a>
</body>
</html>