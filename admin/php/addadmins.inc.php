<?php
include_once '../includes/db.inc.php';
if (isset($_POST['add'])) {
    $uname = $_POST['uname'];
    $emp_id = $_POST['emp_id'];
    $pwd = md5($_POST['pwd1']); 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $secque = $_POST['secque'];
    $secans = $_POST['secans'];

    $sql1 = "INSERT INTO adminlogin (uname, emp_id, pwd, fname,  lname, email,phone,secque, secans) VALUES ('$uname', '$emp_id','$pwd', '$fname','$lname','$email','$phone','$secque', '$secans');";
    $res1 = mysqli_query($conn, $sql1);
    if (!$res1) {
        ?>
        <script>
            alert("Admin could not be added");
            window.location.replace("../addadmin.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Admin has been added successfully");
            window.location.replace("../viewadmin.php?result=success");
        </script>
        <?php
    }
}


?>
