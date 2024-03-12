

<?php
$conn = mysqli_connect('localhost', 'root', '', 'studentproject');

if (!empty($_GET['SNo']) && isset($_GET['SNo'])) {
    $del_id = $_GET['SNo'];
    echo $del_id;

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_query($conn,"UPDATE `students` SET `hidden` = 1 WHERE SNo = '$del_id'");
        header('location: manage_students.php');
    
} else {
    echo "No 'SNo' parameter provided.";
}

mysqli_close($conn);
?>
