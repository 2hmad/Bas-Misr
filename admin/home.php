<!DOCTYPE html>
<html lang="ar">
    <head>
    <title>ادارة بوابة إخباري بالعربي</title>
        <?php include('links.php') ?>
    </head>
    <body style="direction:rtl;text-align:right">
<br><br><br>
<br><br><br>
<div class="container" style="border: 1px solid black;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    width: 500px;">
    <br>
    <h3 style="font-family: 'sans-serif', Cairo;color:#333b77;font-weight:bold">تسجيل الدخول</h3><br>
    <form method="POST">
        <input type="email" name="email-admin" style="min-width: 436px;
    display: block;
    border: 1px solid gray;
    border-radius: 10px;
    font-family: 'sans-serif', cairo;
    padding: 10px;
    margin-left:auto;
    margin-right:auto" placeholder="البريد الالكتروني الخاص بالمحررون"> <br>
        <input type="password" name="pass-admin" style="min-width: 436px;
    display: block;
    border: 1px solid gray;
    border-radius: 10px;
    font-family: 'sans-serif', cairo;
    padding: 10px;
    margin-left:auto;
    margin-right:auto" placeholder="كلمة المرور الخاصة بالمحررون"> <Br>
        <input type="submit" name="enter-admin" value="تسجيل الدخول" style="min-width: 180px;
    min-height: 40px;
    border: 1px solid gray;
    border-radius: 5px;
    font-family: 'sans-serif', Cairo;
    background-color: #333b77;
    color: white;
    font-weight:bold">
    </form>
    
    <?php
session_start();
ob_start();
        if(isset($_POST['enter-admin']) && !empty($_POST['email-admin']) && !empty($_POST['pass-admin'])) {
            $admin_email = $_POST['email-admin'];
            $admin_pass = SHA1($_POST['pass-admin']);    
            $sql = "SELECT * FROM admin_panel WHERE email = '$admin_email' && pass = '$admin_pass'";
            $query = mysqli_query($connect, $sql);
            $count = mysqli_num_rows($query);
                if($count > 0) {
                    $_SESSION['email-admin'] = $admin_email;
                    header("location: admin-panel.php");
                }else{
                    echo "كلمة المرور او البريد الالكتروني غير صحيح";
                }                  
        }

    ?>

    <br>
</div>
<br><br><br>
<br><br><br>
    </body>
    <?php include('../scripts.php') ?>
</html>