<?php
// Require PHPMailerAutoload.php file
// require '../../mailer/vendor/autoload.php';
require '../mailer/smtp/PHPMailerAutoload.php';

include_once '../includes/db.inc.php';

// Function to send email using SMTP
function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = 2; 
    $mail->Username = "krishna.rabs@gmail.com";
    $mail->Password = "Krishna@rabs";
    $mail->SetFrom("krishna.rabs@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        return $mail->ErrorInfo;
    } else {
        return 'Email is sent successfully';
    }
}

if (isset($_POST['add'])) {
    // Retrieve form data
    $companyname = $_POST['cname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    // Send email
    $msg = "Schedule Details:<br>Company Name: $companyname<br>Date: $date<br>Time: $time<br>Description: $description";
    $result = smtp_mailer('gupta10krishna@gmail.com', 'Schedule Added', $msg);
    if ($result === true) {
        // Email sent successfully
        $sql1 = "INSERT INTO schedule (companyname, date, time, description) VALUES ('$companyname', '$date', '$time', '$description');";
        $res1 = mysqli_query($conn, $sql1);
        if (!$res1) {
?>
            <script>
                alert("Schedule could not be added");
                window.location.replace("../postschedule.php?result=fail");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Schedule has been added successfully");
                window.location.replace("../viewschedule.php?result=success");
            </script>
        <?php
        }
    } else {
        // Failed to send email
        echo "Sorry, something went wrong: $result";
    }
}

if (isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $companyname = $_POST['companyname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    // Update schedule in database
    $sql = "UPDATE schedule SET companyname='$companyname', date='$date', time='$time', description='$description' WHERE id='$id';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        ?>
        <script>
            alert("Schedule could not be updated");
            window.location.replace("../postschedule.php?result=fail");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Schedule has been updated");
            window.location.replace("../viewschedule.php?result=success");
        </script>
<?php
    }
}
?>