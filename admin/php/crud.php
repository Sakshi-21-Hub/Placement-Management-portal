<?php
include_once '../includes/db.inc.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "delete from company where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Company could not be deleted");
            window.location.replace("../viewcmp.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Company has been deleted");
            window.location.replace("../viewcmp.php?result=success");
        </script>
        <?php
    }
}

if (isset($_GET['delete1'])) {
    $id = $_GET['delete1'];
    $sql = "delete from training where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Course could not be deleted");
            window.location.replace("../viewtraining.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Course has been deleted");
            window.location.replace("../viewtraining.php?result=success");
        </script>
        <?php
    }
}

if (isset($_GET['delete2'])) {
    $id = $_GET['delete2'];
    $sql = "delete from study_materials where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Study Material could not be deleted");
            window.location.replace("../viewstudymaterial.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Study Material has been deleted");
            window.location.replace("../viewstudymaterial.php?result=success");
        </script>
        <?php
    }
}

if (isset($_GET['delete3'])) {
    $id = $_GET['delete3'];
    $sql = "delete from job where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("job could not be deleted");
            window.location.replace("../viewjob.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Job has been deleted");
            window.location.replace("../viewjob.php?result=success");
        </script>
        <?php
    }
}

if (isset($_GET['delete4'])) {
    $id = $_GET['delete4'];
    $sql = "delete from studentlogin where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("student details could not be deleted");
            window.location.replace("../viewstudents.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("student details has been deleted");
            window.location.replace("../viewstudents.php?result=success");
        </script>
        <?php
    }
}

if (isset($_GET['delete5'])) {
    $id = $_GET['delete5'];
    $sql = "delete from schedule where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("schedule could not be deleted");
            window.location.replace("../viewschedule.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("schedule details has been deleted");
            window.location.replace("../viewschedule.php?result=success");
        </script>
        <?php
    }
}



if (isset($_GET['delete6'])) {
    $id = $_GET['delete6'];
    $sql = "delete from queries where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Query could not be deleted");
            window.location.replace("../query.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Query details has been deleted");
            window.location.replace("../query.php?result=success");
        </script>
        <?php
    }
}

if (isset($_GET['delete7'])) {
    $id = $_GET['delete7'];
    $sql = "delete from adminlogin where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Admin could not be deleted");
            window.location.replace("../addadmins.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Admin details has been deleted");
            window.location.replace("../viewadmin.php?result=success");
        </script>
        <?php
    }
}