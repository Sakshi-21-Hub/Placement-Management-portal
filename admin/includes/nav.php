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
    /* Add more padding to the top of the navbar to create space */
    .navbar {
        padding-top: 1rem;
        position: relative;
    }

    /* Adjust the margin for the logo/profile section */
    .navbar-logo-profile {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top:1rem; /* Add margin between logo/profile and blue strip */
    }

    /* Add some space between the logo and college name */
    .navbar-logo {
        width: 200px;
        display: flex;
        align-items: center;
      

    }

    .college-info{
      display: flex;
      align-items: center;
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

    /* Center the horizontal links */
    .navbar-horizontal-links {
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-top: 1rem; /* Add margin between logo/profile and blue strip */
    }

    /* Add more spacing between horizontal links */
    .navbar-horizontal-links a {
        margin-right: 1rem;
    }

    /* Style the blue strip/navbar */
    .navbar-blue-strip {
        background-color: navy;
        color: white;
        padding: 1rem 0; /* Add padding to the top and bottom */
        list-style: none;
        margin-right: 0rem;
        margin-left: 0rem;
   
    }

    /* Adjust the margin for the dropdown button */
    .dropdown {
        margin-left: 0.5rem;
    }
    .dropdown-1 {
        margin-left: 0.5rem;
    }

    /* Center the dropdown links */
    .dropdown-menu {
      z-index: 1000;
        text-align: center;
    }

    /* Increase the font size of dropdown items */
    .dropdown-item {
        font-size: 14px;
    }

    /* Style the active page link */
    .nav-link.active {
        font-weight: bold;
    }

    /* Add a subtle box shadow to the dropdown menu */
    .dropdown-menu {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

 

    .social-icon {
      margin-right: 5px;
      color: black;
      font-size: 30px;
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

    .social-icons {
    display: flex;
    align-items: center;
    margin-left: 350px;
}

.social-logo {
   
    width: 30px;
    height: auto;
    margin-left: 1rem;
}


  .profile{
    margin-left: 15rem;
    position: relative;
  }

  .nav-item{
    margin-right: 1rem;

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
        <a href="https://www.facebook.com/umit.sndtwu/"><img src="images/fblogo.png" alt="Facebook" class="social-logo"></a>
        <a href="https://www.instagram.com/umit_sndtwu/?utm_medium=copy_link"><img src="images/insta.jpg" alt="Instagram" class="social-logo"></a>
        <a href="https://twitter.com/umitsndtwu/status/1465696148018974743?s=24"><img src="images/twitter.png" alt="Twitter" class="social-logo"></a>
        <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEdcFShSQNmwQAAAYuaNkm4kBMQiVtDPeXhQR5JtkT4gR1TyCSeB3fMqpHqAHZrJD6gHl0exbCl10ivfvMm2iVQsDisN_FKUyMYxH3QSj-jEBalDCRpFuG3rmVx1RAdPqT8mNo=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fumitsndtwu%2F"><img src="images/ld.png" alt="LinkedIn" class="social-logo"></a>
        </div>

        <?php if (isset($_SESSION['username'])) : ?>
                    
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
    <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCompany" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Company
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownCompany">
              <a class="dropdown-item" href="addcompanies.php">Add Company</a>
              <a class="dropdown-item" href="viewcmp.php">View Company</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownJob" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Job
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownJob">
              <a class="dropdown-item" href="addjob.php">Add Job</a>
              <a class="dropdown-item" href="viewjob.php">View Job</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Student
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="addstudents.php">Add Students</a>
              <a class="dropdown-item" href="viewstudents.php">View Students</a>
              <a class="dropdown-item" href="studentsapplication.php">Companies Applied</a>
              <a class="dropdown-item" href="selectedstudents.php">Selected Students</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Schedule
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="postschedule.php">Post Schedule</a>
              <a class="dropdown-item" href="viewschedule.php">View Schedule</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Study Material
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="poststudymaterial.php">Add Study Material</a>
              <a class="dropdown-item" href="viewstudymaterial.php">View Study Material</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownQuery" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Query
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownQuery">
              <a class="dropdown-item" href="query.php">Answer Query</a>
            </div>
          </li>
    </div>

    <!-- Add the rest of your HTML content here -->

    <!-- Bootstrap JS directly from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
 $(document).ready(function(){
    $('.dropdown-toggle').dropdown();
});
</script>





</body>

</html>
