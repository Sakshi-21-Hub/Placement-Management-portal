<?php
include_once '../includes/db.inc.php';

if (isset($_POST['add'])) {
    // Retrieve form data
    $uname = $_POST['uname'];
    $prn = $_POST['prn'];
    $pwd = md5($_POST['pwd1']); // Hash the password using MD5
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $secque = $_POST['secque'];
    $secans = $_POST['secans'];
    $branch = $_POST['branch'];
    $percentage = $_POST['percentage'];
    $yop = $_POST['yop'];
    $ssc = $_POST['ssc'];
    $hsc = $_POST['hsc'];

    // Prepare SQL query
    $sql1 = "INSERT INTO studentlogin (uname, prn, pwd, fname, lname,email,phone,secque,secans,branch , percentage,yop,ssc,hsc) VALUES ('$uname', '$prn','$pwd','$fname','$lname','$email','$phone','$secque','$secans','$branch','$percentage','$yop','$ssc','$hsc');";
    $res1 = mysqli_query($conn, $sql1);

    // Check if the query was successful
    if (!$res1) {
        ?>
        <script>
            alert("Student details could not be added");
            window.location.replace("../addstudents.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Student details has been added successfully");
            window.location.replace("../viewstudents.php?result=success");
        </script>
        <?php
    }
}

if (isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $prn = $_POST['prn'];
  $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $secque = $_POST['secque'];
    $secans = $_POST['secans'];
    $branch = $_POST['branch'];
    $percentage = $_POST['percentage'];
    $yop = $_POST['yop'];
    $ssc = $_POST['ssc'];
    $hsc = $_POST['hsc'];
    $cv_file = $_POST['cv_file'];

    // Prepare SQL query
    $sql = "UPDATE studentlogin SET uname='$uname',prn='$prn',fname='$fname', lname='$lname',email='$email',phone='$phone',secque='$secque',secans='$secans',branch='$branch',percentage='$percentage',yop='$yop',ssc='$ssc',hsc='$hsc', cv_file='$cv_file' WHERE id='$id';";
    $res = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (!$res) {
        ?>
        <script>
            alert("Student could not be updated");
            window.location.replace("../editstud.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Student has been updated");
            window.location.replace("../viewstudents.php?result=success");
        </script>
        <?php
    }
}
?>