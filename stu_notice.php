<?php

session_start();


if(isset($_GET['logo'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location: student_login.php");
}
?>
 <?php  

    $conn = mysqli_connect('localhost', 'root', '', 'studentproject');
    $sn= $_SESSION['SNo']; 
    $fetch ="SELECT NoticeDate,NoticeTitle,NoticeMessage,ClassName,ClassID,classs.ID,StudentClass FROM students JOIN classs ON students.StudentClass=classs.ClassName JOIN notices ON classs.ID= notices.ClassID WHERE students.SNo='$sn'";
    // echo $fetch;
    if($result=mysqli_query($conn,$fetch)){
        if(mysqli_num_rows($result)>0){
            $record=mysqli_fetch_array($result);
        }
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
    <style>
        .table tr td{
            /* background-color:rgb(245, 245, 100); */
            padding:5px 0px 5px 0px !important;
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
        <div class="col-sm-7 col-md-7 col-lg-9 mt-4 mx-5">
            <div class="d-flex justify-content-between mt-4 mb-1 mx-5">
                <h3>View Notice </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student_dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> View Notice</li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-4">
                <div class="table-responsive bg-light px-4 py-4">
                    <!-- <p class="h4 text-start mt-3 mb-4">View Notice</p> -->
                    <table class="table table-bordered table-striped table-hover text-center">
                        <tbody class="table-warning">
                            <thead>
                                <td colspan="2" class="fw-bold fs-3 table-info text-light">NOTICE</td>
                            </thead>
                            <tr class="table-warning">
                                <td>Notice Date</td>
                                <td><?php echo $record['NoticeDate'] ?></td>
                            </tr>
                            <tr class="table-warning">
                                <td>Notice Title</td>
                                <td><?php echo $record['NoticeTitle'] ?></td>
                            </tr>
                            <tr class="table-warning">
                                <td>Notice Message</td>
                                <td><?php echo $record['NoticeMessage'] ?></td>
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