<!DOCTYPE HTML>
<?php
require_once("./class/connect.php");
session_start();
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
            <div class="row" >
        <div class="rowpic">
            <img src="image/contact.jpg" alt="گرافیست" class="imgAbout">
        </div>
        <div class="rowtext">
        <p>
            اطلاعات تماس
        </p>
        <p>
            آدرس: تهران – میدان انقلاب – خیابان شهدای ژاندارمری – پلاک 136 – واحد 6
        </p>
        <p>
            ایمیل روابط عمومی: info [at] b-amooz.com
        </p>
        <p>
            ایمیل بخش فنی: technical [at] b-amooz.com
        </p>
        </div>
    </div>
<h1>ما اینجاییم</h1>
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>
</html>