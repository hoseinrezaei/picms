<?php
session_start();

if($_SESSION['user_login']==0){
    header("Location: ./login.php");
}

