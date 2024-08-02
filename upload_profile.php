<?php
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profileImage"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is an actual image or fake image
$check = getimagesize($_FILES["profileImage"]["tmp_name"]);
if ($check !== false) {
    if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $_SESSION['profileImage'] = $target_file;
        header("Location: profile.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "File is not an image.";
}
?>