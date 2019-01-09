<!DOCTYPE HTML>
<?php
require_once("./class/connect.php");
session_start();
$sql = $conn->prepare("SELECT * FROM post");
$sql->execute();
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="./css/form.css">
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
<div>
    <br>
    <br>
    <p>
    وبسایت پیک سی ام اس، توسط مجموعه ای از کارشناسان زبان با هدف کمک به یادگیری زبان های مختلف برای فارسی زبانان طراحی شده است. تمام تلاش ما در طراحی این وبسایت ایجاد یک محیط کامل آموزشی برای یادگیری به ویژه برای نوآموزان بوده. محصولات گروه آموزشی بیاموز در حال حاضر شامل این وبسایت، اپلیکیشن و دیکشنری آموزشی بیاموز است.
    </p>
</div>
	</body>

</html>