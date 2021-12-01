<?php
require '../../../vendor/autoload.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IR-Acer - Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
 
    <!-- Custom styles for this template-->
    <link href="../../../styles/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    <form action="../controller/loginController.php" method="post">
    <input type="text" id="username" name="username" aria-describedby="username" required placeholder="Enter Admin Username" >
    <input type="password" id="password" name="password" required placeholder="Password" >
    <button type="submit" name="submit">Login</button>
    </form>
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/boostrap.bundle.min.js"></script>
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../../js/sb-admin-2.min.js"></script>

</body>
</html>