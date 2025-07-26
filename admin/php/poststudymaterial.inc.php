<?php
include_once '../includes/db.inc.php';
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_url = $_POST['file_url'];

    $sql1 = "INSERT INTO study_materials (title, description, file_url) VALUES ('$title', '$description', '$file_url');";
    $res1 = mysqli_query($conn, $sql1);
    if (!$res1) {
        ?>
        <script>
            alert("Study Material could not be added");
            window.location.replace("../poststudymaterial.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Study Material has been added successfully");
            window.location.replace("../viewstudymaterial.php?result=success");
        </script>
        <?php
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_url = $_POST['file_url'];

    $sql = "UPDATE study_materials SET title='$title', description='$description', file_url='$file_url' WHERE id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Study Material could not be updated");
            window.location.replace("../poststudymaterial.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Study Material has been updated");
            window.location.replace("../viewstudymaterial.php?result=success");
        </script>
        <?php
    }
}
?>
