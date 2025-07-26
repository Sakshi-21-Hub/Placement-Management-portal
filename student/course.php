
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usha Mittal Institute Of Technology</title>
    <!-- Owl Stylesheets -->
    <!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />-->
    <link href="https://sameer.gov.in/public/website/css/fonts-awesome.min.css " rel="stylesheet">
    <link href="https://sameer.gov.in/public/website/css/font-awesome.min.css " rel="stylesheet">
    <link href="https://sameer.gov.in/public/website/css/bootstrap.min.css " rel="stylesheet">
    <link rel="stylesheet" href="https://sameer.gov.in/public/website/css/carousel.css">
    <link rel="stylesheet" href="https://sameer.gov.in/public/website/css/slick.css ">
    <link rel="stylesheet" href="https://sameer.gov.in/public/website/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://sameer.gov.in/public/website/css/owl.theme.default.min.css ">
    <link rel="stylesheet" href="https://sameer.gov.in/public/website/css/fancybox.css ">
    <link rel="stylesheet" href="https://sameer.gov.in/public/website/css/utilities.css ">
    <link rel="stylesheet" type="text/css" class="themeCss" title="blue-theme"
        href="https://sameer.gov.in/public/website/css/blue.css ">
    <link href="https://sameer.gov.in/public/website/css/style.css " rel="stylesheet" type="text/css">
    <link href="https://sameer.gov.in/public/website/css/responsive.css " rel="stylesheet">
    <link rel="alternate stylesheet" type="text/css" media="screen" title="black-theme"
        href="https://sameer.gov.in/public/website/css/black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php include_once 'includes/head.php' ?>
   <?php
