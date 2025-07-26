<?php
include_once '../includes/db.inc.php';

if (isset($_POST['update'])) {
    $id = $_POST['id']; // Assuming 'id' is the name of the input for student ID
    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $prn = $_POST['prn'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $percentage = $_POST['percentage'];
    $yop = $_POST['yop'];
    $ssc = $_POST['ssc'];
    $hsc = $_POST['hsc'];

    $sql = "UPDATE studentlogin SET uname=?, prn=?, fname=?, lname=?, phone=?, email=?, branch=?, percentage=?, yop=?, ssc=?, hsc=? WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssssssssssi", $uname, $prn, $fname, $lname, $phone, $email, $branch, $percentage, $yop, $ssc, $hsc, $id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo '<script>
                    alert("Update successful!");
                    window.location.href = "../viewstudents.php?result=success";
                  </script>';
            exit();
        } else {
            header("Location: ../editstud.php?result=fail");
            exit();
        }

    } else {
        // Handle SQL statement preparation error
        header("Location: ../editstud.php?result=fail");
        exit();
    }
}
?>
