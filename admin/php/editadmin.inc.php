<?php
include_once '../includes/db.inc.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $emp_id = $_POST['emp_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
   

    $sql = "UPDATE adminlogin SET uname='$uname', emp_id='$emp_id',fname='$fname',lname='$lname', email='$email', phone='$phone' WHERE id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Admin Details could not be updated");
            window.location.replace("../addadmins.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Admin Details has been updated");
            window.location.replace("../viewadmin.php?result=success");
        </script>
        <?php
    }
}
?>
