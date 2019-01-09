<!DOCTYPE HTML>
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
		
		<div class="bg-img">
			<form action="./class/register_class.php" method=POST class="container">
				<h1>Register</h1>

				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>

				<button type="submit" class="btn">Register</button>
			</form>
		</div>

	</body>

</html>