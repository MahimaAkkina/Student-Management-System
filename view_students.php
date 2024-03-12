<?php
    $conn=mysqli_connect("localhost","root","","studentproject");
    
    if(isset($_POST['update'])){
        $read_id=$_GET['SNo'];
        // echo "hi";
        $sn=$_POST['name'];
        $se=$_POST['email'];
        $sc=$_POST['class'];
        $sex=$_POST['gen'];
        $dob=$_POST['dob'];
        $sid=$_POST['sid'];
        $fn=$_POST['faname'];
        $mn=$_POST['moname'];
        $mob=$_POST['mob'];
        $altmob=$_POST['altmob'];
        $address=$_POST['addr'];
        $user=$_POST['user'];      
        $pswd=password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $img=$_FILES['image']['name'];
        $img_temp=$_FILES['image']['tmp_name'];
        if(empty($img)){
            $pic=mysqli_query($conn,"select * from students where SNo='$read_id'");
            if(mysqli_num_rows($pic) > 0){
                while($record=mysqli_fetch_array($pic)){
                    $img=$record['Image'];
                    $sql="UPDATE `students` SET `StudentName`='$sn',`StudentEmail`='$se',`StudentClass`='$sc',`Gender`='$sex',`DOB`='$dob',`StudentID`='$sid',`FatherName`='$fn',`MotherName`='$mn',`ContactNumber`='$mob',`AlternateNumber`='$altmob',`Address`='$address',`Username`='$user',`Password`='$pswd',`Image`='$img' WHERE SNo='$read_id'";
                    if(mysqli_query($conn,$sql)){
                        move_uploaded_file($img_temp,"upload/" .$img);
                        // echo "<br> Data updated Successfully";
                        header('location:manage_students.php');
                    }
                    else{
                        echo "Something fishy";
                    }
                }
            }
        }
        else{
            $sql="UPDATE `students` SET `StudentName`='$sn',`StudentEmail`='$se',`StudentClass`='$sc',`Gender`='$sex',`DOB`='$dob',`StudentID`='$sid',`FatherName`='$fn',`MotherName`='$mn',`ContactNumber`='$mob',`AlternateNumber`='$altmob',`Address`='$address',`Username`='$user',`Password`='$pswd',`Image`='$img' WHERE SNo='$read_id'";
                    if(mysqli_query($conn,$sql)){
                        move_uploaded_file($img_temp,"upload/" .$img);
                        // echo "<br> Data updated Successfully";
                        header('location:manage_students.php');
                    }
                    else{
                        echo "Something fishy";
                    }
        }
        
        
        
        // header('location:manage_students.php');
    }
    else{
        // echo "Error";
    }
    if(isset($_GET['SNo'])){
        $read_id=$_GET['SNo'];
        // echo $read_id;
        $read="select * from students where SNo='$read_id'";
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
    <title> Update Students</title>
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
                <h3>Update Students </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Update Students</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" enctype="multipart/form-data" class="p-3 rounded-4 bg-secondary text-white m-5" style="margin-left: 600px; font-weight: 700;">
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="name" class="col-form-label">Student Name :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="name" value="<?php echo $record['StudentName'] ?>" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="email" class="col-form-label">Student Email:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="email" class="form-control" name="email" value="<?php echo $record['StudentEmail'] ?>">                                
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="class" class="col-form-label">Student Class :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="class" value="<?php echo $record['StudentClass'] ?>" class="form-control" name="class">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-sm-4 justify-content-center">
                                    <label class="form-label">Sex :</label>
                                </div>
                                <div class="col-sm-8 form-check form-check-inline">
                                    <input type="radio" name="gen" value="male" <?php echo ($record['Gender'] == 'male') ? 'checked' : ''; ?>> male &nbsp;&nbsp;
                                    <input type="radio" name="gen" value="female" <?php echo ($record['Gender'] == 'female') ? 'checked' : ''; ?>> female &nbsp;&nbsp;
                                    <input type="radio" name="gen" value="others" <?php echo ($record['Gender'] == 'others') ? 'checked' : ''; ?>> others &nbsp;&nbsp;
                                </div>  
                            </div>
                            
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="dob" class="col-form-label">Date of Birth:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="date" id="dob" class="form-control" name="dob" value="<?php echo $record['DOB'] ?>" required>
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="id" class="col-form-label">Student ID:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="id" class="form-control" name="sid" value="<?php echo $record['StudentID'] ?>">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-sm-12 d-inline-flex align-items-center">
                                    <label for="pic" class="form-label w-25">Student Photo:</label>
                                    <img src="upload/<?php echo $record['Image']; ?>" alt="Student Photo" height="100px">
                                    <input type="file" class="form-control w-75" id="pic" name="image">
                                     
                                </div>
                            </div>
                            <h4 class="my-5 text-center">Parent's / Guardians Details</h4>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="faname" class="col-form-label">Father's Name :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="faname" class="form-control" value="<?php echo $record['FatherName'] ?>" name="faname">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="moname" class="col-form-label">Mother's Name :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="moname" class="form-control" value="<?php echo $record['MotherName'] ?>" name="moname">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="mob" class="col-form-label">Contact Number:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="mob" class="form-control" value="<?php echo $record['ContactNumber'] ?>" name="mob">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="altmob" class="col-form-label">Alternate Contact Number:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" id="altmob" class="form-control" value="<?php echo isset($record['Alternate Number']) ? $record['Alternate Number'] : ''; ?>" name="altmob">
                                </div>

                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="addr" class="col-form-label">Address:</label>
                                </div>
                                <div class="col-sm-8">
                                  <textarea class="form-control" rows="2" id="addr" name="addr"><?php echo $record['Address'] ?></textarea>
                                </div>
                            </div>
                            <h4 class="my-5 text-center">Login Details</h4>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="user" class="col-form-label">Username:</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="user" class="form-control" value="<?php echo $record['Username'] ?>" name="user">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-sm-4">
                                    <label for="pass" class="col-form-label">Password :</label>
                                </div>
                                <div class="col-sm-8">
                                  <input type="text" id="pass" class="form-control" name="pass" value="<?php echo $record['Password'] ?>">
                                </div>
                            </div>
                            
                            <div class="row g-3 align-items-center">
                                <div class="mb-3 d-flex justify-content-center">
                                    <button type="submit" class="px-5 py-3 btn btn-primary rounded-pill" name="update" value="update">UPDATE</button>
                                </div> 
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
