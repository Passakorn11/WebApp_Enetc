<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css"></style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center ;">Webboard KakKak</h1><hr>
<form action="post.php" method="get">
    <div style="float:right ;"><a href="login.html">เข้าสู่ระบบ</a></div>
    <form>
        <select name="m">
            <option value="--ทั้งหมด--">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
    </form><br>
    <ul>
     <?php   
    /*for($i=1;$i<11;$i++){
        echo " <li><a href=post.php?id=$i>กระทู้ที่$i</a></li>";
    }*/
    $i=1;
    /*while($i<=10){
        echo " <li><a href=post.php?id=$i>กระทู้ที่$i</a></li>";
        $i++;
    }*/
    do{
        echo " <li><a href=post.php?id=$i>กระทู้ที่$i</a></li>";
        $i++;
    }while($i<=10);

    ?>
    </ul>
    
</form>
</body>
</html>