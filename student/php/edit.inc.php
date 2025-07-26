<?php
if (isset($_POST['edit'])) {
    include_once '../includes/db.inc.php';
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $yop = $_POST['yop'];
    $branch = $_POST['branch'];
    $percentage = $_POST['percentage'];
    $ssc = $_POST['ssc'];
    $hsc = $_POST['hsc'];
    // $cv_file = $_POST['cv_file'];
    $fileName = $_FILES['cv_file']['name'];
    $fileTmpName = $_FILES['cv_file']['tmp_name'];

    // var_dump($_FILES);

    $uploadFolder = 'uploads';
    if (!file_exists($uploadFolder)) {
        mkdir($uploadFolder, 0777, true);
    }

    // Move the uploaded file to the folder
    $destination = $uploadFolder . '/' . $fileName;
    move_uploaded_file($fileTmpName, $destination);


    echo $destination;

    $sql = "update studentlogin set uname='$uname', fname='$fname', lname='$lname', email= '$email',  branch= '$branch',phone='$phone', yop='$yop', percentage='$percentage', ssc='$ssc', hsc='$hsc', cv_file ='$fileName' where id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
?>
        <script>
            alert("Profile couldn't be edited!");
            window.location.replace("../editprofile.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Profile has been edited");
            window.location.replace("../sprofile.php");
        </script>
<?php
    }
}
?>