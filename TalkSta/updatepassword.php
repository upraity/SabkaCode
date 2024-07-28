<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Update Password</title>
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_SESSION['loggedin'])){
    header("location: https://dj.000.pe/talksta");
    }

if(isset($_GET['email']) && isset($_GET['reset_token'])){
    date_default_timezone_set('Asia/kolkata');
    $date = date("Y-m-d");
    $query = "SELECT * FROM `user` WHERE user_email = '$_GET[email]' AND reset_token = '$_GET[reset_token]' AND reset_token_expire = '$date' ";
    $result = mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) == 1){           
           echo'
                <div class="container mt-5">
                    <form action="" method="POST">
                        <div class="form-group">
                            <h1>Update Password</h1>
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password" required>
                            <input type="hidden" name="email" value="$_GET[email]">
                        </div>
                        <center><input class="btn btn-primary" type="submit" value="Send Link" name="updatepassword" style="width:50%;"></center>
                    </form>
                </div>

                
     ';
        }
        else{
            echo'<script>
                alert("Invalid or Expired Link");
                location.href = "https://dj.000.pe/talksta";
            </script>';
        }
    }
    else{
        echo'<script>
            alert("Server Down!!\nTry Again later");
            location.href = "https://dj.000.pe/talksta";
        </script>';
    }
}

?>


</body>
</html>


<?php
if(isset($_POST['updatepassword'])){
    $pass = $_POST['password'];
    $pass = trim($_POST['password']);

    if(strlen($pass) < 8){
        echo'<script>
            alert("Password must be at least 8 characters long.\nPlease try again");
            location.href="https://dj.000.pe/talksta";
        </script>';
    }
    else{
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $update = "UPDATE `user` SET user_pass = '$hash', reset_token = NULL, reset_token_expire = NULL WHERE user_email = '$_GET[email]' ";
        if(mysqli_query($conn,$update)){
            echo'<script>
                alert("Password Updated Successfully!!");
                location.href = "https://dj.000.pe/talksta";
            </script>';
        }
        else{
            echo'<script>
                alert("Server Down!!\nTry Again later");
                location.href = "https://dj.000.pe/talksta";
            </script>';
        }
    }
}
?>
