<?php
include_once '../includes/db.inc.php';
if (isset($_POST['add'])) {
    $cname = $_POST['cname'];
    $status = $_POST['status'];
    $jobtype = $_POST['jobtype'];
    $jobrole = $_POST['jobrole'];
    $joblocation = $_POST['joblocation'];
    $salary = $_POST['salary'];

    $sql1 = "INSERT INTO job (cname, status, jobtype,  jobrole, joblocation,salary) VALUES ('$cname', '$status','$jobtype','$jobrole','$joblocation','$salary');";
    $res1 = mysqli_query($conn, $sql1);
    if (!$res1) {
        ?>
        <script>
            alert("Job could not be added");
            window.location.replace("../addjob.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Job has been added successfully");
            window.location.replace("../viewjob.php?result=success");
        </script>
        <?php
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $cname = $_POST['cname'];
    $status = $_POST['status'];
    $jobtype = $_POST['jobtype'];
    $jobrole = $_POST['jobrole'];
    $joblocation = $_POST['joblocation'];
    $salary = $_POST['salary'];

    $sql = "UPDATE job SET cname='$cname', status='$status',jobtype='$jobtype', jobrole='$jobrole', joblocation='$joblocation', salary ='$salary' WHERE id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Job could not be updated");
            window.location.replace("../editjob.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Job has been updated");
            window.location.replace("../viewjob.php?result=success");
        </script>
        <?php
    }
}
?>
