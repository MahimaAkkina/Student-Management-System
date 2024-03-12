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
    <title>Manage Class</title>
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
                <h3>Manage Class </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Manage Class</li>
                    </ol>
                </nav>
                </div>
                <div class="table-responsive bg-light px-5 py-3">
                    <p class="h4 text-start mt-3 mb-4">Manage Class</p>
                    <table class="table table-bordered table-striped table-hover text-center table-dark">
                        <tr class="table-success">
                            <th>S.No</th>
                            <th>Class Name</th>
                            <th>Section</th>
                            <th>Creation Date</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                            $conn=mysqli_connect("localhost","root","","studentproject");
                            $fetch="SELECT * FROM `classs` WHERE hidden=0";
                            if($result=mysqli_query($conn,$fetch)){
                                if(mysqli_num_rows($result) > 0){
                                    while($record=mysqli_fetch_array($result)){
                                        echo "<tr>";
                                        echo "<td>" .$record['ID'] ."</td>";
                                        echo "<td>" .$record['ClassName'] ."</td>";
                                        echo "<td>" .$record['Section'] ."</td>";
                                        echo "<td>" .$record['CreationDate'] ."</td>";
                                        echo "<td>";
                                        // echo '<i class="bi bi-eye-fill">';
                                        echo '<a href="view_class.php?ID='.$record['ID'].'"><i class="bi bi-eye-fill"></i></a>';
                                        // echo '  &nbsp;||&nbsp;  <i class="bi bi-trash3-fill">';
                                        echo '&nbsp;||&nbsp;<a href="delete_class.php?ID='.$record['ID'].'"><i class="bi bi-trash3-fill"></i></a>';
                                        echo "</td>";
                                        echo "</tr>";
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