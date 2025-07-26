<?php
include_once '../includes/db.inc.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $companyname = $_POST['companyname'];
    $managerfname = $_POST['managerfname'];
    $managerlname = $_POST['managerlname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $status = $_POST['status'];
    $sql = "update company set uname='$uname', companyname='$companyname', managerfname='$managerfname', managerlname='$managerlname', email='$email', phone='$phone', address='$address', website='$website', status='$status' where id='$id'";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Profile couldn't be edited!");
            window.location.replace("../editprofile.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Profile has been edited");
            window.location.replace("../cprofile.php?result=success");
        </script>
        <?php
    }
}
?>
