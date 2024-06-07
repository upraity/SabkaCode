<?php
  error_reporting(0);
  $error1 = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'dbcon.php';
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $email = stripcslashes($email);
    $pass = stripcslashes($pass);
    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);

    $sql = "SELECT * FROM `user` WHERE `user_name` = '$email' ";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if($numRows == 1){
      $error1 = true;
      $row = mysqli_fetch_assoc($result);
      if(password_verify($pass, $row['user_pass'])){
            if($row['is_verified'] == '1'){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id']  = $row['user_id'];
                $_SESSION['user_name'] = $email;

                echo'
                    <script>
                        alert("You are login successfully!!");
                    </script>
                ';
                

                // header("location: localhost/comment");
                header( "refresh:1;url=https://dj.000.pe/talksta");
            }
            else{
                echo'
                    <script>alert("Email not verified");</script>
                ';
                header( "refresh:0;url=https://dj.000.pe/talksta");
            }
      }
      else{
        echo'
            <script>
                alert("Invalid Credentials!!");
            </script>
        ';
        // header("location: localhost/comment");
        header( "refresh:1;url=https://dj.000.pe/talksta");
        // header("location:index.php");
      }
    }
    else{
        echo'
            <script>alert("Invalid Credentials!");</script>
        ';
    }
  }
  header( "refresh:0;url=https://dj.000.pe/talksta");
       //header("location:index.php");
?>


<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
