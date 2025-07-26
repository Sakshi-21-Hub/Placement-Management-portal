<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Add the Bootstrap CSS directly from a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add the Font Awesome CSS directly from a CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        .navbar {
            padding-bottom: 1rem; /* Add padding to create space for the blue strip */
        }

        .navbar-logo-profile {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1rem; /* Add margin between logo/profile and blue strip */
        }

        .navbar-logo {
            margin-right: 1rem;
            max-width: 120px; /* Set a maximum width for the logo */
        }

        .college-name{
      font-size: 20px;
        line-height: 1.4;
        color: navy;
        text-align: center;
        margin-bottom: 10px;
        font-weight: bold;
        font-family: 'Georgia', serif; /* Add the desired font family */
        text-transform: none;
    }

        .navbar-horizontal-links {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .navbar-horizontal-links a {
            margin: 0 6rem;
        }

        .navbar-blue-strip {
            background-color: navy;
            color: white;
            margin-top: 1rem; /* Add margin between logo/profile and blue strip */
        }

        /* Adjust styles for the dropdown button */
        .dropdown-toggle {
            color: black;
            background-color: white;
        }


        /* Add margin to move the dropdown away from the logo */
        .dropdown {
            margin-left: 70rem;
        }
        
         /* Custom CSS for horizontal navigation links and social media icons */
  .navbar-horizontal-links,
  .navbar-social-media {
    display: flex;
    align-items: center;
  }

  .navbar-horizontal-links a,
  .navbar-social-media a {
    color: white; /* Text color for the links and icons */
    margin-right: 100px; /* Adjust the spacing between links and icons as needed */
  }

  .social-icons {
      display: flex;
      align-items: center; 
      margin-left: 700px;
      margin-right: 5px;
    }

    .social-icons a {
    margin-right: 10px; /* Adjust the spacing between social media icons */
}

 



    .social-logo {
    width: 30px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
    margin-left: -10px;
  }

  .profile{
    margin-left: 250px;
    position: relative;
    
  }


      
    </style>
</head>

<body>

    <nav class="navbar navbar-light">
        <div class="container">
            <div class="navbar-logo-profile">
            <a class="navbar-brand" href="http://localhost/Sakshi-Wed/sakshi/Major_Project_B/index.php">
                    <img src="../images/logo/logo.png" alt="" width="25%" height="auto">
                    <span class="college-name" style="color: navy; display: inline-block; vertical-align: middle;">
        <strong class="collegen-name" style="font-size: 25px;">Usha Mittal Institute of Technology</strong><br>
        <strong class="college-name" style="font-size: 18px; margin-right: 70px;">SNDT Women's University, Mumbai</strong>
      </span>
                </a>

        <div class="social-icons">
        <a href="https://www.facebook.com/umit.sndtwu/"><img src="images/images/fblogo.png" alt="Facebook" class="social-logo"></a>
        <a href="https://www.instagram.com/umit_sndtwu/?utm_medium=copy_link"><img src="images/images/insta.jpg" alt="Instagram" class="social-logo"></a>
        <a href="https://twitter.com/umitsndtwu/status/1465696148018974743?s=24"><img src="images/images/twitter.png" alt="Twitter" class="social-logo"></a>
        <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEdcFShSQNmwQAAAYuaNkm4kBMQiVtDPeXhQR5JtkT4gR1TyCSeB3fMqpHqAHZrJD6gHl0exbCl10ivfvMm2iVQsDisN_FKUyMYxH3QSj-jEBalDCRpFuG3rmVx1RAdPqT8mNo=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fumitsndtwu%2F"><img src="images/images/ld.png" alt="LinkedIn" class="social-logo"></a>
        </div>
                <?php if (isset($_SESSION['username'])) : ?>
                <!--  <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/umit.sndtwu/"><i class="fab fa-facebook fa-2x"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/umit_sndtwu/?utm_medium=copy_link"><i class="fab fa-instagram fa-2x"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/umitsndtwu/status/1465696148018974743?s=24"><i class="fab fa-twitter fa-2x"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEdcFShSQNmwQAAAYuaNkm4kBMQiVtDPeXhQR5JtkT4gR1TyCSeB3fMqpHqAHZrJD6gHl0exbCl10ivfvMm2iVQsDisN_FKUyMYxH3QSj-jEBalDCRpFuG3rmVx1RAdPqT8mNo=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fumitsndtwu%2F"><i class="fab fa-linkedin fa-2x"></i> </a>
        </li>  -->

                    <div class="profile">
                        <button class="btn btn-light dropdown-toggle" type="button" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user-circle" style="font-size: 20px;"></i>&nbsp;<?php echo $_SESSION['username']; ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="editprofile.php"><i class="fas fa-user-cog"
                                    style="font-size: 15px;"></i>&nbsp;Edit Profile</a>
                            <a class="dropdown-item" href="cprofile.php"><i class="fas fa-user-cog"
                                    style="font-size: 15px;"></i>&nbsp;View Profile</a>
                            <a class="dropdown-item" href="changepass.php"><i class="fas fa-pen"
                                    style="font-size: 15px;"></i>&nbsp;Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../login.php">Logout</a>
                        </div>
                    </div>
                <?php else : ?>
                    <!-- Placeholder for non-logged-in user -->
                    <div>
                        <a href="../login.php" class="btn btn-light">Login</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="navbar navbar-blue-strip">
        <div class="container">
            <div class="navbar-horizontal-links">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="viewapplicants.php">View Candidates</a>
                <a class="nav-link" href="about.php">About Us</a>
                
                
            </div>
        </div>
    </div>

    <!-- Add the rest of your HTML content here -->

    <!-- Bootstrap JS directly from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
