<?php
/*$session_duration = 10 * 24 * 60 * 60; // 30 days in seconds
session_set_cookie_params($session_duration);
ini_set('session.gc_maxlifetime',864000);

$session_timeout = 30 * 24 * 60 * 60;//session timing increase for 30 days
session_set_cookie_params($session_timeout );
ini_set('session.gc_maxlifetime',864000);*//*
session_start();
$session_timeout = 30 * 24 * 60 * 60; // 30 days * 24 hours * 60 minutes * 60 seconds
if (isset($_SESSION['user_id'])) {
    // Check if the session has expired
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
        // Session expired, destroy the session and log the user out
        session_unset();
        session_destroy();
       // header("Location: login.php"); // Redirect to login page
        exit();
    }
     $_SESSION['last_activity'] = time();
     } else {
  //  header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
*/
?>

<?php
session_start();
if(isset($_SESSION['loggedin'])){
    header("location: https://dj.000.pe");
}
?>

<?php
$showAlert = false;
$showError = false;
$showMsg = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_conn.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
   

    //$exists=false;
    $existSql = "SELECT * FROM `digital` WHERE username = '$username' OR email = '$email' ";
    $result = mysqli_query($conn, $existSql);
    $nunmExitRows = mysqli_num_rows($result);
    if($nunmExitRows >0){
        //$exists = true;
        $showError = "Username/Email Already Exists";
    }
    /*$existSql = "SELECT * FROM `digital` WHERE email = '$email'";)
    $result = mysqli_query($conn, $existSql);
    $nunmExitRows = mysqli_num_rows($result);
    if($nunmExitRows >0){
        //$exists = true;
        $showError = "Email Already Exists";
    }*/

    else{
        //$exists = false;
        if(($password == $cpassword)){
            $sql = "INSERT INTO `digital` ( `username`, `email`, `password`, `date & time`) VALUES ( '$username', '$email', '$password',  current_timestamp())";
             $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true; 
            }
        }
        
        else{
            $showError = "Password do not match";
        }
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  
  body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  }
  
  .container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 90vh;
  }
  
  .box {
  width: 300px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
  animation: fadeInUp 2s ease;
  }
  
  h2 {
  text-align: center;
  }
  
  form {
  display: flex;
  flex-direction: column;
  }
  
  input {
  margin-bottom: 10px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  }
  
  input[type="submit"] {
  background-color: #3498db;
  color: white;
  cursor: pointer;
  }
  
  input[type="submit"]:hover {
  background-color: #3498db;
  }
  
  /* Animation */
  @keyframes fadeInUp {
  from {
  opacity: 0;
  transform: translateY(20px);
  }
  to {
  opacity: 1;
  transform: translateY(0);
  }
  }

  </style>
</head>
<body>
<?php
            if($showAlert){
                echo '<div id = "alert" class="alert show">
                <span class="msg"><strong>Sucess!!</strong> Your account are created and you can login</span>
                <button type="button" class="close_btn" onclick="close_btn()" id = "close">
                       <span aria-hidden="true" class="close">&times;</span>
                </button>
                </div> ';
             }
             if($showError){
                echo '<div id = "alert" class="alert show">
                <span class="msg"><strong>Error!!</strong> '. $showError .' </span>
                <button type="button" class="close_btn" id="close">
                       <span aria-hidden="true" class="close">&times;</span>
                </button>
                </div> ';
             }
            
        ?>
  <div class="container">
    <div class="box">
      <h2>Registration</h2>
      <form action="#" method="post">
        <input type="text" name="username" placeholder="Username" name="username" maxlength="10" minlength="4" required><br>
        <input type="email" name="email" id="email" placeholder="Email" name="email" maxlength="50" required><br>
        <input type="password" name="password" id="password" placeholder="Password" name="password" maxlength="10" minlength="8" required><br>
        <input type="password"  placeholder="Confirm Password" name="cpassword" maxlength="10" minlength="8" required><br>
        <!--<input type="file" name="pic" accept="image/*"><br>-->
        <input type="submit" value="Register">
        <center><p>Already have an account <a href="https://dj.000.pe/login.php">Login</a></p><center>
      </form>
    </div>
  </div>
    <script>
        var closeBtn = document.getElementById("close");
        closeBtn.addEventListener("click",function(){
        document.getElementById("alert").style.display = "none";
        });
  </script>
</body>
</html>
