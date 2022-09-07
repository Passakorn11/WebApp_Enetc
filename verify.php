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
        <?php
        $a = $_POST["Login"];
        $b = $_POST["pass"];
        if($a=="admin"&&$b=="ad1234")echo "ยินดีต้อนรับคุณADMIN";
        elseif($a=="member"&&$b=="mem1234")echo "ยินดีต้อนรับคุณMEMBER";
        else echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";


?>
       <br> <a href="index2.php">กลับไปยังหน้าหลัก</a>

    </div>
    
    
</body>
</html>