// Start the session at the very beginning of your PHP script
session_start();
?>  
        <!-- <img src="images/logo/logo.png" alt="" width="20%" height="auto" > -->

    <link rel='shortcut icon' type='image/x-icon' href='images/logo/logo.png'>
    <style>
    #myBtn {
        border-radius: 50%;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #ff8a00;
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 20px;
    }

    #myBtn:hover {
        background-color: #555;
    }
    .social-media ul{
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .social-media li{
        display: inline-block;
        margin-right: 10px;
    }
    .social-media a{
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: #333;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        color: #fff;
        font-size: 20px;
        transition: background-color 0.3s ease;
    }
    .social-media a:hover{
        background-color: #4267B2;    
    }
    .social-media a.twitter{
        background-color: #1DA1F2;
    }
    .social-media a.instagram{
        background: #833AB4;
        background: linear-gradient(to right, #833AB4, #E1306C);
    }
    .social-media a.linkedin{
        background-color: #0077B5;
    }
    body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .section {
            background-color: #ffffff;
            margin: 2px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
h1{
    text-align: center; 
}
        h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 15px;
            text-align: center; 
            margin-top: 50px;
        }
            .col-lg-4 {
            flex: 0 0 auto;
        }
        .section {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .section:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .section p {
     
        line-height: 1.4;
        color: #333;
        text-align: center;
        margin-bottom: 10px;
        font-weight: normal;
        font-family: 'Arial', sans-serif; /* Add the desired font family */
        text-transform: none;
    }


    #circleStatsContainer {
         display: flex;
        flex-wrap: wrap; /* Allow items to wrap to the next line */
        justify-content: space-around;
        margin-top: 30px;
    }

    /* Individual Circular Stat */
    .circle-stat {
        text-align: center;
        color: #333;
        font-family: 'Arial', sans-serif;
        margin-bottom: 20px; /* Add margin to create space between items */
        width: 30%;
    }

    /* Circular Stat Canvas */
    canvas {
        margin-top: 10px;
        color: navy;
         margin: 0 auto;
    }


    /* Placement Statistics Table */
    #placementTable {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    #placementTable th,
    #placementTable td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
        font-size: 20px;
        color: black;
    }
    

    #placementTable th {
        background-color: navy;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        font-size: 20px;
    }

    #placementTable tr:nth-child(even) {
        background-color: #f8f8f8;
    }

    #placementTable tr:hover {
        background-color: #eaeaea;
    }

        .card {
            max-width: 350px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            text-align: center;
          
        }

        img {
            max-width: 100%;
            height: auto;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
                        .box {
                            padding: 20px;
                            border-radius: 10px;
                            transition: background-color 0.3s, box-shadow 0.3s;
                            background-color: #fff;
                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                            margin-bottom: 20px;
                            margin-top: 20px;
                        }

                        .box:hover {
                            background-color: #007bff;
                            color: #fff;
                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
                        }
                      
    /* CSS styles */
    .upcoming-events-container {
      /* Enable horizontal scrolling */
        white-space: nowrap; /* Prevent wrapping */
   
        padding: 10px;
    }

    .upcoming-events-body {
        display: inline-flex; /* Display events in a single line */
         /* Animation for scrolling */
    }
    .upcoming-event-card {
        animation: scroll 18s linear infinite; /* Loop the animation indefinitely */
    }
    .card-body {
        max-height: 250px; /* Set maximum height for the card body */
        overflow: auto; /* Hide overflow content */
    }
    

    .card-text {
      /* Hide overflow content */
        text-overflow: ellipsis; /* Add ellipsis (...) for overflow text */
        white-space: nowrap; /* Prevent text wrapping */
    }

    .custom-date {
        margin-top: 10px; /* Add spacing between text */
    }
    

    </style>


</head>

<body>
    <header class="mainHeader">
        <div class="top_header">
            <div class="Main_page">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="Sitemap">
                            <a href="javascript:void(0);" class="topLinks"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i></a>
                            <ul>
                                <li style="color: #000">
                                    <script>
                                    var mydate = new Date()
                                    var year = mydate.getYear()
                                    if (year < 1000)
                                        year += 1900
                                    var day = mydate.getDay()
                                    var month = mydate.getMonth()
                                    var daym = mydate.getDate()
                                    if (daym < 10)
                                        daym = "0" + daym
                                    var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday",
                                        "Friday", "Saturday")
                                    var montharray = new Array("January", "February", "March", "April", "May", "June",
                                        "July", "August", "September", "October", "November", "December")
                                    document.write(" " + daym + " " + montharray[month] + ", " + year + ", " + dayarray[
                                        day] + " ")
                                    </script>
                                </li>
                                <li> <a href="https://maps.app.goo.gl/HLgegr26r2QFkavj8" title="Umitmap">UMIT</a></li>
                                <!--<li> <a href="#">FAQ </a></li>-->

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="Top_Nav">
                            <ul>

                                <!-- <li class="resLink"> <a href="Screen_Reader_Access" title="Screen Render Access"> Screen Render Access </a></li> -->
                                <li class="resLink icont-wrap"> <span id="btn-decrease" title="Decrease font size"> A-</span> 
                                 <span id="btn-orig" title="Reset font size">A
                                    </span><span id="btn-increase" title="Increase font size">A+</span></li>
                                <li class="colorChange">
                                    <a href="javascript:void(0)" data-color="blue" class="blue" title="blue"></a>
                                    <a href="javascript:void(0)" data-color="black" class="black" title="black"></a>
                                    <a href="javascript:void(0)" data-color="green" class="green" title="green"></a>
                                </li>

                                <!-- <li class="resLink langList ">
                                    <a href="javascript:void(0)" class="lanSel changeLang"> <button name="lang"
                                            id="lang" type="button" value="hi" title="Hindi"
                                            style="background: #1b1a1a; border: none;  color: #fff; cursor: pointer;">Hindi</button>
                                    </a>
                                </li> -->

                                                                <!--not working this link <li class="resLink langList"> 
                  <a href="#" value="en" class="lanSel"> English </a>
                  <ul class="langDrop" id ="lang">
                    <li><a href="#" value="hi" class="lanTam">हिंदी</a></li>
                    <li><a href="#" value="en" class="lanEng">English</a></li>
                  </ul>
                </li>  -->
                            </ul>
                            <div class="social-media">
                                <ul>
            <li><a href="https://www.facebook.com/umit.sndtwu/" target="_blank" title="Facebook" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/umitsndtwu/status/1465696148018974743?s=24" target="_blank" title="Twitter" class="twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/umit_sndtwu/?utm_medium=copy_link" target="_blank" title="Instagram" class="instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEdcFShSQNmwQAAAYuaNkm4kBMQiVtDPeXhQR5JtkT4gR1TyCSeB3fMqpHqAHZrJD6gHl0exbCl10ivfvMm2iVQsDisN_FKUyMYxH3QSj-jEBalDCRpFuG3rmVx1RAdPqT8mNo=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fumitsndtwu%2F" target="_blank" title="LinkedIn" class="linkedin"><i class="fab fa-linkedin"></i></a></li>
        </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="Bottom_Header">
            <div class="Main_page">
                <div class="row logo">
                    <div class="col-lg-9 d-flex logoWid">
                        <a href="../index.php" title="UMIT"><img src="images/logo.png"
                            style="margin-top: 12px;"
                            alt="UMIT Logo"></a>
                        <div class="header-md">
                       <!-- <a href="https://www.g20.org/en/" target="_blank" title="G20"><img src="https://sameer.gov.in/public/website/images/g20logo.jpg"
                                style="background-color: #fff; border-radius: 5px;margin-top: 12px;"
                                alt="G20"></a>-->
                            <div class="header-right">
                                <!--<h3>Society for Applied Microwave Electronics Engineering & Research</h3>-->
                                                                <h3>Usha Mittal Insitute Of Technology</h3>
                                <h4>SNDT Womens University Mumbai</h4>
                                <!-- <h4>Government of India</h4> -->
                                


                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 blue-search-box">
                        <a href="javascript:void(0);" class="searchBtn"><i class="fa fa-search"
                                aria-hidden="true"></i></a>
                        <form class="example" action="https://sameer.gov.in/search" id="search_form">
                        <label for="searchval" style="display:none">search</label>
                        <input class="form-control " aria-labelledby="searchval" id="searchval" placeholder="Search for..." name="searchval" type="text">
                            
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        </form>

                    </div> -->
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="topnav" id="myTopnav">
            <div class="resMenu">
                <a href="javascript:void(0);" class="menuBtn"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
            <div class="menuPage">
                <div class="resMainmenu">
                    <a href="javacript:void(0);" class="menuClsBtn"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <ul class="navMenu">
                                                                                                                        <li class=""><a href="index.php"
                                class="active" title="Home">
                                                                Home
                                                                 </a>
                                                    </li>
                        
                                                                                                <li class=""><a href="viewapply.php"
                                class="" title="Apply">
                                                                <!-- Recruitment &amp; Training -->
                                                                Apply
                                                                 </a>
                                                    </li>

                                        
                                                    <li class=""><a href="companiesapplied.php"
                                class="" title="View applications">
                                                                View Applications
                                                                 </a>
                                                    </li>
                                                                                                <li class=""><a href="viewcompanies.1.php"
                                class="" title="view companies">
                                                                View Companies
                                                                 </a>
                                                    </li>
                                                    <li class=""><a href="viewstudymaterial.php"
                                class="" title="StudyMaterial">
                                                                View Study Material
                                                                 </a>
                                                     </li>

                                                    <li class="menuHover"><a href="#"
                                class="" title="Query">
                                                                Query
                                                                 <i class="fa fa-caret-down"></i>  </a>
                                                        <ul class="dropMenu">
                                                                                               
                                                                                                                                <li><a href="askquery.php" title="Add Student">
                                                                                Ask Query
                                        </a></li>

                                        <li><a href="viewquery.php" title="View Query">
                                                                                View Query
                                        </a></li>                                                                                                
                                                                                            </ul>
                                                    </li>

                                                                                                <li class=""><a href="help.php"
                                class="" title="Help">
                                                                Help
                                                                 </a>
                                                    </li>

                                                    <li class="menuHover"><a href="#"
                                class="" title="Profile">
                                                                Profile
                                                                 <i class="fa fa-caret-down"></i>  </a>
                                                        <ul class="dropMenu">
                                                                                               
                                                                                                                                <li><a href="sprofile.php" title="Add Student">
                                                                                View Profile
                                        </a></li>

                                        <li><a href="editprofile.php" title="Edit Proflie">
                                                                                Edit Profile
                                        </a></li>
                                                                                        
                                                

                                                    <li><a href="changepass.php" title="Change Password">
                                                                                Change Password
                                        </a></li>
                                                                                            </ul>
                                                    </li>    
                                                    
                                                                                                <li class=""><a href="../login.php"
                                class="" title="Logout">
                                                                Logout
                                                                 </a>
                                                    </li>
                                                                                            </ul>
                </div>
                <!-- <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a> -->
            </div>
        </div>

        <div class="clear"></div>
    </header>

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">    <style>
    .li {
  display: inline-block;
  font-size: 1.1em;
  list-style-type: none;
  padding: 1em;

  text-transform: uppercase;
  color: white;
}

