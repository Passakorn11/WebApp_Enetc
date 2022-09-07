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
     <div align="center">
        ต้องการดูกระทู้หมายเลข<?php echo $_GET["id"]; ?> <br>
        <?php
        $n = $_GET["id"];
        if(($n%2)==0) echo "เป็นกระทู้หมายเลขคู่";
        else echo "เป็นกระทู้หมายเลขคี่";
        ?>
        <table style="border:2px solid black ;width:40%" align="center">
        <tr><td style="background-color:#6CD2FE ;" colspan="2" >แสดงความคิดเห็น</td></tr>
        <tr><td colspan="2" align="center"><textarea name="message"row="10"col="30"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>





        <a href="index2.php">กลับสู่หน้าหลัก</a>

     </div> 
</body>
</html>