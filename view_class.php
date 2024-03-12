<!-- <h2>This is read page</h2> -->
<?php
    $conn=mysqli_connect("localhost","root","","studentproject");
    if(isset($_POST['update'])){
    $read_id=$_GET['ID'];
      $class=$_POST['cname'];
      $sect=$_POST['section'];
      mysqli_query($conn,"UPDATE `classs` SET `ClassName`='$class',`Section`='$sect' WHERE ID='$read_id'");
      header('location:manage_class.php');
      

    }
    if($_GET['ID']){
        $read_id=$_GET['ID'];
        // echo $read_id;
        $read="select * from classs where ID='$read_id'";
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
    <title> Update Class</title>
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
                <h3>Update Class </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Update Class</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" style="margin-left:280px !important;" class="p-3 w-50 bg-dark text-white border mt-5 border-2 border-primary rounded-4" enctype="multipart/form-data">
                            <h4 class="text-center my-3">Update Class</h4>
                            <div class="mb-3">
                                <label for="cname" class="form-label mb-2">Class Name</label>
                                <input type="text" id="cname" name="cname"  value="<?php echo $record['ClassName'] ?>" class="form-control form-control-lg" required>
                            </div>
                            <div class="mb-4">
                                <label for="sect" class="form-label mb-2">Section</label>
                                <select  name="section" id="sect" class="form-select form-control-lg" required>
                                <option selected><?php echo $record['Section'] ?></option>
                                <option name="section" value="A">A</option>
                                <option name="section" value="B">B</option>
                                <option name="section" value="C">C</option>
                                <option name="section" value="D">D</option>
                                <option name="section" value="E">E</option>
                                <option name="section" value="F">F</option>
                                </select>
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
