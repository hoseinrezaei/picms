<?php

require_once("connect.php");
require_once("../class/auth.php");

$fileName = $_FILES["image"]["name"];

$target = "../include/image/";
$fileTarget = $target.$fileName;
$tempFileName = $_FILES["image"]["tmp_name"];
$user_id=$_SESSION['user_id'];
$fileDescription = $_POST['description'];
$title = $_POST['title'];
$result = move_uploaded_file($tempFileName,$fileTarget);

if($result) {
    $fileTarget = ".".ltrim($fileTarget,".");
    $sql = "INSERT INTO post(image_addres, image_name, description, user_id, title) VALUES ('$fileTarget','$fileName','$fileDescription','$user_id','$title')";
    $conn->exec($sql);
    echo "اطلاعات با موفقیت ذخیره شد.";
}
else {
    echo "در ارتباط با سرور مشکلی پیش آمده است. لطفا دقایقی دیگر امتحان کنید.";
}
$conn=null;
