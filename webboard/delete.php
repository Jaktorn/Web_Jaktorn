<?php
session_start();
if(isset($_SESSION['id'])&&$_SESSION['role']=='admin'){
    $id=$_GET['id'];
    echo "ลบกระทู้ หมายเลข $id";
}else{
    header("location:index.php");
    die();
}
?>