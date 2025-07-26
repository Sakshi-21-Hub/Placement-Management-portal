<?php 
      include_once '../includes/db.inc.php'; 
      if(isset($_POST['confirm'])) {
        $pass1 = $_POST['password1'];
        $hashed_password = md5($pass1);
        $pass2 = $_POST['password2'];
        $username = $_POST['username'];
        if ($pass1 != $pass2) { ?>
          <script type="text/javascript">
            alert("Passwords didnt match!!");
            window.location.replace("../newpass.php");
          </script>
        <?php
      } else {
        $sql = "UPDATE adminlogin set pwd = '$hashed_password' where uname = '$username';";
        mysqli_query($conn, $sql);
        ?>
          <script type="text/javascript">
            alert("Password changed successfully!!");
            window.location.replace("../login.php");
          </script>
        <?php
    }
    }
    ?>