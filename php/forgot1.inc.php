<?php
include_once '../includes/db.inc.php';

if (isset($_POST['submit'])) {
    $ans = mysqli_real_escape_string($conn, $_POST['answer']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    // Define an associative array mapping table names to redirect pages
    $tablesToRedirects = [
        'studentlogin' => '../newpass.php',
        'adminlogin' => '../newpass1.php',
        'company' => '../newpass2.php',
    ];

    // Flag to check if a matching answer was found
    $matchFound = false;

    // Loop through the tables and attempt to find a match
    foreach ($tablesToRedirects as $table => $redirectPage) {
        $sql = "SELECT secans FROM $table WHERE uname=? LIMIT 1";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $dbans);
            if (mysqli_stmt_fetch($stmt)) {
                if ($ans == $dbans) {
                    $matchFound = true;
                    header("Location: " . $redirectPage . "?username=" . urlencode($username));
                    exit(); // Stop script execution after redirect
                }
            }
            mysqli_stmt_close($stmt);
        }

        // If a match was found, no need to continue checking the other tables
        if ($matchFound) {
            break;
        }
    }

    // If no matches were found in any table
    if (!$matchFound) {
        echo "<script type='text/javascript'>
                alert('Answers did not match');
                window.location.replace('../login.php');
              </script>";
        exit();
    }
}
?>
