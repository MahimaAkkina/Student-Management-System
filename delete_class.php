
<?php
$conn=mysqli_connect('localhost','root','','studentproject');
    if($_REQUEST['ID']){
        $del_id=$_REQUEST['ID'];
        $sql=mysqli_query($conn,"UPDATE `classs` SET `hidden`=1 WHERE ID='$del_id'");
        header('location:manage_class.php');
    }
?>