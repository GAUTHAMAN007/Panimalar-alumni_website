<?php
    include './sidebar.php';
    session_start();
    $_SESSION["logged_in"]=TRUE;
    // count the number of queries
    $sql="SELECT * FROM queries";
    $result=mysqli_query($con,$sql);
    $queries_count=$result->num_rows;
    // count the number of shared achievements
    $sql="SELECT * FROM achievements";
    $result=mysqli_query($con,$sql);
    $achievements_count=$result->num_rows;  
    // count the number of jobs posted
    $sql="SELECT * FROM postedjobs";
    $result=mysqli_query($con,$sql);
    $jobs_count=$result->num_rows;
    // count the number of mentor requests
    $sql="SELECT * FROM mentorrequests";
    $result=mysqli_query($con,$sql);
    $mentorreq_count=$result->num_rows;
    // Validaton  requests
    $sql="SELECT validated FROM alumnilogin where validated=0";
    $result=mysqli_query($con,$sql);
    $validated=$result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/stylesheetalumni.css" />
</head>
<body>
    <div class="container mt-4">
        <div class="card-deck">
            <div class="card">
                <a href="queries.php" class="card-body text-center">
                    <h5 class="card-title">QUERIES RECEIVED</h5>
                    <p class="card-text"><span class="badge badge-light"><?php echo $queries_count?></span></p>
                </a>
            </div>
            <div class="card">
                <a href="achievements.php" class="card-body text-center">
                    <h5 class="card-title">SHARED ACHIEVEMENTS</h5>
                    <p class="card-text"><span class="badge badge-light"><?php echo $achievements_count?></span></p>
                </a>
            </div>
            <div class="card">
                <a href="postedjobs.php" class="card-body text-center">
                    <h5 class="card-title">POSTED JOBS</h5>
                    <p class="card-text"><span class="badge badge-light"><?php echo $jobs_count?></span></p>
                </a>
            </div>
            <div class="card">
                <a href="mentorrequests.php" class="card-body text-center">
                    <h5 class="card-title">MENTOR REQUESTS</h5>
                    <p class="card-text"><span class="badge badge-light"><?php echo $mentorreq_count?></span></p>
                </a>
            </div>
            <div class="card">
                <a href="validation.php" class="card-body text-center">
                    <h5 class="card-title">VALIDATION</h5>
                    <p class="card-text"><span class="badge badge-light"><?php echo $validated?></span></p>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
