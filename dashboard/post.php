<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/post_send.css">
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
            <?php
        }
        ?>
    </div>
</header>

<div class="div-post">
    <form action="../class/post_send.php" method=POST enctype="multipart/form-data" class="div-post">
        <h1>ارسال عکس جدید</h1>

        <label for="title"><b>عنوان</b></label>
        <input type="text" placeholder="عنوان" name="title" required>

        <label for="description"><b>توضیحات</b></label>
        <br>
        <textarea name="description" rows="20" cols="70"></textarea>
        <br>
        <label for="Image"><b>Select an image</b></label>
        <input type="file" placeholder="select an image" name="image" required class="input-file">

        <button type="submit" class="btn">ارسال پست</button>
    </form>
</div>

</body>
</html>
