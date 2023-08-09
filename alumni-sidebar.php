<?php
    include './dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="topheader"></div>
    <div class="header">
        <div class="logo">
        </div>
    </div>
    <div class="nav-bar">
        <div class="list-items">
            <ul><b>
                <li><a href="alumnihome.php">HOME</a></li>
                <li><a href="alumni-dashboard.php">DASHBOARD</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="events.php">EVENTS</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">ALUMNI ASSIST&nbsp&nbsp&nbsp&nbsp&nbsp</a></b>
                    <div class="dropdown-content">
                        <a href="sendquery.php">Send Query</a>
                        <a href="postajob.php">Post a Job</a>
                        <a href="shareachievements.php">Share Achievements</a>
                        <a href="beamentor.php">Be a Mentor</a>
                    </div>
                </li><b>
                <li><a href="logout.php">LOG OUT</a></li></b>
            </ul>
        </div>
    </div>
</body>
</html>