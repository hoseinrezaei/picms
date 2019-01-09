<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/post_send.css">
</head>
<?php
require_once("../class/connect.php");
session_start();
$post_id=$_GET['post'];
$sql = $conn->prepare("SELECT * FROM post where id='$post_id'");
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
$description =$row['description'];
$title =$row['title'];
$image_addres =$row['image_addres'];
?>
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
            <?php
        }
        ?>
    </div>
</header>

<div class="div-post">
    <form action="../class/post_update.php" method=POST enctype="multipart/form-data" class="div-post">
        <h1>ارسال عکس جدید</h1>

        <label for="title"><b>عنوان</b></label>
        <input type="text" placeholder="عنوان" name="title" value="<?php echo $title ?>" required>

        <label for="description"><b>توضیحات</b></label>
        <br>
        <textarea name="description" rows="20" cols="70" ><?php echo $description ?></textarea>
        <br>
        <label for="Image"><b>Select an image</b></label>
        <input type="file" placeholder="select an image" name="image"  class="input-file" >

        <input type="hidden" value="<?php echo $post_id ?>" name="post_id">

        <button type="submit" class="btn">ارسال پست</button>
    </form>
</div>

</body>
</html>