.li span {
  display: block;
  font-size: 3.5rem;
  color: white;
}

.b1 a:before,
.b1 a:after{
  position: absolute;
  content: "Login";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid white;
  box-sizing: border-box;
  border-radius: 5px;
}

.b2 a:before,
.b2 a:after{
  position: absolute;
  content: "Walkthrough";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid white;
  box-sizing: border-box;
  border-radius: 5px;
}

.b3 a:before,
.b3 a:after{
  position: absolute;
  content: "Contact Us";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid white;
  box-sizing: border-box;
  border-radius: 5px;
}
.ctr{
    display:flex;
    flex-direction:column;
    
}
@media all and (max-width: 768px) {

  .li {
    font-size: 1.125rem;
    padding: .75rem;
    color: white;
  }
  
  .li span {
    font-size: 3.375rem;
    color: white;
  }
  
}
@media screen and (max-width: 550px) {
  .footer{
    height: 90px;
  }
 .links{
  font-size: 1rem;
}
.line{

   display: none;
}
.intro-1st {

  font-size: 1.5rem;
}
.intro-2nd {

  font-size: 2rem;
}
 .row{
  flex-direction: column !important;
}

}


        h1 {
            color: green;
            text-align: center;
        }
        div.one {
            margin-top: 40px;
            text-align: center;
        }
       
       
        body {
            overflow-x: hidden;
            padding: 0;
            margin: 0;
            background-color: white;

        }

        p {
            font-size: 1.3rem;
        }

        .box-comp {
            width: 90%;
            margin: 5% 1.5%;
            padding: 3%;
            border: 1px solid black;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.6);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
        }

        .box-comp .circles::before {
            content: '';
            position: absolute;
            bottom: 25px;
            right: 25px;
            width: 40px;
            height: 40px;
            /* background:#aba8a9; */
            background: #3B8595;
            border-radius: 50%;
            opacity: 1.4;
        }

        .box-comp .circles::after {
            content: '';
            position: absolute;
            bottom: 25px;
            right: 50px;
            width: 40px;
            height: 40px;
            background: #333352;
            /* background:#aba8a9; */
            border-radius: 50%;
            opacity: 0.4;
        }

        .box-comp>h2 {
            padding-bottom: 15px;
        }

        .box-row {
            display: flex;
            flex-direction: row;
            list-style: none;
        }

        .box-row-col {
            width: 45%;
            margin: auto 3%;
        }

        .box-comp>span {
            margin-bottom: 3%;
        }

        .box-title {
            margin-bottom: 1%;
        }

        .box-row-col-last::before,
        .box-row-col:before {
            content: '✓';
            font-size: 20px;
            color: black;
            margin-right: 5px;
        }

        .box-row-col-last {
            width: 95%;
            margin: auto 3%;
        }

        @media screen and (max-width:900px) {
            .box-row {
                flex-direction: column;
                padding: 0;
            }

            .circles {
                margin-top: 5%;
            }

            .box-row-col {
                width: 95%;
            }

            .aim-container {
                display: flex !important;
                flex-direction: column !important;
            }

            /* .aim-image-container{
            margin-top:0.5px;
            height:100px !important;
        } */
            .aim-para-conatainer {
                width: 100%;
            }

            .aim-image {
                width: 45vh !important;
            }
        }

        @media screen and (max-width:325px) {
            h1 {
                font-size: 2.0rem;
            }
        }

        /* SCHEDULE */
        .StepProgress {
            position: relative;
            padding-left: 45px;
            list-style: none;
        }

        .StepProgress::before {
            display: inline-block;
            content: '';
            position: absolute;
            top: 0;
            left: 15px;
            width: 10px;
            height: 100%;
            border-left: 2px solid #CCC;
        }

        .StepProgress-item {
            position: relative;
            counter-increment: list;
        }

        .StepProgress-item:not(:last-child) {
            padding-bottom: 20px;
        }

        .StepProgress-item::before {
            display: inline-block;
            content: '';
            position: absolute;
            left: -30px;
            height: 100%;
            width: 10px;
        }

        .StepProgress-item::after {
            content: '';
            display: inline-block;
            position: absolute;
            top: 0;
            left: -37px;
            width: 25px;
            height: 25px;
            border: 2px solid #CCC;
            border-radius: 50%;
            background-color: #FFF;
        }

        .StepProgress-item.is-done::before {
            border-left: 2px solid green;
        }

        .StepProgress-item.is-done::after {
            content: "✔";
            font-size: 16px;
            color: green;
            text-align: center;
            border: 2px solid green;
            background-color: #fff;
        }

        .StepProgress-item.current::before {
            border-left: 2px solid green;
        }

        .StepProgress-item.current::after {
            content: counter(list);
            padding-top: 1px;
            width: 19px;
            height: 18px;
            top: -4px;
            left: -40px;
            font-size: 14px;
            text-align: center;
            color: green;
            border: 2px solid green;
            background-color: white;
        }

        .StepProgress strong {
            display: block;
        }


        @media screen and (max-width:450px) {
            .aim-image {
                width: 100% !important;
            }

            #aim>p {
                font-size: smaller;

            }

            .aim-image-container {
                width: 80% !important;
            }

            .circles {
                margin-top: 11%;
            }

        }

        .aim-container {
            display: flex;
            flex-direction: row;
            margin-left: 0.25%;

        }

        .aim-para-conatainer {
            width: 70%;
        }

        .aim-image-container {
            width: 30%;
        }

        .carousel-control-next-icon {
            color: #333352
        }

        /* speakers-card */
        .box {
            /* flex: 0 400px; */
            /* height: 400px; */
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
            width: 90%;
            border-radius: 7px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.9);

            padding: 60px;
            margin-bottom: 50px;
            transition: 0.3s;
            /* margin: 20px;   */

        }

        .red {
            border-top: 3px solid red;
        }

        .box>h2 {
            margin-bottom: 5px;
            margin-left: 50%;
            transform: translate(-25%, 0);
        }

        .box i {
            color: black;
            font-size: 2.5rem;
            padding-left: 2%;
        }

        .box>h4 {
            margin-bottom: 30px;
            margin-left: 50%;
            transform: translate(-25%, 0);
        }

        .speaker-content>p {
            font-size: 1.3rem;
            margin-bottom: 60px;
            width: 65%;
            padding-left: 8%;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .speaker-content {
            display: flex;
            flex-direction: row;
        }

        .speaker-image {
            width: 30%;
            border-radius: 100%;
            margin-top: -12%;
            margin-bottom: 12%;
        }

        .icons {
            margin: auto 10%;
            display: flex;
            justify-content: space-around;
        }

        @media screen and (max-width:768px) {
            .box {
                padding: 10px;
               
            }

            .box .speaker-image {
                width: 80%;
                height: 300px;
                border-radius: 0%;
                margin-top: 1.5%;
                padding-top: 5px;
                margin-bottom: 15px;
                position: relative;
                margin-right: auto;
                margin-left: auto;
            }

            .speaker-content p {
                font-size: large;
                width: 94%;
                padding-left: 20px;
            }

            .box h2 {
                font-size: larger;
                font-weight: bold;
                text-align: center;
                display: flex;
                justify-content: center;
                margin-left: 0;
                transform: translate(0);
            }

            .box h4 {
                display: flex;
                justify-content: center;
                margin-left: 0;
                transform: translate(0);
                text-align: center;
                font-size: large;
            }

            .box i {
                font-size: 1.5rem;
            }

            .speaker-content {
                flex-direction: column;
            }
        }

        @media screen and (max-width:425px) {
            .box {
                padding: 10px;
            }

            .box .speaker-image {
                width: 80%;
                height: 80%;
                border-radius: 0%;
                margin-top: 1.5%;
                padding-top: 5px;
                margin-bottom: 15px;
                position: relative;
                margin-right: auto;
                margin-left: auto;
            }

            .speaker-content p {
                font-size: small;
                width: 94%;
                padding-left: 20px;
            }

            .box h2 {
                font-size: large;
                font-weight: bold;
                text-align: center;
                display: flex;
                justify-content: center;
                margin-left: 0;
                transform: translate(0);
            }

            .box h4 {
                display: flex;
                justify-content: center;
                margin-left: 0;
                transform: translate(0);
                text-align: center;
                font-size: smaller;
            }

            .box i {
                font-size: 1.5rem;
            }

            .speaker-content {
                flex-direction: column;
            }
        }
body::-webkit-scrollbar {
    width: 1rem;
  }
   
  body::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
    background-color: grey;
  }

  body::-webkit-scrollbar-thumb {
    background-color:#3B8595;
    border-radius: 20px;
    border: 1.5px solid black;
  }
        /* speakers-card */
    </style>
