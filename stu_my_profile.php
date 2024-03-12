<?php
session_start();
if(isset($_GET['logo'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location:student_login.php");
}
?>
<?php
    $conn=mysqli_connect('localhost','root','','studentproject');
    $sn= $_SESSION['SNo']; 
    $read="select * from students where SNo='$sn'";
    $result=mysqli_query($conn, $read);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
    }
    else{
        echo "duplicated rows";
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
    <style>
        .table tr td{
            /* background-color:rgb(245, 245, 100); */
            padding:7px 0px 7px 0px !important;
            border:1px solid skyblue;
        }
    </style>
</head>
<body style="background-color:skyblue;">
    <?php include_once('stu_header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-lg-2 bg-dark text-white">
                <?php include_once('stu_sidebar.php') ?>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-9 mt-4 mx-5 bg-white">
                <div class="d-flex justify-content-between mx-5 mt-5 mb-3">
                  <h3>Student Profile </h3>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="student_dashboard.php">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Student Profile</li>
                    </ol>
                  </nav>   
                </div>
                <div class="row">
                    <div class="table table-responsive p-4">
                    <table class="table table-bordered table-striped table-hover text-center">
                        <tbody class="table-warning">
                            <thead>
                                <td colspan="4" class="fw-bold fs-3 table-warning text-info">Student Details</td>
                            </thead>
                            <tr class="table-success">
                                <td class="fw-bold">Student Name</td>
                                <td><?php echo $row['StudentName'] ?></td>
                                <td class="fw-bold">Student Email</td>
                                <td><?php echo $row['StudentEmail'] ?></td>
                            </tr>
                            <tr class="table-danger">
                                <td class="fw-bold">Student Class</td>
                                <td><?php echo $row['StudentClass'] ?></td>
                                <td class="fw-bold">Gender</td>
                                <td><?php echo $row['Gender'] ?></td>
                            </tr>
                            <tr class="table-info">
                                <td class="fw-bold">Date of Birth</td>
                                <td><?php echo $row['DOB'] ?></td>
                                <td class="fw-bold">Student ID</td>
                                <td><?php echo $row['StudentID'] ?></td>
                            </tr>
                            <tr class="table-secondary">
                                <td class="fw-bold">Father Name</td>
                                <td><?php echo $row['FatherName'] ?></td>
                                <td class="fw-bold">Mother Name</td>
                                <td><?php echo $row['MotherName'] ?></td>
                            </tr>
                            <tr class="table-warning">
                                <td class="fw-bold">Contact Number</td>
                                <td><?php echo $row['ContactNumber'] ?></td>
                                <td class="fw-bold">Alternate Number</td>
                                <td><?php echo $row['AlternateNumber'] ?></td>
                            </tr>
                            <tr class="table-success">
                                <td class="fw-bold">Address</td>
                                <td><?php echo $row['Address'] ?></td>
                                <td class="fw-bold">Username</td>
                                <td><?php echo $row['Username'] ?></td>
                            </tr>
                            <tr class="table-light">
                                <td class="fw-bold">Profile Pic</td>
                                <td><img src="upload/<?php echo $row['Image']; ?>" class="rounded-circle" height='100px'></td>
                                <td class="fw-bold">Date Of Admission</td>
                                <td><?php echo $row['DateOfAdmission'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

  