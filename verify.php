<?php
session_start();
if(isset($_SESSION['id'])){
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
<?php
if(isset($_SESSION['id'])) {
    header("location:index.php");
    die();
}
?>
<body>
    <h1 style="text-align:center ;">Webboard KakKak</h1><hr> 
    <div align="center">
        <?php
        $login = $_POST["Login"];
        $pwd = $_POST["pass"];
        if($login=="admin"&&$pwd=="ad1234"){
            echo "ยินดีต้อนรับคุณ ADMIN";
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']=session_id();
        }
        elseif($login=="member"&&$pwd=="mem1234"){
            echo "ยินดีต้อนรับคุณ MEMBER";
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']=session_id();
        }
        else echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";


?>
       <br> <a href="index.php">กลับไปยังหน้าหลัก</a>

    </div>
    
    
</body>
</html>