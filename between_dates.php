<?php
session_start();
if(isset($_GET['log'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location: admin_login.php");
}

 $conn=mysqli_connect("localhost","root","","studentproject");
                            if(isset($_POST['submit'])){
                                $fromdate=$_POST['from'];
                                $todate=$_POST['to'];
                            }
                            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Between Dates Reports</title>
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
            <div class="d-flex justify-content-between my-4 mx-5">
                <h3>Between Dates Reports</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Between Dates Reports</li>
                    </ol>
                </nav>
                </div>
                <div class="table-responsive bg-light px-5 py-3">
                    <p class="h4 text-start mt-3 mb-4">Between Dates Reports</p>
                    <table class="table table-bordered table-striped table-hover text-center table-dark">
                                <tr class="table-success">
                                    <th>S.No</th>
                                    <th>Student ID</th>
                                    <th>Student Class</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Admissin Date</th>
                                </tr>
                        <?php
                            $conn=mysqli_connect("localhost","root","","studentproject");
                                $query="SELECT * FROM students WHERE (Date(DateOfAdmission) >= '$fromdate' AND Date(DateOfAdmission) <='$todate') OR (Date(DateOfAdmission) >= '$fromdate' AND Date(DateOfAdmission) <='$todate') ";
                                $result=mysqli_query($conn,$query);
                                if(mysqli_num_rows($result)>0){  
                                    while ($row1= mysqli_fetch_array($result)){
                                            echo "<tr>";
                                            echo "<td>" .$row1['SNo'] ."</td>";
                                            echo "<td>" .$row1['StudentID'] ."</td>";
                                            echo "<td>" .$row1['StudentClass'] ."</td>";
                                            echo "<td>" .$row1['StudentName'] ."</td>";
                                            echo "<td>" .$row1['StudentEmail'] ."</td>";
                                            echo "<td>" .$row1['DateOfAdmission'] ."</td>";
                                            echo "</tr><br>"; ?>
                                        </table>
                                    <?php }  
                            } 
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>