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
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <img src="./image/slide1.jpg" style="width:100%; border-radius: 10px;">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <img src="./image/slide2.jpg" style="width:100%; border-radius: 10px;">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <img src="./image/slide3.jpg" style="width:100%; border-radius: 10px;">
        <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<?php

while ($row = $sql->fetch(PDO::FETCH_ASSOC))
{
?>
    <a href="./show.php?post=<?php echo $row['id']; ?>">
    <div class="card">
        <img src="<?php echo $row['image_addres']; ?>" alt="Avatar" class="img-style">
        <div class="container">
            <h4><b><?php echo $row['title']; ?></b></h4>
            <p><?php echo $row['description']; ?></p>
        </div>
    </div>
    </a>
<?php
}
?>
</body>
<script src="./js/slideshow.js"></script>
</html>
