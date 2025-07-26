<?php
include_once '../includes/db.inc.php';

if (isset($_POST['submit'])) {
    $filename = $_FILES['file']['tmp_name'];
    // $file = fopen($file, 'r');

    // fgetcsv($file, 10000, ",");
    // mysqli_begin_transaction($conn);

    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");

        // Check if file file is valid
        if ($file === false) {
            die("Error opening file");
        }

        // Skip the header row
        fgetcsv($file, 10000, ",");

        // Start a transaction
        mysqli_begin_transaction($conn);

        while(($getData = fgetcsv($file, 10000, ",")) !== FALSE)  {
            // Check if the data array has the expected number of columns
            // if (count($data) != 16) {
            //     echo "Error: Invalid number of columns in CSV file.";
            //     continue; // Skip this row and move to the next one
            // }

            $uname = $getData[0];
            $prn = $getData[1];
            $pwd = $getData[2];
            $fname = $getData[3];
            $lname = $getData[4];
            $email = $getData[5];
            $phone = $getData[6];
            $secque = $getData[7];
            $secans = $getData[8];
            $branch = $getData[9];
            $percentage = $getData[10];
            $yop = $getData[11];
            $ssc = $getData[12];
            $hsc = $getData[13];
            $cv_file = $getData[14];
            $hashed_password =md5($pwd);


            $sql = "INSERT INTO studentlogin (uname, prn, pwd, fname, lname, email, phone, secque, secans, branch, percentage, yop, ssc, hsc, cv_file) 
                VALUES ('$uname', '$prn', '$hashed_password', '$fname', '$lname', '$email', '$phone', '$secque', '$secans', '$branch', '$percentage', '$yop', '$ssc', '$hsc', '$cv_file')";

            $res = mysqli_query($conn, $sql);
            if ($res) {
?>
                <script>
                    alert("CSV File has been successfully Imported.");
                    window.location.replace("../viewstudents.php?result=success");
                </script>
        <?php

            }
        }
        fclose($file);

        ?>
        <script>
            alert("Invalid File: Please Upload CSV File of Correct Form.");
            window.location.replace("../addstudents.php?result=fail");
        </script>
<?php
    }
}
$conn->close();
?>