<?php
session_start();
if(isset($_GET['logo'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location: student_login.php");
}
?>
<?php
$conn=mysqli_connect('localhost','root','','studentproject');
//Update Details
if(isset($_POST['update'])){ 
    $sn= $_SESSION['SNo']; 
    $current_pass=$_POST['cpass'];
    $new_pass=$_POST['npass'];
    $confirm_pass=$_POST['conpass'];
    $sql="select * from students where SNo='$sn'";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        if($current_pass==$row['Password']){
           if($new_pass==$confirm_pass){
                $upd="UPDATE `students` SET `Password`='$confirm_pass' WHERE SNo='$sn'";
                if(mysqli_query($conn, $upd)){
                    echo "inserted";
                }
                else{
                    echo "not inserted";
                }
        
            }     
        }
        else{
            echo "enter correct password";
        }
    }
}    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css" />
    
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
                  <h3>Change Password </h3>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="student_dashboard.php">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Student Profile</li>
                    </ol>
                  </nav>   
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" enctype="multipart/form-data" class="p-3 bg-secondary text-white border m-3 border-2 border-primary rounded-4">
                            <h4 class="text-center my-3">Change Password</h4>
                            <div class="mb-3">
                                <label for="exampleInputpass1" class="form-label pb-2">Current Password</label>
                                <input type="password" class="form-control form-control-lg pb-2" id="exampleInputpass1" aria-describedby="passHelp" name="cpass">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputpass2" class="form-label pb-2">New Password</label>
                                <input type="password" class="form-control form-control-lg pb-2" id="exampleInputpass2" aria-describedby="passHelp" name="npass">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputpass3" class="form-label pb-2">Confirm Password</label>
                                <input type="password" class="form-control form-control-lg pb-2" id="exampleInputpass3" aria-describedby="passHelp" name="conpass">
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                            	<button type="submit" name="update" class="px-5 py-3 btn btn-primary rounded-pill" value="submit">CHANGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>