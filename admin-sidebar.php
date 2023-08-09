<?php
    include './dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Your other head content -->
</head>
<style>
        /* Custom CSS */
        .full-height {
            min-height: 100vh;
        }
        .sidebar {
            height: 100%;
        }
        .container-fluid{
            position:absolute;
        }
    </style>
<body>
<div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-md-2 side-navbar bg-dark">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="adminhome.php">
                            <i class="fa fa-home mr-2"></i>HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="queries.php">
                            <i class="fa fa-question-circle mr-2"></i>QUERIES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="achievements.php">
                            <i class="fa fa-trophy mr-2"></i>ACHIEVEMENTS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="postedjobs.php">
                            <i class="fa fa-briefcase mr-2"></i>POSTED JOBS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mentorrequests.php">
                            <i class="fa fa-user-friends mr-2"></i>MENTOR REQUESTS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="updateevents.php">
                            <i class="fa fa-calendar-alt mr-2"></i>UPDATE EVENTS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fa fa-sign-out-alt mr-2"></i>LOGOUT
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <!-- Your main content goes here -->
            </div>
        </div>
    </div>
    
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
