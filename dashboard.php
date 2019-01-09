<!DOCTYPE HTML>
<?php
require_once("class/auth.php");
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
<header>
    <div class="topnav">
        <a href="./index.php">خانه</a>
        <a href="./contact.php">ارتباط با ما</a>
        <a href="./about.php">درباره ما</a>
        <?php
        if(!isset($_SESSION['user_login'])){?>
            <a href="./login.php">ورود</a>
            <a href="./register.php">ثبت نام</a>
            <?php
        }
        ?>
        <?php
        if(isset($_SESSION['user_login']) && $_SESSION['user_login']==1){?>
            <a href="./class/logout.php">خروج از حساب کاربری</a>
            <a href="./dashboard.php">پنل مدیریت</a>
            <?php
        }
        ?>

    </div>

</header>
<div class="mg-top">
    <div class="card" style="background: #A9DFBF;">
        <a href="./dashboard/post.php">
        <div class="container">
            <h4><b>نوشتن مطلب جدید</b></h4>
            <p>نوشتن پست جدید</p>
        </div>
        </a>
    </div>
    <div class="card" style="background: #D5DBDB;">
        <a href="./dashboard/post_list.php">
        <div class="container">
            <h4><b>مدیریت مطالب</b></h4>
            <p>Content Management</p>
        </div>
        </a>
    </div>
    <div class="card" style="background: #BFC9CA;">
        <a href="./dashboard/password.php">
        <div class="container">
            <h4><b>تغییر رمز عبور</b></h4>
            <p>change password</p>
        </div>
        </a>
    </div>

    <div class="card" style="background: #C39BD3;">
        <a href="./class/logout.php">
        <div class="container">
            <h4><b>خروج از حساب کاربری</b></h4>
            <p>Exit account</p>
        </div>
        </a>
    </div>
</div>

</body>
</html>
