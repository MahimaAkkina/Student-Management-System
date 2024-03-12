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
    <title>Manage Students</title>
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
            <div class="d-flex mx-5 justify-content-between my-4">
                <h3>Manage Students </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Manage Students</li>
                    </ol>
                </nav>
                </div>
                <div class="table-responsive bg-light px-5 py-3 rounded-3">
                    <p class="h4 text-start mt-3 mb-4">Manage Students</p>
                    <table class="table table-bordered table-striped table-hover text-center">
                        <tr class="table-success">
                            <th>SNo</th>
                            <th>Student ID</th>
                            <th>Student Class</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Admission Date</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                            $conn=mysqli_connect("localhost","root","","studentproject");
                            $fetch="select * from students where hidden=0";
                            if($result=mysqli_query($conn,$fetch)){
                                if(mysqli_num_rows($result) > 0){
                                    while($record=mysqli_fetch_array($result)){
                                        echo "<tr>";
                                        echo "<td>" .$record['SNo'] ."</td>";
                                        echo "<td>" .$record['StudentID'] ."</td>";
                                        echo "<td>" .$record['StudentClass'] ."</td>";
                                        echo "<td>" .$record['StudentName'] ."</td>";
                                        echo "<td>" .$record['StudentEmail'] ."</td>";
                                        echo "<td>" .$record['DateOfAdmission'] ."</td>";
                                        echo "<td><img src=upload/$record[Image] height='100px'></td>";
                                        echo "<td>";
                                        // echo '<i class="bi bi-eye-fill">';
                                        echo '<a href="view_students.php?SNo=' .$record['SNo']. '"><i class="bi bi-eye-fill"></i></a>';
                                        // echo '  &nbsp;||&nbsp;  <i class="bi bi-trash3-fill">';
                                        echo ' &nbsp;||&nbsp; <a href="delete_students.php?SNo=' .$record['SNo']. '"onclick="return confirm(\'Are you sure you want to delete this student?\')"><i class="bi bi-trash3-fill"></i></a>';
                                        echo "</td>";
                                    }
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
