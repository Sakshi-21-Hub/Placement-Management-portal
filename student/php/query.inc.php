<?php
include_once '../includes/db.inc.php';
if (isset($_POST['add-query'])) {

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    $sql1 = "INSERT INTO queries (uname,  email,query) VALUES ('$uname','$email','$query');";
    $res1 = mysqli_query($conn, $sql1);
    if (!$res1) {
        ?>
        <script>
            alert("query could not be added");
            window.location.replace("../askquery.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Query has been added successfully");
            window.location.replace("../viewquery.php?result=success");
        </script>
        <?php
    }
}


?>
