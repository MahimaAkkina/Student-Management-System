
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
    <title>Reports</title>
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
                <h3>Between Dates Reports</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Between Dates Reports</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <form method="post" action="between_dates.php" class="p-3 fw-bold bg-secondary text-white border mt-5 border-2 border-primary rounded-4" enctype="multipart/form-data">
                            <h4 class="text-center my-3">Between Dates Reports</h4>
                            <div class="mb-3">
                                <label for="exampleInputpass1" class="form-label pb-2">From Date:</label>
                                <input type="date" class="form-control form-control-lg pb-2" id="exampleInputpass1" aria-describedby="passHelp" name="from">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputpass2" class="form-label pb-2">To Date</label>
                                <input type="date" class="form-control form-control-lg pb-2" id="exampleInputpass2" aria-describedby="passHelp" name="to">
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <button type="submit" class="px-5 py-3 btn btn-primary rounded-pill" name="submit" value="submit">SUBMIT</button>
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
        $fromdate=$_POST['from'];
        $todate=$_POST['to'];
        // $query = "SELECT * FROM students WHERE (DateOfAdmission >= '$fromdate' AND DateOfAdmission <= '$todate') OR (DateOfAdmission >= '$fromdate' AND DateOfAdmission <= '$todate')";
        // $query="SELECT * FROM students WHERE Date(DateOfAdmission) BETWEEN '$fromdate' AND '$todate'";
        // $result=mysqli_query($conn,$query);
    }
    ?>

