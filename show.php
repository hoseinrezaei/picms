<?php
require_once("./class/connect.php");
session_start();
$post_id=$_GET['post'];
$sql = $conn->prepare("SELECT * FROM post where id='$post_id'");
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
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
<br>
    <div class="show">
        <img src="<?php echo $row['image_addres']; ?>" alt="Avatar" class="img-style">
        <div>
            <h4><b><?php echo $row['title']; ?></b></h4>
            <p><?php echo $row['description']; ?></p>
        </div>
    </div>

</body>
<script src="./js/slideshow.js"></script>
</html>
