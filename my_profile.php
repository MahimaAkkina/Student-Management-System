<?php
$conn=mysqli_connect('localhost','root','','studentproject');
//Update Details
if(isset($_POST['update'])){ 
    $aname=$_POST['admin'];
    $auser=$_POST['auser'];
    $anumber=$_POST['anum'];
    $aemail=$_POST['aemail'];
    $adate=$_POST['adate'];
    $updt="UPDATE `admin_login` SET `AdminName`=' $aname',`Username`='$auser',`MobileNumber`='$anumber',`Email`=' $aemail', `AdminRegDate`='$adate' ";
    if(mysqli_query($conn, $updt)){
       echo "<script>
       window.alert('Admin Details Updated Successfully');
       </script>";
      
    }else{
        
        echo "something fishy";
    }
}
        $read="select * from admin_login";
        $result=mysqli_query($conn, $read);
        if(mysqli_num_rows($result)==1){
            $row1=mysqli_fetch_array($result);
        }
        else{
            echo "duplicated rows";
        }        
?> 
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
                  <h3>My Profile </h3>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                    </ol>
                  </nav>   
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" enctype="multipart/form-data" class="p-3 bg-secondary text-white border m-3 border-2 border-primary rounded-4">
                            <h4 class="text-center my-3">Admin Profile</h4>
                            <div class="mb-3">
                            <label for="exampleInputname" class="form-label">Admin Name</label>
                            <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="admin" value="<?php echo $row1['AdminName']?>">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputuname" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="exampleInputuname" aria-describedby="userHelp" name="auser" value="<?php echo $row1['Username']?>">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputfnum" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="exampleInputfnum" aria-describedby="conHelp" name="anum" value="<?php echo $row1['MobileNumber']?>">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="aemail" value="<?php echo $row1['Email']?>">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputdate" class="form-label">Admin Regestration Date</label>
                            <input type="text" class="form-control" id="exampleInputdate" aria-describedby="dateHelp" name="adate" value="<?php echo $row1['AdminRegDate']?>">
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <button type="submit" name="update" class="px-5 py-3 btn btn-primary rounded-pill" value="UPDATE">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

  