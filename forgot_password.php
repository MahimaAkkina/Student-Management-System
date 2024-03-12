<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'studentproject');
if($_SERVER['REQUEST_METHOD']=="POST"){
  $username=$_POST['user'];
  $pass=$_POST['pswd'];
  

   $sql=" select * from admin_login where Username='$username' and Password='$pass'";
   $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
        $_SESSION['Username'] = $username;
        $_SESSION['Password'] = $pass;
        $_SESSION['Email']=$row['Email'];
        

        echo $_SESSION['Username'];
        header('location:admin_dashboard.php');
    }else{
        echo "we have duplicate rows";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body style="background-color: rgb(243, 242, 240);">
    <div class="container">
        <form method="post" class="p-3 rounded-0 text-dark loginform">
            <p><img src="pics/logo.svg"><br><br></p>
            <p style="font-weight: 500; font-size: larger;">RECOVER PASSWORD</p>
            <p>Enter your email address and mobile number to reset password!</p><br>
            <div class="row g-3 mb-2 align-items-center">
                <div class="col-sm-11">
                  <input type="text" class="form-control form-control-lg rounded-0 mb-3 ms-4" name="user" placeholder="Email Address">
                </div>
            </div>
            <div class="row g-3 mb-2 align-items-center">
                <div class="col-sm-11">
                  <input type="text" class="form-control form-control-lg rounded-0 mb-3 ms-4" name="mob" placeholder="Mobile Number">
                </div>
            </div>
            <div class="row g-3 mb-2 align-items-center">
                <div class="col-sm-11">
                  <input type="password" id="acn" class="form-control form-control-lg rounded-0 mb-3 ms-4" name="pswd" placeholder="New Password">
                </div>
            </div>
            <div class="row g-3 mb-2 align-items-center">
                <div class="col-sm-11">
                  <input type="password" id="acn" class="form-control form-control-lg rounded-0 mb-3 ms-4" name="cpswd" placeholder="Confirm Password">
                </div>
            </div>
            <div class="row g-3 mb-2 align-items-center">
                <div class="col-sm-11">
                  <input type="submit" class="btn btn-lg rounded-2 mb-3 log" name="res" value="RESET">
                </div>
            </div>
            <div class="row g-3 mb-2 align-items-center but">
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input mt-1 ms-4 me-3 border border-2 border-primary" type="checkbox" value="" id="sign">
                        <label class="form-check text-secondary" for="sign">  Keep me signed in  </label>
                    </div>
                </div>
                <div class="col-sm-4 hi">
                    <a href="admin_login.php">Sign In</a>
                </div>
            </div>
            <div class="row g-3 mb-3 align-items-center but2">
                <div class="col-sm-11">
                  <a href="home.php" class="btn rounded-2 mb-3 back" name="back">BACKHOME</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>