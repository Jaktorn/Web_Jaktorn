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
    
    <div style="text-align: center;">
        ต้องการดูกระทู้หมายเลข <?php echo "$_GET[id]"."<br>";
        $num=$_GET["id"];
        if($num %2==0){
            echo"เป็นกระทู้หมายเลขคู่";
        }else
            echo"เป็นกระทู้หมายเลขคี่";
        ?>
        <br><br>
        <table style="border: 2px solid black; width: 40%" align="center">
        <tr><td><div style="background-color: #6CD2FE;">แสดงความคิดเห็น</div></td></tr>
        <tr><td><textarea name="message" cols="60" rows="5"></textarea></td></tr>
        <tr><td><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    <br>
    <div style="text-align: center;"><a href="index.php" style="color: blueviolet;">กลับสู่หน้าหลัก</a>
    </div>
</body>
</html>