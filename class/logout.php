<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_email']);
unset($_SESSION['user_name']);
unset($_SESSION['user_login']);

echo 'You are logout';
echo " <a href=\"../index.php\">خانه</a>";
