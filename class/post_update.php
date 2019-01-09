<?php
require_once("connect.php");
require_once("../class/auth.php");

/*
$fileName = $_FILES['image']['name'];
*/
    /*
    $target = "../include/image/";
    $fileTarget = $target.$fileName;
    $tempFileName = $_FILES["image"]["tmp_name"];
    */
    $fileDescription = $_POST['description'];
    $post_id=$_POST['post_id'];
    $title = $_POST['title'];
    /*
    $result = move_uploaded_file($tempFileName,$fileTarget);
    echo "<br>";
    echo "result :";
    echo "<br>";
    echo $result;
    echo "<br>";
    */
    /*
    *	If file was successfully uploaded in the destination folder
     * if($result) {
    */

    if(1) {
        echo "Your post  has been successfully update";
        /*
        $fileTarget = ".".ltrim($fileTarget,".");
        echo "<br>";
        echo $fileTarget;
        echo "<br>";
        */
        $sql = "UPDATE post SET title='$title',description='$fileDescription' WHERE id='$post_id'";
        $conn->exec($sql);
    }
    else {
        echo "Sorry !!! There was an error in uploading your file";
    }
    $conn=null;

?>
