<?php
include_once '../includes/db.inc.php';
if (isset($_POST['add'])) {

    $query = $_POST['query'];
    $answer = $_POST['answer'];
  
    $sql1 = "INSERT INTO queries (query, answer) VALUES ('$query', '$answer');";
    $res1 = mysqli_query($conn, $sql1);
    if (!$res1) {
        ?>
        <script>
            alert("query could not be added");
            window.location.replace("../editquery.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Study Material has been added successfully");
            window.location.replace("../query.php?result=success");
        </script>
        <?php
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $query = $_POST['query'];
    $answer = $_POST['answer'];

    $sql = "UPDATE queries SET query='$query', answer='$answer' Where id=$id;";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("query could not be updated");
            window.location.replace("../editquery.php?result=fail");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Query has been updated");
            window.location.replace("../query.php?result=success");
        </script>
        <?php
    }
}
?>