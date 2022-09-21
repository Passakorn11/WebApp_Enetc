<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align:center ;">Webboard KakKak</h1><hr>
<?php echo "ผู้ใช้ :  $_SESSION[username]"; ?><br>
<table>
<tr><td>หมวดหมู่:</td><td>
        <select name="m">
            <option value="--ทั้งหมด--">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select><td><tr>

        <tr><td>หัวข้อ:</td><td><input type="text" name="topic" size="20"><td><tr>
        <tr><td>เนื้อหา:</td><td><textarea name="message"row="2"col="30"></textarea><td><tr>
        <tr><td></td><td><input type="submit" value="บันทึกข้อความ"><td><tr>           
</table>
</body>
</html>