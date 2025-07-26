<?php
// Require PHPMailerAutoload.php file
// require '../../mailer/vendor/autoload.php';
include('smtp/PHPMailerAutoload.php');

include_once '../includes/db.inc.php';

// Function to send email using SMTP
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
    $mail->Username = "khanvilkarsakshi.21@gmail.com";
    $mail->Password = "zkepgujqkddzsheh";
    $mail->SetFrom("khanvilkarsakshi.21@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;

    // Add multiple recipients
    if (is_array($to)) {
        foreach ($to as $recipient) {
            $mail->AddAddress($recipient);
        }
    } else {
        $mail->AddAddress($to);
    }

    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));

    if (!$mail->Send()) {
        return $mail->ErrorInfo;
    } else {
        return 'Sent';
    }
}

if (isset($_POST['add'])) {
    // Retrieve form data
    $companyname = $_POST['cname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    $sql2 = "SELECT email from studentlogin WHERE yop ='2024';";
    $res2 = mysqli_query($conn, $sql2);

    if (!$res2) {
        echo "Error fetching email addresses: " . mysqli_error($conn);
    } else {
        $to = array();
        while ($row = mysqli_fetch_assoc($res2)) {
            $to[] = $row['email'];
        }

        // Send email to all retrieved email addresses
        $msg = "Schedule Details:<br>Company Name: $companyname<br>Date: $date<br>Time: $time<br>Description: $description";
        $subject = "Updates about Schedule from UMIT TPC";
        $res2 = smtp_mailer($to, $subject, $msg);

        if ($res2 === 'Sent') {
            echo "Email sent successfully to all recipients.";
        } else {
            echo "Failed to send email: $res2";
        }
    }

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
}


if (isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $companyname = $_POST['companyname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    $sql2 = "SELECT email from studentlogin WHERE yop ='2024';";
    $res2 = mysqli_query($conn, $sql2);

    if (!$res2) {
        echo "Error fetching email addresses: " . mysqli_error($conn);
    } else {
        $to = array();
        while ($row = mysqli_fetch_assoc($res2)) {
            $to[] = $row['email'];
        }

        // Send email to all retrieved email addresses
        $msg = "Schedule Details:<br>Company Name: $companyname<br>Date: $date<br>Time: $time<br>Description: $description";
        $subject = "Updates about Schedule from UMIT TPC";
        $res2 = smtp_mailer($to, $subject, $msg);

        if ($res2 === 'Sent') {
            echo "Email sent successfully to all recipients.";
        } else {
            echo "Failed to send email: $res2";
        }
    }

    // Send email
    // $msg = "Schedule Details:<br>Company Name: $companyname<br>Date: $date<br>Time: $time<br>Description: $description";
    // $result = smtp_mailer('khanvilkarpriya.24@gmail.com', 'Updates about Schedule from UMIT TPC', $msg);

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