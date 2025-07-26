<?php
// Start the session at the very beginning of your PHP script
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your meta tags and title here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Add the Bootstrap CSS directly from a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add the Font Awesome CSS directly from a CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Add your custom styles here -->
    <style>
        /* Your existing styles remain unchanged */
        .college-name {
            font-size: 20px;
            line-height: 1.4;
            color: navy;
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
            font-family: 'Georgia', serif; /* Add the desired font family */
            text-transform: none;
        }

        .social-logo {
            width: 30px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
            margin-right: 3px;
        }

        .navbar-blue-strip {
            background-color: navy;
            color: white;
            margin-top: 1rem; /* Add margin between logo/profile and blue strip */
        }

        .navbar-horizontal-links {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-top: 1rem; /* Add margin between logo/profile and blue strip */
        }

        .navbar-horizontal-links a {
            margin: 0 3.5rem;
        }
        
        .navbar-logo-profile {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 1rem; /* Add margin between logo/profile and blue strip */
}

.navbar-logo {
    margin-right: 1rem;
    width: 70px; /* Set a maximum width for the logo */
}

.social-icons {
    display: flex;
    align-items: center;
    margin-left: 20rem; /* Add margin to the left of social icons */
}

.social-icon {
    margin-right: 3px;
    color: black;
    font-size: 30px;
}

.social-icon {
    width: 30px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
    margin-left: 1rem;
}

.dropdown {
    display: flex;
    align-items: center;
    margin-left: 30rem; /* Add margin to the right of the profile section */
}

.profile{
    margin-left: 15rem;
}

/* Adjust z-index and positioning for the dropdown menu */
.dropdown-menu {
            z-index: 100px; /* Adjust as needed */
            position: absolute;
            top: 100%; /* Position below the parent */
            right: 10px;
            /* Add more styling as needed */
        }




    </style>
</head>

<body>

    <!-- Your existing navbar code with some modifications -->
    <nav class="navbar navbar-light">
        <div class="container">
            <div class="navbar-brand navbar-logo-profile">
            <a class="navbar-brand" href="http://localhost/Sakshi-Wed/sakshi/Major_Project_B/index.php">
                <img src="../images/logo/logo.png" alt="" width="25%" height="auto">
                <span class="college-name" style="color: navy; display: inline-block; vertical-align: middle;">
        <strong class="collegen-name" style="font-size: 25px;">Usha Mittal Institute of Technology</strong><br>
        <strong class="college-name" style="font-size: 18px; margin-right: 70px;">SNDT Women's University, Mumbai</strong>
      </span>
                
            </a>

        <div class="social-icons">
        <a href="https://www.facebook.com/umit.sndtwu/"><img src="images/fblogo.png" alt="Facebook" class="social-logo"></a>
        <a href="https://www.instagram.com/umit_sndtwu/?utm_medium=copy_link"><img src="images/insta.jpg" alt="Instagram" class="social-logo"></a>
        <a href="https://twitter.com/umitsndtwu/status/1465696148018974743?s=24"><img src="images/twitter.png" alt="Twitter" class="social-logo"></a>
        <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEdcFShSQNmwQAAAYuaNkm4kBMQiVtDPeXhQR5JtkT4gR1TyCSeB3fMqpHqAHZrJD6gHl0exbCl10ivfvMm2iVQsDisN_FKUyMYxH3QSj-jEBalDCRpFuG3rmVx1RAdPqT8mNo=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fumitsndtwu%2F"><img src="images/ld.png" alt="LinkedIn" class="social-logo"></a>
        </div>


        

                <!-- Your existing dropdown code remains unchanged -->
                <?php if (isset($_SESSION['username'])) : ?>
    <div class="profile">
        <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['username']; ?>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="sprofile.php"><i class="fas fa-user-cog"></i>&nbsp;Profile</a>
                <a class="dropdown-item" href="editprofile.php"><i class="fas fa-user-cog"></i>&nbsp;Edit Profile</a>
                <a class="dropdown-item" href="changepass.php"><i class="fas fa-pen"></i>&nbsp;Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../login.php">Logout</a>
            </div>
        </div>
    </div>
<?php else : ?>
    <!-- Placeholder for non-logged-in user -->
    <div>
        <a href="../login.php" class="btn btn-light text-white">Login</a>
    </div>
<?php endif; ?>


            </div>
        </div>
    </nav>

    <!-- Your existing navbar-blue-strip code remains unchanged -->
    <div class="navbar navbar-blue-strip">
        <div class="container">
            <div class="navbar-horizontal-links">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="viewapply.php">Apply</a>
                <a class="nav-link" href="companiesapplied.php">View Applications</a>
                <a class="nav-link" href="viewcompanies.1.php">View Companies</a>
                <a class="nav-link" href="viewstudymaterial.php">View Study Material</a>
                <a class="nav-link" href="help.php">Help</a>
            </div>
        </div>
    </div>

    <!-- Add the rest of your HTML content here -->

    <!-- Bootstrap JS directly from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>

