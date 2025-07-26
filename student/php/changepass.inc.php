<?php
      include_once '../includes/db.inc.php';
      session_start();  
      if (isset($_POST['change'])) {
        $user = $_SESSION['username'];
        $pwd1 = $_POST['pwd1'];
        $pwd2 = $_POST['pwd2'];
        $hashed_password = md5($pwd1);
        if ($pwd1 != $pwd2) {
        ?>
        <script>
            alert("Passwords didn't match!!");
            window.location.replace("../changepass.php");
         </script>
        <?php
      } else {
        $sql = "UPDATE studentlogin set  pwd = '$hashed_password' where uname='$user';";
        mysqli_query($conn, $sql);
        ?>
        <script>
            alert("Password has been changed successfully");
            window.location.replace("../index.php");
         </script>
        <?php
    }
    }
