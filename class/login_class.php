<?php
require_once("connect.php");
session_start();

$email = $_POST['email'];
$user_password = $_POST['password'];

$sql = $conn->query("SELECT * 
                              FROM users 
                              WHERE email='$email' AND password='$user_password'")->fetch();

$row_count= "SELECT COUNT(id) as num_rows 
              FROM users 
              WHERE email='$email' AND password='$user_password'";

$stmt = $conn->prepare($row_count);
$stmt -> execute(array($row_count));
$num_rows = $stmt->fetchColumn();

if($num_rows == 1 && $email == $sql['email'] && $user_password == $sql['password']) {
    $_SESSION['user_id']  = $sql['id'];
    $_SESSION['user_email'] = $sql['email'];
    $_SESSION['user_name'] = $sql['name'];
    $_SESSION['user_login'] = 1;
    header("Location: ../dashboard.php");
} else {
    $msg = "Invalid username and password!";
    echo $msg;
}
$conn=null;
