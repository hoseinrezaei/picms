<!DOCTYPE HTML>
<?php
require_once("./class/connect.php");
session_start();
$sql = $conn->prepare("SELECT * FROM post");
$sql->execute();
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body class="rtl">
<header>
    <div class="topnav">
        <a href="./index.php">خانه</a>
        <a href="./contact.php">ارتباط با ما</a>
        <a href="./about.php">درباره ما</a>
        <?php
        if (!isset($_SESSION['user_login'])) {
            ?>
            <a href="./login.php">ورود</a>
            <a href="./register.php">ثبت نام</a>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION['user_login']) && $_SESSION['user_login'] == 1) {
            ?>
            <a href="./class/logout.php">خروج از حساب کاربری</a>
            <a href="./dashboard.php">پنل مدیریت</a>
            <?php
        }
        ?>
    </div>

</header>
    <div class="row">
        <div class="rowpic">
            <img src="image/workplace.jpg" alt="محیط کار پیک سی ام اس" class="imgAbout">
        </div>
        <div class="rowtext">
            <h3>
                محیط کاری دوستانه و صمیمی
            </h3>
            <p>
                ما در شرکت پیک سی ام اس کوشیده ایم تا با ایجاد محیطی مدرن و خلاق از برنامه نویسان حرفه ای با رهبری حسین رضائی استفاده کنیم.
            </p>
            <p>
               یه متن همینطوری الکی برای پر کردن فضا و حرفه ای جلوه دادن متن ها تا بتوانیم کار را بزرگ تر کنیم و از شرکت گوگل برای ترقیب مشتریان استفاده کنیم. با توجه به گسترش روز افزون تکنولوژی میتوان درآمد بیشتری داشت 
            </p>
        </div>
    </div>

    <div class="row" >
        <div class="rowpic">
            <img src="image/graphist.png" alt="گرافیست" class="imgAbout">
        </div>
        <div class="rowtext">
            <h3>
                گرافیک خلاقانه
            </h3>
            <p>
                گرافیست های شرکت از خلاق ترین هنرمندان کشور هستند.
            </p>
            <p>
                در مجموعه پیک سی ام اس تلاش شده است تا خلاق ترین گرافیست کاران کشور را جذب و همچنین از بروز ترین امکانات استفاده کنند تا بتوانند تصاویری مجذوب ککنده ایجاد کنند.
            </p>
        </div>
    </div>
    
    <div class="row" >
        <div class="rowpic">
            <img src="image/programmer.png" alt="گرافیست" class="imgAbout">
        </div>
        <div class="rowtext">
            <h3>
                برنامه نویس
            </h3>
            <p>
                برنامه نویس شرکت از خلاق ترین هنرمندان کشور هستند.
            </p>
            <p>
                در مجموعه پیک سی ام اس تلاش شده است تا خلاق ترین گرافیست کاران کشور را جذب و همچنین از بروز ترین امکانات استفاده کنند تا بتوانند تصاویری مجذوب ککنده ایجاد کنند.
            </p>
        </div>
    </div>
    
    <div class="row" >
        <div class="rowpic">
            <img src="image/callcenter.png" alt="گرافیست" class="imgAbout">
        </div>
        <div class="rowtext">
            <h3>
                پشتیبانی 7/24 همیشه در کنار شما
            </h3>
            <p>
                مشکلات خود را به پشتیبانی ما مطرح کنید.
            </p>
            <p>
                در مجموعه پیک سی ام اس تلاش شده است تا خلاق ترین گرافیست کاران کشور را جذب و همچنین از بروز ترین امکانات استفاده کنند تا بتوانند تصاویری مجذوب ککنده ایجاد کنند.
            </p>
        </div>
    </div>
        
    

</body>
</html>