<?php
require_once("connect.php");
require_once("../class/auth.php");
$fileExistsFlag = 0;
$fileName = $_FILES['image']['name'];

/*
* 	If file is not present in the destination folder
*/
if($fileExistsFlag == 0) {
    $target = "../include/image/";
    $fileTarget = $target.$fileName;
    $tempFileName = $_FILES["image"]["tmp_name"];
    $user_id=$_SESSION['user_id'];
    $fileDescription = $_POST['description'];
    $title = $_POST['title'];
    $result = move_uploaded_file($tempFileName,$fileTarget);

    /*
    *	If file was successfully uploaded in the destination folder
    */

    if($result) {
        echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";
        $fileTarget = ".".ltrim($fileTarget,".");
        $sql = "INSERT INTO post(image_addres, image_name, description, user_id, title) VALUES ('$fileTarget','$fileName','$fileDescription','$user_id','$title')";
        $conn->exec($sql);
    }
    else {
        echo "Sorry !!! There was an error in uploading your file";
    }
    $conn=null;
}
/*
* 	If file is already present in the destination folder
*/
else {
    echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
    mysqli_close($link);
}
?>