</head>

<main>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Readiness Boot Camp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        h2 {
            color: navy;
            text-align: center;
        }
        .aim-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .aim-para-container {
            flex: 1;
            padding-right: 20px;
        }
        .aim-para-container p {
            color: black;
            font-family: sans-serif;
        }
        .aim-image-container {
            flex: 1;
        }
        .aim-image {
            width: 100%;
            height: auto;
        }
        .box-comp {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .box-row {
            list-style: none;
            padding: 0;
        }
        .box-row-col {
            margin: 10px 0;
            font-family: sans-serif;
            color: black;
        }
        .carousel-item {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 400px;

        }
        .speaker-content {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .speaker-image {
            border-radius: 50%;
            margin-right: 20px;
        }
        .icons a {
            color: #007bff;
            font-size: 24px;
            margin-right: 10px;
            text-decoration: none;
        }
        .icons a:hover {
            color: #0056b3;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #007bff;
            border-radius: 50%;
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2>AIM OF THE COURSE</h2><br>
            </div>
            <div class="aim-container">
                <div id="aim" class="aim-para-container">
                    <p>
                        We, at <b>The Placement Cell of UMIT College, University of SNDT</b>, strongly believe in composing a heterogeneous mixture of skills and knowledge which is supported via practical exposure and disclosure of the materialistic platforms to learn when it comes to students and young blood across the nation. 
                        We believe that our students are the young blood of our nation who will craft their future, thereby building not just a strong company base but also a skilled India. 
                        Carrying our motto of <b>"Your Ambition, Our Aim"</b> forward, in association, we aspire to testify to all the mastery imparted through our of your position in the real world.
                    </p>
                </div>
                <div class="col-md-4 aim-image-container">
                    <img class="container aim-image" src="../images/u3 copy.jpg" alt="">
                </div>
            </div>
            <div class="box-comp">
                <h2 class="text-center">PERKS FOR STUDENTS</h2>
                <ul class="box-row">
                    <li class="box-row-col">Authorized Certificates, upon the successful completion of the course</li>
                    <li class="box-row-col">Free CV Review at the end of the course, upon a condition</li>
                </ul>
                <ul class="box-row">
                    <li class="box-row-col">Free Assessments with grading under the guidance of Industry Experts</li>
                    <li class="box-row-col">Chance to engage with multiple speakers</li>
                </ul>
                <ul class="box-row">
                    <li class="box-row-col">Showcase your Questioning Skills by asking smart questions during Q&A Sessions</li>
                    <li class="box-row-col">Get freshly baked ideas from corporate experts to start your professional career</li>
                </ul>
            </div>
            <div class="col-md-10 mt-5">
                <h4 style="color:navy;">FOR WHOM IS IT?</h4><br>
            </div>
            <div class="col-md-10">
                <ul>
                    <li style="color:black;font-family: sans-serif;">Any student who is in/passed his/her 12th Standard.</li>
                    <li style="color:black;font-family: sans-serif;">Any student who is currently pursuing under-graduation or post-graduation from any stream can apply.</li>
                </ul>
            </div>
            <div class="box-comp">
                <h2 class="text-center">LEARNING OUTCOMES</h2>
                <ul class="box-row">
                    <li class="box-row-col">Develop a skilled personality before you pass through the other side of the door i.e. the corporate world.</li>
                    <li class="box-row-col">Get to learn through real-time dilemmas and classic illustrations.</li>
                </ul>
                <ul class="box-row">
                    <li class="box-row-col">Develop a cognitive strategy to testify your learning skills through assignments and tasks performed.</li>
                    <li class="box-row-col">Build your network by learning optimization and communication skills.</li>
                </ul>
                <ul class="box-row">
                    <li class="box-row-col">Achieve fluidity in the application of learning by developing your motor skills via the Boot Camp.</li>
                    <li class="box-row-col">To be able to build your own roadmap and course of action to pave a promising career for yourself.</li>
                </ul>
            </div>
            <div class="col-md-10 mt-5 mb-0">
                <h4 style="color:navy;">REQUIREMENTS:</h4><br>
            </div>
            <div class="col-md-10 mb-0">
                <p style="color:black;font-family: sans-serif;">
                    To earn the Course Completion certificate, the participant must successfully complete every module which is a part of this course along with the assignments based on the topics covered in the Bootcamp by attending every session conducted everyday.
                </p>
            </div>
            <div class="col-md-10 mt-5 mb-0">
                <h4 style="color:navy;">EXPERTS:</h4><br>
            </div>
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <h2>Mr. Sureshi Verma</h2>
                                <h4>IIT | IIM alumni | CFA LEVEL III</h4>
                                <div class="speaker-content">
                                    <img class="speaker-image" src="../images/i1.jpeg" alt="">
                                    <p>He was the instructor for a financial modelling workshop at IIM Rohtak. He motivated his students through his enthusiasm easy personality and mastery of his subject. He empowered his students to present their work at a global brand. Suresh Sir skill and passion in imparting learning will help empower many more people around the world.</p>
                                </div>
                                <div class="icons">
                                    <a href="https://www.linkedin.com/in/suresh-varma-17710591?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BoKAyZY8wTZ%2BmhCg2jh1axA%3D%3D"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <h2>Ms. Guncha Arora</h2>
                                <h4>Career Coach | Corporate Trainer | Soft skills trainer | Communication and lifestyle trainer</h4>
                                <div class="speaker-content">
                                    <img class="speaker-image" src="../images/i2.jpeg" alt="">
                                    <p>She's on a mission to empower Indian students and Professionals by making them Industry-ready and creating a mark in the Education sector through Positive psychology and Soft skills. She coaches individuals and teams and helps them to explore their potential to outperform in their areas of expertise. She works with students and helps them with Resume Building, Interview skills, and LinkedIn profiles.</p>
                                </div>
                                <div class="icons">
                                    <a href="https://www.linkedin.com/in/guncha-arora-a6489920a?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BZ%2Fjhhj0iQYyucy6iG2BYaw%3D%3D"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <h2>Mr. Vikram Shah</h2>
                                <h4>Management Consultant | Startups | Growth Expert | Angel Investor</h4>
                                <div class="speaker-content">
                                    <img class="speaker-image" src="../images/i3.jpeg" alt="">
                                    <p>He has been working for almost 15 years in the financial services sector and Management Consulting across APAC. He has been leading the full life cycle of end-to-end product solutions which helps SMEs to raise capital and achieve their potential.</p>
                                </div>
                                <div class="icons">
                                    <a href="https://www.linkedin.com/in/vikramshah94"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>$(document).ready(function(){
  // Activate Carousel with a specific option
  $('#carouselExampleControls').carousel({
    interval: 2000  // Changes the speed of the slideshow (in milliseconds)
  });

  // Go to the previous item
  $(".carousel-control-prev").click(function(){
    $("#carouselExampleControls").carousel("prev");
  });

  // Go to the next item
  $(".carousel-control-next").click(function(){
    $("#carouselExampleControls").carousel("next");
  });
});
</script>
</body>
</main>
<br>
                <br>
                </div></div></div></section></body>
            <div class="footer-top" >
                <div class="Main_page">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="footer-box">
                                <a class="footer-logo" href="index.php" title="UMIT"><img
                                        src="images/logo.png" alt="UMIT"></a>
                                                                <p>UMIT, SNDT Women's University, Juhu-Tara Road, Sir Vitthaldas Vidyavihar, Santacruz(W),
Mumbai 400049
</p>
                                      
                            </div>
                         </div>
                        <div class="col-lg-2">
                            <div class="footer-box">
                                                                <h3>SNDT University</h3>
                                                                <ul>
                                                                                                                                                <li><a href="https://maps.app.goo.gl/59FSiPyCerr7uwxm9" title="Mumbai Juhu"> Mumbai Juhu Campus</a></li>
                                                                                                                                                <li><a href="https://maps.app.goo.gl/iZE6eiXVEBw9MEUP7" title="Mumbai Churchgate"> Mumbai Churchgate Campus</a></li>
                                                                                                                                                <li><a href="https://maps.app.goo.gl/HYUX2om651CznJJq9" title="Pune"> Pune Campus</a></li>
                                                                                                                                            </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-2">
                            <div class="footer-box">
                                                                <h3>Quick Links</h3>
                                                                <ul>
                                                                                                                                                                                                                        <li><a href="index.php" target="_self" title="Home">

                                            Home</a></li>
                                                                                                                                                                                                                        <li><a href="https://www.aicte-india.org/" target="_blank" title="AICTE">
                                            AICTE</a></li>
                                                                                                                                                                                                                        <li><a href="https://sndt.ac.in/" target="_blank" title="SNDT">
                                            SNDT</a></li>
                                                                                                                                                                                                                        <li><a href="https://umit.vaave.com/" target="_blank" title="Alumini">
                                            Alumni</a></li>
                                                                                                                                                                                                                        <li><a href="https://dte.maharashtra.gov.in/" target="_blank" title="DTE">
                                            DTE</a></li>
                                                                                                                                                                                                                        <li><a href="https://www.umit.ac.in/student-life" target="_blank" title="Student Life">
                                            Student Life</a></li>

                                            <li><a href="FAQ.php" target="_self" title="FAQ">
                                            FAQ</a></li>
                                                                                                                                                                                                                        
                                                                                                                                            </ul>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="footer-box">
                                                                <h3>Reach Us</h3>
                                                                <ul>
                                                                                                                                                
                                                                        <li><a href="../contact.php" target="_blank" title="Contact Us"> Contact Us</a>
                                    </li>
                                         
                                                                                                                                                
                                                                        <li><a href="../feedback.php" target="_blank" title="Feedback / Queries"> Feedback / Queries</a>
                                    </li>
                                                                                                                                            </ul>
                            </div>
                        </div>

                    
                        <div class="col-lg-2">

                            <div class="footer-box">
                                                                <h3>Get In Touch</h3>
                                                                <ul class="location">
                                    <li> <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span
                                                style="display: inline-block; width: calc(100% - 50px); ">
                                                SNDT Women's University
Juhu Road,
Santacruz (West),
Mumbai 400049

                                                                                            </span></a> </li>
                                    <li> <a href="#"><i class="fa fa-phone"></i>Tel: 022-2660 8493
        </a> </li>
                                    <li> <a href="#"><i class="fa fa-envelope"
                                                aria-hidden="true"></i>office@umit.sndt.ac.in
</a> </li>

                                    <li> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                                        Mon - Fri: 9am to 5pm
                                                                                    </a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"
                    aria-hidden="true"></i></button>


            <!--<div class="footer-med">
      <div class="Main_page">
        <p>@Copyright 2023 <span class="sep">In publishing and graphic design, Lorem ipsum is a</span></p>
      </div>
    </div>-->
            <div class="footer-bottom">
                <div class="Main_page">
                    <!--<ul class="footer-bt-nav">
                                               
                                  <li><a href="https://sameer.gov.in/help">Help</a></li> 
                                                   
                                  <li><a href="https://sameer.gov.in/sitemap">Site Map</a></li> 
                                                   
                                  <li><a href="https://sameer.gov.in/downloads">Downloads</a></li> 
                                                   
                                  <li><a href="https://sameer.gov.in/privacy_policy">Privacy Policy And Terms &amp; Conditions</a></li> 
                                                         
          </ul> -->
                                        <p class="text-center">Website Designed, Developed and Hosted by Information Technology Department - IT | SRUSHTI | SAKSHI | KOMAL<br>
                                        Copyright © SNDT Women's University 2023.

. All right reserved.</p>
                    

                    
                </div>
            </div>

        </footer>
        <script src="https://sameer.gov.in/public/website/js/jquery.min.js "></script>
        <!--<script src="https://sameer.gov.in/public/website/js/bootstrap.min.js "></script>-->
        <script src="https://sameer.gov.in/public/website/js/bootstrap.bundle.min.js "></script>
        <script src="https://sameer.gov.in/public/website/js/owl.carousel.min.js "></script>
        <script src="https://sameer.gov.in/public/website/js/slick.js"></script>
        <script src="https://sameer.gov.in/public/website/js/jquery.marquee.js "></script>
        <script src="https://sameer.gov.in/public/website/js/fancybox.umd.js "></script>
        <script src="https://sameer.gov.in/public/website/js/styleswitch.js "></script>
        <script src="https://sameer.gov.in/public/website/js/jquery.easy-ticker.min.js "></script>
        <script src="https://sameer.gov.in/public/website/js/custon.js "></script>
        <script src="https://sameer.gov.in/public/website/js/custom.js "></script>

        <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>
        <script>
        function myFunction() {
            var x = document.getElementById('myTopnav');
            if (x.className === 'topnav') {
                x.className += ' responsive';
            } else {
                x.className = 'topnav';
            }
        }
        </script>

        <script>
        var url = "https://sameer.gov.in/lang/change";
        $(".changeLang").click(function() {
            var id = document.getElementById('lang').value;
            window.location.href = url + "?lang=" + id;
        });
        </script>
        <script>
        $(document).ready(function() {
            $('#marquee-vertical').marquee({
                direction: 'vertical',
                delay: 0,
                timing: 50,
            });
            $('#marquee-vertical1').marquee({
                direction: 'vertical',
                delay: 0,
                timing: 50,
            });
            

            $('.owl-carousel').owlCarousel({
                items: 5,
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                    },
                    600: {
                        items: 3,
                        nav: false,
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false,
                        margin: 20,
                    },
                },
            });

            $('.tabs-nav a').click(function() {
                // Check for active
                $('.tabs-nav li').removeClass('active');
                $(this).parent().addClass('active');

                // Display active tab
                $('.tabs-content > div').removeClass('tabActive');
                let currentTab = $(this).attr('href');
                $('.tabs-content > div').hide();
                $(currentTab).addClass('tabActive');
                $(currentTab).show();

                return false;
            });

            $('#skipMain').on('click', function() {
                $('html, body').animate({
                    scrollTop: $('#mainContent').position().top,
                });
            });
        });
        </script>
        <script >
        function serach_content() {
            var search = $('#srch').val();
            if ((search == '') || (search == 'Search') || (search == 'Please Enter Keyword')) {
                $('#srch').val("Please Enter Keyword").css("color", "red");
                return false;
            }
            var url = "/search/node/";
            window.location.href = url + search;
            return false;
        }

        function handle(e) {
            if (e.keyCode === 13) {
                e.preventDefault(); // Ensure it is only this code that rusn
                //alert("Enter was pressed was presses");
                var search = jQuery('#srch').val();
                if ((search == '') || (search == 'Search') || (search == 'Please Enter Keyword')) {
                    jQuery('#srch').val("Please Enter Keyword");
                    return false;
                }

                var url = "//search/node/";
                window.location.href = url + search;
                return false;
            }
        }
        </script>
        
<script>
    // Data for the chart
    const years = ["2017-18", "2018-19", "2019-20", "2020-21", "2021-22"];
    const placements = [75, 102, 109, 159, 177]; // Number of students placed for each year

    // Create the chart
    const ctx = document.getElementById('placementChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [{
                label: 'Students Placed',
                data: placements,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)', // Red with transparency
                    'rgba(54, 162, 235, 0.7)', // Blue with transparency
                    'rgba(255, 206, 86, 0.7)', // Yellow with transparency
                    'rgba(75, 192, 192, 0.7)', // Green with transparency
                    'rgba(153, 102, 255, 0.7)' // Purple with transparency
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)', // Red
                    'rgba(54, 162, 235, 1)', // Blue
                    'rgba(255, 206, 86, 1)', // Yellow
                    'rgba(75, 192, 192, 1)', // Green
                    'rgba(153, 102, 255, 1)' // Purple
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true, // Start the y-axis from 0
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)' // Light gray grid lines
                    },
                    ticks: {
                        font: {
                            size: 14, // Font size for y-axis labels
                            family: 'Arial' // Font family for y-axis labels
                        }
                    }
                },
                x: {
                    grid: {
                        display: false // Hide x-axis grid lines
                    },
                    ticks: {
                        font: {
                            size: 14, // Font size for x-axis labels
                            family: 'Arial' // Font family for x-axis labels
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false // Hide legend
                }
            },
            animation: {
                duration: 2000, // Animation duration in milliseconds
                easing: 'easeInOutQuart' // Smooth easing animation
            }
        }
    });
</script>
</body>

</html>