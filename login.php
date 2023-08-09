<?php
include 'dbconnect.php';
$message = "";

if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT * FROM alumnilogin WHERE email='" . $_POST["email"] . "'");
    if (!$result) {
        echo mysqli_error($con);
        exit;
    }
    
    $sql = "SELECT id, email, password, validated FROM alumnilogin WHERE email = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $_POST["email"]); // Bind the email as a string parameter
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); // Use mysqli_fetch_assoc for associative array
        $pwd = test_input($_POST["password"]);
        $pwd = md5($pwd);
        $validated = $row["validated"];
    
        if ($pwd === $row["password"] && $validated == 1) {
            $_SESSION["id"] = $row["id"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
            header("Location: alumnihome.php");
            exit;
        } else {
            $message = "Invalid Email or Password";
        }
    } else {
        $message = "User not found";
    }
    
    mysqli_stmt_close($stmt); // Close the prepared statement
  }    

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./assets/css/stylehome.css" />
   
  </head>
  <body>
    <div class="main">
       <div class="bg-img">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" name="alumnilogin" method="post" class="container">
          <center><h2><u>ALUMNI LOGIN</u></h2><br><br></center>
          <div class="message">
            <?php 
              if($message!=""){
                echo $message;
              }
            ?>
          </div>
          <label for="email">Email</label><br>
          <input type="email" name="email" placeholder="Enter your email" autocomplete="off" required><br><br>
          <label>Password</label><br>
          <input type="password" name="password" placeholder="Enter your password" autocomplete="off" required><br><br>
          <button type="submit" class="btn">Login</button><br><br>
          <p>Don't have an account ?
            <b><a href="signup.php" class="link">Sign Up Now</a></b>
          </p>
        </form>
       </div>
    </div>
  </body>
</html>
