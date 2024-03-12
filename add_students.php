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
    <title> Add Students</title>
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
            <div class="col-sm-7 col-md-7 col-lg-9 mt-4 mx-5 bg-white">
                <div class="d-flex justify-content-between mx-5 mt-5 mb-3">
                <h3>Add Students </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Add Students</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" enctype="multipart/form-data" class="p-3 rounded-4 bg-secondary text-white m-5 fw-bold">
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="name" class="col-form-label">Student Name :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="name" class="form-control form-control-lg" name="name">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="email" class="col-form-label">Student Email:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="email" class="form-control form-control-lg" name="email">                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="class" class="col-form-label">Student Class :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="class" class="form-control form-control-lg" name="class">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-sm-4 justify-content-center">
                                    <label for="gen" class="form-label">Sex :</label>
                                </div>
                                <div class="col-sm-8 form-check form-check-inline">
                                    <input type="radio" id="gen" name="gen" value="male"> Male &nbsp;&nbsp;
                                    <input type="radio" id="gen" name="gen" value="female"> Female &nbsp;&nbsp;
                                    <input type="radio" id="gen" name="gen" value="others"> Others &nbsp;&nbsp;
                                </div>  
                            </div>
                            
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="dob" class="col-form-label">Date of Birth:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="date" id="dob" class="form-control form-control-lg" name="dob" required>
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="id" class="col-form-label">Student ID:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="id" class="form-control form-control-lg" name="sid">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-sm-12 d-inline-flex align-items-center">
                                    <label for="pic" class="form-label w-25">Student Photo:</label>
                                    <input type="file" class="form-control w-75" id="pic" name="image">
                                </div>
                            </div>
                            <h4 class="my-5 text-center">Parent's / Guardians Details</h4>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="faname" class="col-form-label">Father's Name :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="faname" class="form-control form-control-lg" name="faname">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="moname" class="col-form-label">Mother's Name :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="moname" class="form-control form-control-lg" name="moname">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="mob" class="col-form-label">Contact Number:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="mob" class="form-control form-control-lg" name="mob">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="altmob" class="col-form-label">Alternate Contact Number:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="altmob" class="form-control form-control-lg" name="altmob">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="addr" class="col-form-label">Address:</label>
                                </div>
                                <div class="col-sm-8">
                                  <textarea class="form-control" rows="2" id="addr" name="addr"></textarea>
                                </div>
                            </div>
                            <h4 class="my-5 text-center">Login Details</h4>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="user" class="col-form-label">Username:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="user" class="form-control form-control-lg" name="user">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="pass" class="col-form-label">Password :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="pass" class="form-control form-control-lg" name="pass">
                                </div>
                            </div>
                            
                            <div class="row g-3 align-items-center">
                                <div class="mb-3 d-flex justify-content-center">
                                    <button type="submit" class="px-5 py-3 btn btn-primary rounded-pill" name="submit" value="SUBMIT">ADD</button>
                                </div>
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
        $sn=$_POST['name'];
        $se=$_POST['email'];
        $sc=$_POST['class'];
        $sex=$_POST['gen'];
        $dob=$_POST['dob'];
        $sid=$_POST['sid'];
        $fn=$_POST['faname'];
        $mn=$_POST['moname'];
        $mob=$_POST['mob'];
        $altmob=$_POST['altmob'];
        $address=$_POST['addr'];
        $user=$_POST['user'];      
        $pswd=password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $img=$_FILES['image']['name'];
        $img_temp=$_FILES['image']['tmp_name'];
        $sql=mysqli_query($conn,"INSERT INTO `students`(`StudentName`, `StudentEmail`, `StudentClass`, `Gender`, `DOB`, `StudentID`, `FatherName`, `MotherName`, `ContactNumber`, `AlternateNumber`, `Address`, `Username`, `Password`, `Image`) VALUES ('$sn','$se','$sc','$sex','$dob','$sid','$fn','$mn','$mob','$altmob','$address','$user','$pswd','$img')");
        move_uploaded_file($img_temp,"upload/" .$img);
        echo "<br> Data inserted Successfully";
    }
?>