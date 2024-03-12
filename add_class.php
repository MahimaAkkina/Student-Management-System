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
    <title> Add Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css" />
    
</head>
<body style="background-color:skyblue;">
    <?php include_once('head.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-lg-2 bg-dark text-white">
                <?php include_once('sidebar.php') ?>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-9 mt-4 mx-5 bg-light rounded-4">
                <div class="d-flex justify-content-between my-5 mx-5">
                <h3>Add Class </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Add Class</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <form method="post" class="p-3 fw-bold w-50 bg-secondary text-white border mt-5 border-2 border-primary rounded-4" enctype="multipart/form-data">
                            <h4 class="text-center my-3">Add Class</h4>
                            <div class="mb-3">
                                <label for="cname" class="form-label mb-2">Class Name</label>
                                <input type="text" id="cname" name="cname" value="" class="form-control form-control-lg" required>
                            </div>
                            <div class="mb-4">
                                <label for="sect" class="form-label mb-2">Section</label>
                                <select  name="section" id="sect" class="form-select form-control-lg" required>
                                <option selected>Choose Section</option>
                                <option name="section" value="A">A</option>
                                <option name="section" value="B">B</option>
                                <option name="section" value="C">C</option>
                                </select>
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <button type="submit" class="px-5 py-3 btn btn-primary rounded-pill" name="submit" value="ADD">ADD</button>
                            </div>                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
$conn=mysqli_connect("localhost","root","","studentproject");
  if(isset($_POST['submit'])){
    $class=$_POST['cname'];
    $sect=$_POST['section'];
    $sql="INSERT INTO `classs`(`ClassName`, `Section`) VALUES ('$class','$sect')";
    (mysqli_query($conn,$sql));
  }
?>