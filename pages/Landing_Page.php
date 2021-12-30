<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Index / Landing Page</title>
    <!-- Google icon font -->
    <link href="resources/material-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet"  type="text/css" href="resources/fontawesome-free-5.13.0-web/css/all.css">
    <!-- Minified CSS -->
    <link rel="stylesheet" href="resources/materialize.min.css">
    <!-- Customized CSS -->
    <link rel="stylesheet" href="resources/stylesheet.css">
    <style>
       
    </style>
</head>
<body>

    <!-- NavBar & SideNav-->
    <div id="navigation">
        <div class="navbar-fixed" id="navbar">
            <nav class="nav-wraper white"><!-- transparent vs white -->
                <div class="container">
                    <div class="brand-logo">
                        <span class="custom-logo"></span>
                        <a href="#" class="red-text text-darken-2 blackjack">Medica</a>
                    </div>
                    <a href="#" class="sidenav-trigger hide-on-med-and-up" data-target="sidenav">
                        <i class="material-icons black-text">menu</i>
                    </a>
                </div>
                <ul class="hide-on-med-and-down right">
                    <li><a href="#" class="waves-effect black-text"><b>Home</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>About</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>Contact us</b></a></li>
                    <li><a class="waves-effect black-text" onclick="showActivities()"><b>Activities</b></a></li>
                    <li><a class="waves-effect black-text" onclick="showSearchBar()"><b>Search</b></a></li>
                    <li><a href="#" class="waves-effect black-text"><b>Sign in</b></a></li>
                    <li><a href="#sign-up-modal" class="waves-effect black-text modal-trigger"><b>Sign up</b></a></li>
                </ul>
                <ul class="hide-on-large-only hide-on-small-only left">
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">home</i></a></li>
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">info</i></a></li>
                    <li><a href="#" class="waves-effect black-text"><i class="material-icons">phone</i></a></li>
                </ul>
                <ul class="hide-on-large-only right">
                    <li><a class="waves-effect black-text" onclick="showActivities()"><i class="material-icons">apps</i></a></li>
                    <li><a class="waves-effect black-text" onclick="showSearchBar()"><i class="material-icons">search</i></a></li>
                    <li><a href="#" class="waves-effect hide-on-small-only black-text"><i class="material-icons">account_circle</i></a></li>
                </ul>
            </nav>
        </div>
        <ul class="sidenav" id="sidenav">
            <div>
            <li><a href="#" class="waves-effect">Home</a></li>
            <li><a href="#" class="waves-effect">About</a></li>
            <li><a href="#" class="waves-effect">Contact us</a></li>
            <li><a href="#" class="waves-effect">Sign in</a></li>
            <li><a href="#sign-up-modal" class="waves-effect modal-trigger">Sign up</a></li>
            <li>
                <a href="#" class="waves-effect dropdown-trigger" data-target="activities-dropdown">Activities</a>
                <ul id='activities-dropdown' class='dropdown-content'>
                    <li><a href="#!"><i class="fas fa-tint red-text text-darken-1"></i>Blood Donor</a></li>
                    <li><a href="#!"><i class="fas fa-stethoscope grey-text text-darken-2"></i>Appointment</a></li>
                    <li><a href="#!"><i class="fas fa-user-nurse french-pink-text"></i>Caregiver</a></li>
                    <li><a href="#!"><i class="fas fa-ambulance maastricht-blue-text"></i>Ambulance</a></li>
                    <li><a href="#!"><i class="fas fa-pills maya-blue-text"></i>Pharmacy</a></li>
                    <li><a href="#!"><i class="fas fa-first-aid red-text text-darken-2"></i>Emergency</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>


    <!-- Activities shortcut & Search bar -->
    <div class="row">
        <div class="col fixed s19 m6 l5 xl4 offset-s3 offset-m6 offset-l7 offset-xl8 z-depth-2 white scale-transition scale-out" id="activities-shortcut">
            <div class="row">

            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light" data-tooptip='Blood Donor'>
                        <i class="fas fa-tint red-text text-darken-1"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light" data-tooptip='Appointment'>
                        <i class="fas fa-stethoscope grey-text text-darken-2"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light" data-tooptip='Caregiver'>
                        <i class="fas fa-user-nurse french-pink-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Blood Donor
                </div>
                <div class="col s4 m4 l4 center">
                    Appointment
                </div>
                <div class="col s4 m4 l4 center">
                    Caregiver
                </div>
            </div>
            <div class="row">
                <!-- empty space -->
            </div>
            <div class="row">
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light" data-tooptip='Ambulance'>
                        <i class="fas fa-ambulance maastricht-blue-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large white waves-effect waves-light" data-tooptip='Pharmacy'>
                        <i class="fas fa-pills maya-blue-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    <a href="" class="btn-large red darken-2 waves-effect waves-light pulse">
                        <i class="fas fa-first-aid white-text"></i>
                    </a>
                </div>
                <div class="col s4 m4 l4 center">
                    Ambulance
                </div>
                <div class="col s4 m4 l4 center">
                    Pharmacy
                </div>
                <div class="col s4 m4 l4 center">
                    Emergency
                </div>
            </div>
        </div>
        <nav class="col fixed s12 m6 l5 xl4 offset-m6 offset-l7 offset-xl8 z-depth-2 white scale-transition scale-out" id="search-bar">
            <div class="nav-wrapper">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons  french-pink-text">search</i></label>
                        <i class="material-icons white french-pink-text right" onclick="hideSearchBar()">close</i>
                    </div>
                </form>
            </div>
        </nav>
    </div>


    <!-- Sign in & Sign up modal -->
    <div id="sign-up-modal" class="modal">
        <div class="modal-content row">
                  <div class="card z-depth-5 col s12 container">
                    <div class="box-header center">
                        <div class="row"></div>
                        <h4>Sign Up</h4>
                    </div>
                    <form id="UpdatePatientForm" action="/updatePatient" method="post">
                      <!-- id -->
                      <div class="input-field col s12 m6">
                        <input id="birth_reg" name="birth_reg" type="number">
                        <label for="birth_reg">
                          <i class="material-icons left blue-text">verified_user</i>
                          Birth Reg No
                        </label>
                      </div>
                      <!-- name -->
                      <div class="input-field col s12 m6">
                        <input id="patient_name" name="patient_name" type="text">
                        <label for="patient_name">
                          <i class="material-icons left blue-text">person</i>
                          Patient Name
                        </label>
                      </div>
                      <!-- dob -->
                      <div class="input-field col s12 m6">
                        <label for="patient_dob" class="">
                          <i class="material-icons left blue-text">calendar_today</i>
                          DoB
                        </label>
                        <input id="patient_dob" name="patient_dob" type="date">
                      </div>
          
                      <!-- Blood Grp -->
                      <div class="input-field col s12 m6">
                        <input id="blood_group" name="blood_group" type="text">
                        <label for="blood_group">
                          <i class="material-icons left blue-text">invert_colors</i>
                          Blood Group
                        </label>
                      </div>
                      <!-- phone -->
                      <div class="input-field col s12 m6">
                        <input id="phone_number" name="phone_number" type="number">
                        <label for="phone_number">
                          <i class="material-icons left blue-text">phone</i>
                          Contact
                        </label>
                      </div>
                      <!-- email -->
                      <div class="input-field col s12 m6">
                        <input id="email" name="email" type="email">
                        <label for="email">
                          <i class="material-icons left blue-text">email</i>
                          Email
                        </label>
                      </div>
                      <!-- address -->
                      <div class="input-field col s12 m6">
                        <input id="address" name="address" type="text">
                        <label for="address">
                          <i class="material-icons left blue-text">home_work</i>
                          Residential Address
                        </label>
                      </div>
                      <!-- passport -->
                      <div class="input-field col s12 m6">
                        <input id="passport_number" name="passport_number" type="text">
                        <label for="passport_number">
                          <i class="material-icons left blue-text">chrome_reader_mode</i>
                          Passport No
                        </label>
                      </div>
          
                      <!-- health issues -->
                      <div class="input-field col s12 m6">
                        <input id="health_issues" name="health_issues" type="text">
                        <label for="health_issues">
                          <i class="material-icons left blue-text">add_box</i>
                          Health Issues
                        </label>
                      </div>
                      <!-- other  -->
                      <div class="input-field col s12 m6">
                        <input id="other_info" name="other_info" type="text">
                        <label for="other_info">
                          <i class="material-icons left blue-text">description</i>
                          Other Info
                        </label>
                      </div>
                      <!-- buttons -->
                      <div class="row ">
                        <div class="col s12 center">
                          <div class="row">
                            <button type="submit" class="btn-large green waves-effect waves-light">
                              <i class="material-icons left">done</i>
                              Save changes
                            </button>
                          </div>
          
                          <div class="row">
                            <button id="cancel" style="width: 2 rem" class="btn-large red waves-effect waves-light">
                              <i class="material-icons left">close</i>
                              Don't update
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
        </div>
        <!-- div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div -->
    </div>


    <!-- Banner & Intro -->
    <div class="row banner valign-wrapper">
        <div class="col s10 m8 l6 offset-s1 offset-m1 offset-l1">
            <!--div style="padding-top: 64px;"></div-->
            <h2 class="flowtext">
                Lorem ipsum dolor sit amet consectetur
            </h3>
            <h5 class="justify flowtext">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos omnis temporibus, saepe quo nemo corrupti ea neque!
                Eveniet cupiditate, exercitationem culpa at tempora inventore, voluptate obcaecati quo natus nulla aspernatur?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos omnis temporibus, saepe quo nemo corrupti ea neque!
                Eveniet cupiditate, exercitationem culpa at tempora inventore.
            </h5>
            <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                <i class="material-icons left">chevron_right</i>
                Read More
            </a>
        </div>
    </div>


    <!-- Cards -->
    <div class="container row">
        <div class="col s12 m6 l4">
            <div class="card center z-depth-3">
                <div class="card-image overflow-hidden">
                    <img class="zoom" src="resources/blooddoners.png">
                </div>
                <div class="card-content">
                    <span class="card-title">Blood Donor</span>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, nam. Voluptatem minus consequuntur repellendus.
                    </p>
                </div>
                <div class="card-action center">
                    <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                        <i class="material-icons left">chevron_right</i>
                        Explore
                    </a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card center z-depth-3">
                <div class="card-image overflow-hidden">
                    <img class="zoom" src="resources/Easier management of medical docs.png">
                </div>
                <div class="card-content">
                    <span class="card-title">Appointment</span>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, nam. Voluptatem minus consequuntur repellendus.
                    </p>
                </div>
                <div class="card-action center">
                    <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                        <i class="material-icons left">chevron_right</i>
                        Explore
                    </a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card center z-depth-3">
                <div class="card-image overflow-hidden">
                    <img class="zoom" src="resources/Caregiver.png">
                </div>
                <div class="card-content">
                    <span class="card-title">Caregiver</span>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, nam. Voluptatem minus consequuntur repellendus.
                    </p>
                </div>
                <div class="card-action center">
                    <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                        <i class="material-icons left">chevron_right</i>
                        Explore
                    </a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card center z-depth-3">
                <div class="card-image overflow-hidden">
                    <img class="zoom" src="resources/Ambulance.png">
                </div>
                <div class="card-content">
                    <span class="card-title">Ambulance</span>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, nam. Voluptatem minus consequuntur repellendus.
                    </p>
                </div>
                <div class="card-action center">
                    <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                        <i class="material-icons left">chevron_right</i>
                        Explore
                    </a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card center z-depth-3">
                <div class="card-image overflow-hidden">
                    <img class="zoom" src="resources/pharmacy.png">
                </div>
                <div class="card-content">
                    <span class="card-title">Pharmacy</span>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, nam. Voluptatem minus consequuntur repellendus.
                    </p>
                </div>
                <div class="card-action center">
                    <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                        <i class="material-icons left">chevron_right</i>
                        Explore
                    </a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card center z-depth-3">
                <div class="card-image overflow-hidden">
                    <img class="zoom" src="resources/Emergency.png">
                </div>
                <div class="card-content">
                    <span class="card-title">Emergency</span>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, nam. Voluptatem minus consequuntur repellendus.
                    </p>
                </div>
                <div class="card-action center">
                    <a href="#" class="btn yellow darken-3 waves-effect waves-light">
                        <i class="material-icons left">chevron_right</i>
                        Explore
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="page-footer maastricht-blue white-text">
            <div class="row">
                <div class="col s12 m8 l6 offset-m2 offset-l3 container">
                    <div class="row">
                        <div class="col s2 center">
                            <a href="" class="btn-floating btn-small maastricht-blue waves-effect waves-light" data-tooptip="facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                        <div class="col s2 center">
                            <a href="" class="btn-floating btn-small maastricht-blue waves-effect waves-light" data-tooptip="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div class="col s2 center">
                            <a href="" class="btn-floating btn-small maastricht-blue waves-effect waves-light" data-tooptip="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="col s2 center">
                            <a href="" class="btn-floating btn-small maastricht-blue waves-effect waves-light" data-tooptip="youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="col s2 center">
                            <a href="" class="btn-floating btn-small maastricht-blue waves-effect waves-light" data-tooptip="discord">
                                <i class="fab fa-discord"></i>
                            </a>
                        </div>
                        <div class="col s2 center">
                            <a href="" class="btn-floating btn-small maastricht-blue waves-effect waves-light" data-tooptip="github">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l5 push-l7 center">
                    <span class="btn maastricht-blue">
                        <i class="fab fa-windows"></i>
                        Windows
                    </span>
                    <span class="btn maastricht-blue">
                        <i class="fab fa-android"></i>
                        Android
                    </span>
                    <!--span class="btn maastricht-blue">
                        <i class="fab fa-linux"></i>
                        Linux
                    </span>
                    <span class="btn maastricht-blue">
                        <i class="fab fa-ubuntu"></i>
                        Unubtu
                    </span-->
                </div>
                <div class="hide-on-large-only row" ></div>
                <div class="col s12 l7 pull-l4 offset-s1 offset-m3">
                    <span class="col s5 m3 l3">
                        <img class="responsive-img" src="resources/45166278_o.png">
                    </span>
                    <span class="col s5 m3 l3">
                        <img class="responsive-img" src="resources/20200403.png">
                    </span>
                </div>
            </div>
            <div class="container">
                <div class="row center valign-wrapper">
                    <div class="col s3">
                        <a href="#">Privacy policy</a>
                    </div>
                    <div class="col s3">
                        <a href="#">EULA</a>
                    </div>
                    <div class="col s3">
                        <a href="#">Terms of use</a>
                    </div>
                    <div class="col s3">
                        <a href="#">Customer support</a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="center white-text">
                    &copy; 2020 by Project Medica. Published by CSE-18, MIST under the exclusive license. Developed by Team Medica. All rights reserved. All trademarks are the property of their respective owners. For all legal matters, please contact — legal@medica.net.
                </div>
            </div>
        </div>
    </footer>


    <!-- Production jQuery -->
    <script src="resources/jquery-3.4.1.min.js"></script>

    <!-- Minified JavaScript -->
    <script src="resources/materialize.min.js"></script>
    
    <!-- Utilities -->
    <script src="resources/Utilities.js"></script>
</body>
</html>