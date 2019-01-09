<?php
require_once("../class/connect.php");
session_start();
$sql = $conn->prepare("SELECT * FROM post");
$sql->execute();
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
            <?php
        }
        ?>
    </div>

</header>
<lo>
<?php

while ($row = $sql->fetch(PDO::FETCH_ASSOC))
{
    ?>

    <a href="./edit_post.php?post=<?php echo $row['id']; ?>">

        <div class="rtl">
            <h4>
            <li>
                 [ویرایش] : <b><?php echo $row['title']; ?>  </b>
            </li>
            </h4>
        </div>
    </a>

    <?php
}
?>
</lo>
</body>
</html>
