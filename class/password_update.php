<?php
require_once("connect.php");
session_start();
echo "<br>";
$password= $_POST['password'];
$user_id = $_SESSION['user_id'];

$sql = "UPDATE users SET password='$password' WHERE id='$user_id'";
try {
    $conn->exec($sql);
    header("Location: ../dashboard.php");
}
catch(PDOException $e)
{
    echo $e;
    echo "<br>";
}
$conn=null;
