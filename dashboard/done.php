<!DOCTYPE HTML>
<?php
require_once("../class/auth.php");
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<header>
    <div class="topnav">
        <a href="../index.php">خانه</a>
        <a href="../contact.php">ارتباط با ما</a>
        <a href="../about.php">درباره ما</a>
        <?php
        if(!isset($_SESSION['user_login'])){?>
            <a href="../login.php">ورود</a>
            <a href="../register.php">ثبت نام</a>
            <?php
        }
        ?>
        <?php
        if(isset($_SESSION['user_login']) && $_SESSION['user_login']==1){?>
            <a href="../class/logout.php">خروج از حساب کاربری</a>
            <a href="../dashboard.php">پنل مدیریت</a>
            <?php
        }
        ?>

    </div>

</header>
<div class="mg-top">
    <div>
        <img src="../image/done.png" style="width:250px;">
        <div >
            <h4><b>مطلب با موفقیت ارسال شد</b></h4>
            <p>این صفحه به صورت اتوماتیک به صفحه پنل کاربری انتقال پیدا میکند.</p>
        </div>
    </div>

</body>
<script>
setTimeout(function () {
//Redirect with JavaScript
window.location.href= '../dashboard.php';
}, 3000);
</script>
</html>