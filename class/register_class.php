<?php
require_once("connect.php");
session_start();
echo "<br>";

$sql = "INSERT INTO users (password, email) VALUES ('".$_POST['password']."', '".$_POST['email']."')";
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

