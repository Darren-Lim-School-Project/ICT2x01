<?php
include '../../processors/session.process.php';
//$currentDirectory = getcwd();
$currentDirectory = "../";
//echo $currentDirectory;
//echo dirname(__FILE__);
$uploadDirectory = "../../assets/img/challenges/custom/";
//echo $uploadDirectory;

$errors = []; // Store errors here

$fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed

$fileName = $_FILES['the_file']['name'];
$fileSize = $_FILES['the_file']['size'];
$fileTmpName  = $_FILES['the_file']['tmp_name'];
$fileType = $_FILES['the_file']['type'];
$tmp = explode('.',$fileName);
$fileExtension = strtolower(end($tmp));
;

$finalName =  "custom_" . generateRandomString() . ".jpeg";
// $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);
$uploadPath = $currentDirectory . $uploadDirectory . $finalName;

if (isset($_POST['submit'])) {
    
    if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }
    
    if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
    }
    
    if (empty($errors)) {

        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
//             echo "The file " . basename($fileName) . " has been uploaded";
            header("Location: challenges.php?difficulty=custom&img=" . $finalName);
            exit();
        } else {
            echo "An error occurred. Please contact the administrator.";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>