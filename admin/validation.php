<?php
    include './sidebar.php';
    include '../dbconnect.php';
    session_start();
    $_SESSION["logged_in"]=TRUE;
   
// Check if the admin has validated or rejected a user
if (isset($_POST['validate'])) {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action === 'validate') {
        $update_query = "UPDATE alumnilogin SET validated = 1 WHERE id = $id";
        mysqli_query($con, $update_query);
    } elseif ($action === 'reject') {
        $delete_query = "DELETE FROM alumnilogin WHERE id = $id";
        mysqli_query($con, $delete_query);
    }
}

// Check if the admin has unvalidated a previously validated user
if (isset($_POST['unvalidate'])) {
    $id = $_POST['id'];
    $update_query = "UPDATE alumnilogin SET validated = 0 WHERE id = $id";
    mysqli_query($con, $update_query);
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Your head content -->
</head>
<body>
    <div class="right">
    <?php
    // Retrieve alumnilogin from the database
    $alumnilogin_query = "SELECT * FROM alumnilogin";
    $alumnilogin_result = mysqli_query($con, $alumnilogin_query);
    
    while ($row = mysqli_fetch_assoc($alumnilogin_result)) {
        $id = $row['id'];
        $name = $row['name'];
        $validated = $row['validated'];
        
        echo '<div>';
        echo 'name: ' . $name . ' | Validated: ' . ($validated ? 'Yes' : 'No');
        
        if ($validated) {
            echo '<form method="post">';
            echo '<input type="hidden" name="id" value="' . $id . '">';
            echo '<button type="submit" name="unvalidate">Unvalidate</button>';
            echo '</form>';
        } else {
            echo '<form method="post">';
            echo '<input type="hidden" name="id" value="' . $id . '">';
            echo '<input type="hidden" name="action" value="validate">';
            echo '<button type="submit" name="validate">Validate</button>';
            echo '<button type="submit" name="action" value="reject">Reject</button>';
            echo '</form>';
        }
        
        echo '</div>';
    }
    ?>

    <style>
        .right{
            float: right;
        }
    </style>
    </div>
</body>
</html>