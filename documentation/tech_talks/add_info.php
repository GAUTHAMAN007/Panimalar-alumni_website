<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    
    $image = $_FILES["image"]["name"];
    $image_temp = $_FILES["image"]["tmp_name"];
    
    move_uploaded_file($image_temp, "images/$image");
    
    // You can store the information in a database here
    // For simplicity, we'll just save it in a text file
    $info = "$title|$content|$image\n";
    file_put_contents("info.txt", $info, FILE_APPEND);
    
    header("Location: admin_upload.php");
}
?>

