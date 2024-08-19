<?php
include 'dbcon.php';
session_start();

if(!isset($_SESSION['loggedin'])){
    echo '<script>alert("You are not logged in. Please log in first.");</script>';
    header("refresh:0;url=http://localhost/comment");
    exit(); // Stop execution after redirect
}

// Fetch user details after ensuring user is logged in
$user_name = $_SESSION['user_name'];
$sql = "SELECT * FROM `user` WHERE `user_name` = '$user_name'";
$stmt = mysqli_prepare($conn, $sql);
// mysqli_stmt_bind_param($stmt, "s", $user_name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $user_email = $row['user_email'];
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $_SESSION['user_name'] ?> - profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="profile-pic" src="logo12.jpg" alt="Profile Picture"><br>
                <p>Username: <?= $_SESSION['user_name'] ?></p>
            </div>
            <div class="col-md-6">
                <div class="profile-details">
                    <p><strong>Email:</strong> <?= isset($user_email) ? $user_email : "N/A" ?></p>
                    <!-- Add other details here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
