<?php
session_start();


if(isset($_GET['log'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location: admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body style="background-color:skyblue;">
<?php include_once('head.php') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-lg-2 bg-dark text-white">
            <?php include_once('sidebar.php') ?>
        </div>
        <div class="col-sm-7 col-md-7 col-lg-9 mt-4 mx-5">
            <?php include_once('dashboard.php') ?>
        </div>
    </div>
</div>
</body>
</html>