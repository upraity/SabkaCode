
<?php
error_reporting(0);
session_start();
include('dbcon.php');

$msg = false;
$request = $_SERVER['REQUEST_URI'];
$router = str_replace('/talksta/', '', $request);
// echo $router;
// Routing and user profile fetching
if ($router) {
    $sql = "SELECT * FROM user WHERE user_name = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $router);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $url1 = $row['url1'];
    $url2 = $row['url2'];
    $url3 = $row['url3'];
    $url4 = $row['url4'];
    $url5 = $row['url5'];
    $hidden = $row['cts'];

    if ($row) {
        $msg = true;
    } else {
        echo '<center><h1>No user found with the name ' . htmlspecialchars($router) . '</h1></center>';
        exit();
    }
}

// User authentication
// if (!isset($_SESSION['loggedin'])) {
//     echo '<script>alert("You are not logged in. Please log in first!!");</script>';
//     header("refresh:0;url=https://dj.000.pe/talksta");
//     exit();
// }

$user_name = $row['user_name'];
$id = $row['user_id'];

// Fetch user details
$sql = "SELECT * FROM `user` WHERE `user_name` = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $user_name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $user_email = $row['user_email'];
    $name = $row['name'];
    $image = $row['image'];
}

// Fetch threads by user
$sql1 = "SELECT * FROM `thread` WHERE `threads_user_id` = ?";
$stmt1 = mysqli_prepare($conn, $sql1);
mysqli_stmt_bind_param($stmt1, "i", $id);
mysqli_stmt_execute($stmt1);
$result1 = mysqli_stmt_get_result($stmt1);
$got1 = true;

// Fetch comments by user
$sql2 = "SELECT * FROM `comments` WHERE `comment_by` = ?";
$stmt2 = mysqli_prepare($conn, $sql2);
mysqli_stmt_bind_param($stmt2, "i", $id);
mysqli_stmt_execute($stmt2);
$result2 = mysqli_stmt_get_result($stmt2);
$got2 = true;

include 'header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo htmlspecialchars($user_name); ?> - Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
        .container1 {
            display: flex;
            max-width: 100%;
            width: 100%;
        }
        .left {
            flex: 0.6;
            text-align: center;
            align-items: center;
        }
        .right {
            flex: 1;
            padding: 20px;
        }
        .profile-pic {
            width: 70%;
            border-radius: 50%;
            cursor: pointer;
            margin-top: 20%;
        }
        .r {
            margin-top: 8%;
            font-size: 16px;
        }
        .comment {
            margin-top: 7%;
        }
        .jumbo {
            padding: 1rem 1rem;
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container1">
        <div class="left">
            <img class="profile-pic" src="<?php echo 'profiles/images/' . htmlspecialchars($image); ?>" alt="Profile Picture"><br><br>
            <p><strong>Username: </strong><?php echo htmlspecialchars($user_name); ?></p>
        </div>
        <div class="right">
            <!--<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editModal">Edit</button>-->
            <div class="r">
                <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
                <p><strong>Email:</strong> <?php if($hidden == 0) echo htmlspecialchars($user_email); else echo 'Email is hidden'; ?></p>
            </div>
            <div class="contact">
                    <h5>Contact Us:</h5>
                    <?php
                        echo '<a href="https://dj.000.pe/talksta/'.$user_name.'">';
                    ?><img src="me.png" width="35" height="35" style='margin-top:10px'></a> 
                    <?php
                        if(!empty($url1)){
                            echo '<a href="'.$url1.'"><i class="fa-brands fa-github" style="color: #478bff; width:25px; font-size:1.3em; "></i>

                            </a>
                    ';
                        }
                        if(!empty($url2)){
                            echo '<a href="'.$url2.'"><i class="fa-brands fa-x-twitter" style="color: #478bff; width:20px; font-size:1.3em; "></i>
                            </a>
                    ';
                        }
                        if(!empty($url3)){
                            echo '<a href="'.$url3.'"><img src="Image.png" width="24" height="23" style="margin-top:-6px">
                    ';
                        }
                        if(!empty($url4)){
                            echo '<a href="'.$url4.'"><i class="fa-brands fa-telegram" style="color: #478ff; width:25px; font-size:1.3em;"></i>
                            </a>
                    ';
                        }
                        if(!empty($url5)){
                            echo '<a href="'.$url5.'"><i class="fa-brands fa-linkedin-in" style="color: #478ff; width:25px; font-size:1.3em;"></i>
                            </a>
                    ';
                        }
                     ?>
                        
                    <!-- Add other social media links -->
                </div><br>
                <!--<div class="followbtn">
                    <button id="followBtn" class="btn btn-primary" data-action="<?php echo $isFollowing ? 'unfollow' : 'follow'; ?>" data-userid="<?php echo $id; ?>">
                        <?php echo $isFollowing ? 'Unfollow' : 'Follow'; ?>
                    </button><br><br>
                    <div style="display:flex">
                        <h6>Followers: <?php echo $followerCount; ?></h6>
                        <h6> Following: <?php echo $followingCount; ?></h6>
                    </div><br>
                </div>-->
                <h5>Threads:</h5>
                <div class="jumbo">
                <?php
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result1)) {
                    $got1 = false;
                    $tid = $row['threads_id'];
                    $title = $row['threads_title'];
                    $desc = $row['threads_desc'];
                    $comment_time = $row['datetime'];
                    $date = new DateTime($comment_time);
                    $date1 = $date->format('d-m-Y');
                    $sno++;
                ?>
                    <div class="media">
                        <div class="media-body">
                            <div style="display:flex; justify-content: space-between;">
                                <h5 class="my-0" style="font-size:1.2rem;"><a class="text-dark" href="https://dj.000.pe/talksta/thread.php?threadid=<?php echo $tid; ?>"><?php echo $sno . ". " . htmlspecialchars($title); ?></a></h5>
                                <p style="font-size:14px" class="font-weight-bold text-right my-0"><?php echo $date1; ?></p>
                            </div>
                            <?php echo htmlspecialchars($desc); ?>
                        </div>
                    </div>
                <?php
                }
                if ($got1) {
                ?>
                    <div class="jumbo">
                        <div class="container">
                            <h5>No Threads Found</h5>
                            <p class="lead">Be the first person to ask a question</p>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/02f4bd7d60.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
