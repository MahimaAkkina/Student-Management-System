<?php 
$conn=mysqli_connect("localhost","root","","studentproject");
  if(isset($_POST['update'])){
    $read_id=$_GET['SNo'];
    $nt=$_POST['notitle'];
    $sect=$_POST['sect'];
    $nm=$_POST['nomsg'];
   $sql="UPDATE `notices` SET `NoticeTitle`='$nt', `ClassID`='$sect', `NoticeMessage`='$nm' WHERE SNo='$read_id'";
   if(mysqli_query($conn, $sql)){
    echo "Student Details Successfully Updated ";
    header("location:manage_notice.php");     
 }else{     
     echo "something fishee";
 }
  }
  if($_GET['SNo']){
    $read_id=$_GET['SNo'];
    // echo $read_id;
    $read="select * from notices where SNo='$read_id'";
    $r=mysqli_query($conn,$read);
    if(mysqli_num_rows($r)==1){
        $record=mysqli_fetch_array($r);
    }
    else{
        "Duplicate rows are there.";
    }
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
    <title> Update Notice</title>
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
                <div class="d-flex justify-content-between mt-4 mb-1 mx-5">
                <h3>Update Notice </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Update Notice</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" style="margin-left:280px !important;" class="p-3 w-50 bg-secondary text-white border mt-5 border-2 border-primary rounded-4" enctype="multipart/form-data">
                            <h4 class="text-center my-3">Update Notice</h4>
                            <div class="mb-3">
                                <label for="notitle" class="form-label mb-2">Notice Title</label>
                                <input type="text" id="notitle" name="notitle" value="<?php echo $record['NoticeTitle'] ?>" class="form-control form-control-lg" required>
                            </div>
                            <div class="mb-4">
                                <label for="sect" class="form-label mb-2">Notice for</label>
                                <select  name="sect" id="sect" class="form-select form-control-lg" required>
                                    <option selected><?php echo $record['ClassID'] ?></option>
                                    <option name="sect" value="1">10 A</option>
                                    <option name="sect" value="2">10 B</option>
                                    <option name="sect" value="3">10 C</option>
                                    <option name="sect" value="4">9 A</option>
                                    <option name="sect" value="5">9 B</option>
                                    <option name="sect" value="6">9 C</option>
                                    <option name="sect" value="7">8 A</option>
                                    <option name="sect" value="8">8 B</option>
                                    <option name="sect" value="9">8 C</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nomsg" class="form-label mb-2">Notice Message</label>
                                <textarea rows="3" id="nomsg" name="nomsg" class="form-control form-control-lg"><?php echo $record['NoticeMessage'] ?></textarea>
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <button type="submit" class="px-5 py-3 btn btn-primary rounded-pill" name="submit" value="update">UPDATE</button>
                            </div>                 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

