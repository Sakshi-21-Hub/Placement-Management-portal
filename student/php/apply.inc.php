<?php
session_start();
include_once '../includes/db.inc.php';
if (isset($_POST['check'])) {
    $companyname = $_POST['company'];
    $jobrole = $_POST['jobrole'];
    $jobtype = $_POST['jobtype'];
    $companyuser = $_POST['companyuser'];
    $user = $_SESSION['username'];
    
    $sql_student_info = "SELECT fname, branch, lname, percentage, yop, email FROM studentlogin WHERE fname='$user'";
    $result_student_info = mysqli_query($conn, $sql_student_info);

    if ($result_student_info && mysqli_num_rows($result_student_info) > 0) {
        $row_student_info = mysqli_fetch_assoc($result_student_info);
        $fname = $row_student_info['fname'];
        $lname = $row_student_info['lname'];
        $branch = $row_student_info['branch'];
        $percentage = $row_student_info['percentage'];
        $yop = $row_student_info['yop'];
        $email = $row_student_info['email'];
        
        
        $sql_select_uname = "SELECT uname FROM company WHERE companyname = '$companyname'";
            $result_uname = mysqli_query($conn, $sql_select_uname);
            
            if (mysqli_num_rows($result_uname) > 0) {
                $row_uname = mysqli_fetch_assoc($result_uname);
                $companyuser = $row_uname['uname']; 
               
            } else {
                // Handle if no matching company is found
                echo "No company found with the provided name.";
                exit; // Exit the script
            }
        }
        else{
                echo "no student data found.";
            }

    $sql = "insert into applied (companyname,lname, name, jobrole, jobtype,companyuser,branch,percentage,yop,email) values ('$companyname','$lname', '$fname', '$jobrole','$jobtype', '$companyuser','$branch','$percentage','$yop','$email');";
    $res = mysqli_query($conn, $sql);
    if ($res) { ?>
        <script>
            alert("You have applied for the company successfully!");
            window.location.replace("../viewapply.php");
        </script>
    <?php

    } else {
   ?>
        <script>
            alert("Apply Unsuccessful, Try Again!");
            window.location.replace("../viewapply.php");
        </script>
    <?php
    }
} else {

    ?>
    <script>
        alert("Missing 'comp' or 'jobrole' parameter in the URL. Please try again!");
        window.location.replace("../viewapply.php");
    </script>
<?php
}

?>