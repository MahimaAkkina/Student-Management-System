
<?php
$conn=mysqli_connect('localhost','root','','studentproject');
    if($_REQUEST['SNo']){
        $del_id=$_REQUEST['SNo'];
        $sql=mysqli_query($conn,"UPDATE `publicnotice` SET `hidden`=1 WHERE SNo='$del_id'");
        header('location:manage_publicnotice.php');
    }
?>