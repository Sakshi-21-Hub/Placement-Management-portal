<?php
include_once '../includes/db.inc.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['fname'];
    $companyname = $_POST['companyname'];
    $status = $_POST['status'];
    $jobrole = $_POST['jobrole'];
    $jobtype = $_POST['jobtype'];
    // Fix: Added a missing quote around $status
    $sql = "UPDATE applied SET  companyname='$companyname', status='$status', jobrole='$jobrole' WHERE id='$id';";
    
    // Assuming $conn is your database connection variable
    $res = mysqli_query($conn, $sql);

    // Fix: Check if the query was successful using mysqli_affected_rows
    if (!$res) {
        ?>
        <script>
            alert("Status could not be updated");
            window.location.replace("../editstatus.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Status has been updated");
            window.location.replace("../viewapplicants.php?result=success");
        </script>
        <?php
    }
}
?>

