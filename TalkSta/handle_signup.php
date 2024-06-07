<?php
session_start();

// Email verification 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_SESSION['loggedin'])) {
    header("location: https://dj.000.pe/talksta");
    exit();
}

function sendMail($email, $vcode) {
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sabkacode@gmail.com';
        $mail->Password   = '';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('sabkacode@gmail.com', 'SabkaCode');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Email Verification from Talk Sta ';
        $mail->Body    = "<h2>Thanks for registration!!</h2><br>
                        Click the link to verify your email address <a href='https://dj.000.pe/talksta/verify.php?email=$email&vcode=$vcode'>Verify</a>";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("location: https://dj.000.pe/talksta");
    exit();
}

$error = false;
$exists_user_email = false;
$exists_user_name = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'dbcon.php';
    $user_name  = trim($_POST['username']);
    $user_email = trim($_POST['email']);
    $user_pass  = trim($_POST['password']);
    $user_cpass = trim($_POST['cpassword']);

    // Validate username
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $user_name)) {
        echo '<script>
                alert("Username can only contain alphanumeric characters and underscores.");
                location.href="https://dj.000.pe/talksta";
              </script>';
        exit();
    }

    // Check if username exists
    $existsql = "SELECT * FROM `user` WHERE user_name = ?";
    $stmt = mysqli_prepare($conn, $existsql);
    mysqli_stmt_bind_param($stmt, "s", $user_name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $numRows1 = mysqli_num_rows($result);

    // Check if email exists
    $existsql = "SELECT * FROM `user` WHERE user_email = ?";
    $stmt = mysqli_prepare($conn, $existsql);
    mysqli_stmt_bind_param($stmt, "s", $user_email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $numRows2 = mysqli_num_rows($result);

    if (isset($_POST['signup'])) {
        if ((strlen($user_name) < 4) || (strlen($user_pass) < 8)) {
            echo '<script>
                alert("Username must be at least 4 characters long.\\nPassword must be at least 8 characters long.\\nPlease try again");
                location.href="https://dj.000.pe/talksta";
            </script>';
        } else {
            if ($numRows1 > 0) {
                $exists_user_name = true;
            }
            if ($numRows2 > 0) {
                $exists_user_email = true;
            }

            if ($exists_user_name) {
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!!</strong> Username already exists
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <script>
                    setTimeout(function() {
                        location.href="https://dj.000.pe/talksta";
                    }, 3000);
                </script>
                ';
            } elseif ($exists_user_email) {
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!!</strong> Email already exists
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <script>
                    setTimeout(function() {
                        location.href="https://dj.000.pe/talksta";
                    }, 3000);
                </script>
                ';
            } else {
                if ($user_pass == $user_cpass) {
                    $hash = password_hash($user_pass, PASSWORD_DEFAULT);
                    $vcode = bin2hex(random_bytes(16));

                    $sql = "INSERT INTO `user` (`user_name`, `user_email`, `user_pass`, `verification_code`, `is_verified`, `datetime`, `name`, `image`, `type`) VALUES (?, ?, ?, ?, '0', current_timestamp(), 'yourname', 'user.png', 'user')";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ssss", $user_name, $user_email, $hash, $vcode);
                    $result = mysqli_stmt_execute($stmt);

                    if ($result && sendMail($user_email, $vcode)) {
                        echo '
                            <script>
                                alert("Congrats!! '.$user_name.' your registration was successful.\\nPlease check your email for verification.");
                                location.href="https://dj.000.pe/talksta";
                            </script>
                        ';
                    } else {
                        $error = true;
                    }

                    if ($error) {
                        echo '
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Error!!</strong> Registration failed. Please try again.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <script>
                                setTimeout(function() {
                                    location.href="https://dj.000.pe/talksta";
                                }, 1000);
                            </script>
                        ';
                    }
                } else {
                    echo '
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error!!</strong> Passwords do not match.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <script>
                            setTimeout(function() {
                                location.href="https://dj.000.pe/talksta";
                            }, 1000);
                        </script>
                    ';
                }
            }
        }
    }
}
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
    <!-- Your additional scripts -->
  </body>
</html>
