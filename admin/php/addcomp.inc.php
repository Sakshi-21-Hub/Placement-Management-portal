<?php
include_once '../includes/db.inc.php';
if (isset($_POST['add'])) {
    $uname = $_POST['uname'];
    $companyname = $_POST['companyname'];
    $pwd = md5($_POST['pwd1']); 
    $managerfname = $_POST['managerfname'];
    $managerlname = $_POST['managerlname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $status = $_POST['status'];
    $secque = $_POST['secque'];
    $secans = $_POST['secans'];

    $sql1 = "INSERT INTO company (uname, companyname, pwd,  managerfname, managerlname,address,phone,email,website,status,secque,secans) VALUES ('$uname', '$companyname','$pwd','$managerfname','$managerlname','$address',  '$phone','$email','$website','$status','$secque','$secans');";
    $res1 = mysqli_query($conn, $sql1);
    if (!$res1) {
        ?>
        <script>
            alert("Company could not be added");
            window.location.replace("../addcompanies.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Company has been added successfully");
            window.location.replace("../viewcmp.php?result=success");
        </script>
        <?php
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $companyname = $_POST['companyname'];

    $managerfname = $_POST['managerfname'];
    $managerlname = $_POST['managerlname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $status = $_POST['status'];
    $secque = $_POST['secque'];
    $secans = $_POST['secans'];

    $sql = "UPDATE company SET uname='$uname', companyname='$companyname', managerfname='$managerfname', managerlname='$managerlname', address ='$address',phone ='$phone',email = '$email', website = '$website',status = '$status',secque = '$secque',secans = '$secans' WHERE id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Company could not be updated");
            window.location.replace("../editcomp.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Company has been updated");
            window.location.replace("../viewcmp.php?result=success");
        </script>
        <?php
    }
}
?>
