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
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align:center ;">Webboard KakKak</h1><hr>
  <form action="verify.php" method="post">
 <table style="border:2px solid black ;width:40%" align="center">
    <tr><td style="background-color:#6CD2FE ;" colspan="2" >เข้าสู่ระบบ</td></tr>
    <tr><td>Login</td><td><input type="text" name="Login" size="50"></td></tr> 
    <tr><td>Password</td><td><input type="password" name="pass" size="50"></td></tr>
    
    <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
    
 </table>
 <br>
 <div style="text-align: center;">ถ้ายังไม้ได้เป็นสมาชิก<a href="register.php">กรุณาสมัครสมาชิก</a></div>

</form> 
     

    
</body>
</html>