<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Forgot Password</title>
</head>
<body>
    <div class="container mt-5">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <center><input class="btn btn-primary" type="submit" value="Send Link" name="send_reset_link" style="width:50%;"></center>
        </form>
    </div>

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
<?php
    include 'dbcon.php';
    if(isset($_SESSION['loggedin'])){
    header("location: https://dj.000.pe/talksta");
    }

    if(isset($_POST['send_reset_link'])){
        $query = "SELECT * FROM `user` WHERE user_email = '$_POST[email]' ";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        if($result){
            if(mysqli_num_rows($result) == 1){
                $reset_token = bin2hex(random_bytes(16));
                date_default_timezone_set('Aisa/kolkata');
                $date = date("Y-m-d");
                $query = "UPDATE `user` SET reset_token = '$reset_token', reset_token_expire = '$date' WHERE user_email = '$_POST[email]' ";
                if($row['is_verified'] == '1'){
                    if(mysqli_query($conn,$query) && sendMail($_POST['email'],$reset_token)){
                        echo'<script>
                                alert("Password Reset Link Send to your mail");
                                location.href = "https://dj.000.pe/talksta";
                            </script>';
                    }
                    else{
                     echo'<script>
                        alert("Server Down! Try again later");
                        </script>';
                    }
                }
                else{
                    echo'
                        <script>
                            alert("Your mail id is not verified\nPlease verify first!!");
                        </script>
                    ';
                }
            }
            else{
                echo'<script>
                alert("Email Not Registered");
                location.href = "https://dj.000.pe/talksta";
                </script>';
            }
        }
        else{
            echo'<script>
            alert("Something Went Wrong");
            </script>';
        }
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    function sendMail($email,$reset_token){
        require ("PHPMailer/PHPMailer.php");
        require ("PHPMailer/SMTP.php");
        require ("PHPMailer/Exception.php");

        $mail = new PHPMailer(true);

        try {   
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'sabkacode@gmail.com';                     
        $mail->Password   = ''; //'edsnapklyznswoaj';                               
        $mail->SMTPSecure = 'tls' ;//PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 587;                                    

        $mail->setFrom('sabkacode@gmail.com', 'SabkaCode');
        $mail->addAddress($email);              
        
        //$mail->addAttachment('logo.png', 'logo');   

        $mail->isHTML(true);                            
        $mail->Subject = 'Password Reset Link from Talk Sta ';
        $mail->Body    = "<b>We got a request from you to reset your password!</b><br>
        Click the link below:<br>
        <a href='https://dj.000.pe/talksta/updatepassword.php?email=$email&reset_token=$reset_token'>ResetPassword</a>
        ";

        $mail->send();
        return true;
        }
        catch (Exception $e) {
            return false;
        }
    }
?>
