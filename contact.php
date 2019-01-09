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
        اطلاعات تماس
        آدرس: تهران – میدان انقلاب – خیابان شهدای ژاندارمری – پلاک 136 – واحد 6
        ایمیل روابط عمومی: info [at] b-amooz.com
        ایمیل بخش فنی: technical [at] b-amooz.com
        </p>
    </div>

	</body>

</html>