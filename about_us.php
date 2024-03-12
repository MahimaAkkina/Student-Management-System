<?php
$conn=mysqli_connect('localhost','root','','studentproject');
//Update Details
if(isset($_POST['update'])){
   
    $pgtitle=$_POST['ptitle'];
    $pgdes=$_POST['pdesc'];
    
    $updt="UPDATE `page` SET `PageTitle`=' $pgtitle',`PageDescription`='$pgdes' WHERE  PageType='about us'";
    if(mysqli_query($conn, $updt)){
       echo '<script>alert("Form submitted successfully!");</script>';
       header("location:about_us.php");     
    }else{     
        echo "something fishy";
    }
}
    $read="select * from page where PageType='about us' ";
    $result=mysqli_query($conn, $read);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
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
  <title>Update About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<body style="background-color:skyblue;">
    <?php include_once('head.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-lg-2 bg-dark text-white">
                <?php include_once('sidebar.php') ?>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-9 mt-4 mx-5 bg-light rounded-4">
                <div class="d-flex justify-content-between my-5 mx-5">
                  <h3>Update About Us </h3>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page"> Update About Us</li>
                      </ol>
                  </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" class="m-3 p-3 bg-secondary fw-bold text-white border border-2 border-primary rounded-4" enctype="multipart/form-data">
                            <!-- <caption>Update About Us</caption> -->
                            <h4 class="text-center my-3"> Update About Us</h4>
                            <div class="mb-3">
                                <label for="ptitle" class="form-label mb-2">Page Title</label>
                                <input type="text" id="ptitle" name="ptitle" value="<?php echo $row['PageTitle'] ?>" class="form-control form-control-lg" required>
                            </div>
                            <div class="mb-3">
                                <label for="pdesc" class="form-label mb-2">Page Description</label>
                                <textarea rows="3" id="pdesc" name="pdesc" value="" class="form-control form-control-lg"><?php echo $row['PageDescription'] ?></textarea>
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