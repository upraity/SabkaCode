<?php

/*$session_timeout = 30 * 24 * 60 * 60;//session timing increase for 30 days
session_set_cookie_params($session_timeout );
ini_set('session.gc_maxlifetime',864000);*/
/*session_start();
$session_timeout = 30 * 24 * 60 * 60; // 30 days * 24 hours * 60 minutes * 60 seconds
if (isset($_SESSION['user_id'])) {
    // Check if the session has expired
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
        // Session expired, destroy the session and log the user out
        session_unset();
        session_destroy();
        header("Location: login.php"); // Redirect to login page
        exit();
    }
     $_SESSION['last_activity'] = time();
     } else {
    header("Location: "); // Redirect to login page if not logged in
    exit();
}*/
?>

<?php
session_start();
if(isset($_SESSION['loggedin'])){
    header("location: https://dj.000.pe");
}
?>

<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_conn.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);


        $sql = "SELECT * FROM `digital` WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if($num == 1)
        {
            $login = "You are logged in"; 

            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            
            header("location: https://dj.000.pe");
        }
    
    else{
        $showError = "Invalid Credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  }
  
  .container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
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
            if($login){
                echo '<div id ="alert" class="alert show">
                <span class="msg"><strong>Sucess!!</strong> '. $true .'</span>
                <button type="button" class="close_btn">
                       <span aria-hidden="true" class="close" onclick="close()">&times;</span>
                </button>
                </div> ';
             }
             if($showError){
                echo '<div id="alert" class="alert show">
                <span class="msg"><strong>Error!!</strong> '. $showError .'</span>
               <button type="button" class="close_btn"  id="close">
                       <span aria-hidden="true" class="close" onclick="close()">&times;</span>
                </button>
                </div> ';
             }
        ?>
  <div class="container">
    <div class="box">
      <h2>Login</h2>
      <form action="#" method="post">
        <input type="text"  placeholder="Username" name="username" required><br>
        <input type="password" placeholder="Password" name="password" required><br>
        <input type="submit" value="Login">
        <center><p>Don't have an account <a href="https://dj.000.pe/signin.php"> Signin</a></p></center>
      </form>
    </div>
  </div>
  <script>
  var closeBtn = document.getElementById("close");
  closeBtn.addEventListener("click",function(){
      document.getElementById("alert").style.display = "none";
  });
    /*function close(){
        document.getElementById("alert").style.display='none';
    }*/
  </script>
</body>
</html>
