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
                <h3>Search Students </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Search Students</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" class="p-3  bg-secondary text-white border m-3 border-2 border-primary rounded-4" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="exampleInputid" class="form-label pb-3">Search Student</label>
                            <input type="text" class="form-control form-control-lg" id="exampleInputid" aria-describedby="idHelp" name="id"> 
                          </div>
                          <div class="mb-3 d-flex justify-content-center">
                            <input type="submit" class="px-5 py-3 btn btn-primary rounded-pill" name="submit" value="SUBMIT">
                          </div>
                          <?php
                            $conn=mysqli_connect('localhost','root','','studentproject');
                            if(isset($_POST['submit'])){
                                $id=$_POST['id'];
                                $sql="select * from students  where StudentID='$id' ";
                                $result= mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)==1){  
                                    $row1=mysqli_fetch_array($result);
                                    if($id==$row1['StudentID']){
                                        echo "<table class='table table-bordered'>";
                                        echo "<tr>";
                                        echo "<th>"."S.No"."</th>";
                                        echo "<th>"."Student ID"."</th>";
                                        echo "<th>"."Student Class"."</th>";
                                        echo "<th>"."Student Name"."</th>";
                                        echo "<th>"."Student Email"."</th>";
                                        echo "<th>"."Admissin Date"."</th>";
                                        echo "<th>"."Actions"."</th>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<td>" .$row1['SNo'] ."</td>";
                                        echo "<td>" .$row1['StudentID'] ."</td>";
                                        echo "<td>" .$row1['StudentClass'] ."</td>";
                                        echo "<td>" .$row1['StudentName'] ."</td>";
                                        echo "<td>" .$row1['StudentEmail'] ."</td>";
                                        echo "<td>" .$row1['DateOfAdmission'] ."</td>";
                                        echo "<td>";
                                        echo '<a href="view_students.php?SNo='.$row1['SNo'].'"><i class="bi bi-eye-fill"></i></a>';
                                        echo '&nbsp;||&nbsp; <a href="delete_students.php?SNo='.$row1['SNo'].'"><i class="bi bi-trash3-fill"></i></a>';

                                        //echo '<button type="button" onclick="deleteRow(this)" style="border:none; background:none"><i class="bi bi-trash"></i></button>';
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "</table>";
                                    }  
                                  
                                }else{
                                echo "Enter Correct Details";
                            } 
                        }   
                        ?>
                        </form>
                        
                    </div>
                </div>
              </div>
          </div>
    </div>
</body>
</html>
