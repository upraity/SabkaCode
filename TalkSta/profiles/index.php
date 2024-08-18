<?php
error_reporting(0);
include 'dbcon.php';
session_start();

if (!isset($_SESSION['loggedin'])) {
    echo '<script>alert("You are not logged in. Please log in first!!");</script>';
    header("refresh:0;url = https://dj.000.pe/talksta");
    exit(); 
}

$user_name = $_SESSION['user_name'];
$id = $_SESSION['user_id'];

// User logged in hai, ab user details fetch kare

$sql = "SELECT * FROM `user` WHERE `user_name` = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $user_name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $user_email = $row['user_email'];
    $name = $row['name'];
    $desc = $row['user_desc'];
    $image = $row['image'];
    $url1 = $row['url1'];
    $url2 = $row['url2'];
    $url3 = $row['url3'];
    $url4 = $row['url4'];
    $url5 = $row['url5'];
    $hidden = $row['cts'];
    $block = $row['block'];
}

$sql1 = "SELECT * FROM `thread` WHERE `threads_user_id` = ?";
$stmt1 = mysqli_prepare($conn, $sql1);
mysqli_stmt_bind_param($stmt1, "i", $id);
mysqli_stmt_execute($stmt1);
$result1 = mysqli_stmt_get_result($stmt1);
$got1 = true;

$sql2 = "SELECT * FROM `comments` WHERE `comment_by` = $id ";
$result2 = mysqli_query($conn, $sql2);
$got2 = true;

include 'h.php';

// PHP condition check
$showPopup = false;
// Example condition, aap apni condition yaha lagaye
if ($block == 1) {
    $showPopup = true;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $_SESSION['user_name']; ?> - profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
        .container1 {
            display: flex;
            max-width: 100%;
            width: 100%;
        }
        .left {
            flex: .6;
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
        }
        .jumbo {
            padding: 1rem 1rem;
            background-color: #e9ecef;
        }
        .modal-backdrop-custom {
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content-custom {
            background-color: white;
            border: none;
            border-radius: 0;
        }
    </style>
</head>
<body>
    <div class="container1">
        <div class="left">
            <img class="profile-pic" src="<?php echo 'images/' . $image; ?>" ><br><br>
            <p><strong>Username: </strong><?php echo $user_name; ?></p>
            <p><strong>Desc: </strong>
                <?php 
                    if(!empty($desc)){
                        echo $desc;
                    }
                    else{
                        echo 'Empty';
                    }    
                ?>
            </p>
        </div>
        <div class="right">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editModal">Edit 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg></button>
            <div class="r">
                <p><strong>Name:</strong> <?php echo $name; ?></p>
                <p><strong>Email:</strong> <?php echo $user_email; if($hidden == 1) echo(' (Hidden)'); ?></p>
                <div class="contact">
                    <h5>Contact Us:</h5>
                    <?php
                        echo '<a href="https://dj.000.pe/talksta/'.$user_name.'">';
                    ?>
                    <img src="../me.png" width="35" height="35" style='margin-top:10px'></a> 
                    <?php
                        if (!empty($url1)) {
                            echo '<a href="'.$url1.'"><i class="fa-brands fa-github" style="color: #478bff; width:25px; font-size:1.3em;"></i></a>';
                        }
                        if (!empty($url2)) {
                            echo '<a href="'.$url2.'"><i class="fa-brands fa-x-twitter" style="color: #478bff; width:20px; font-size:1.3em;"></i></a>';
                        }
                        if (!empty($url3)) {
                            echo '<a href="'.$url3.'"><img src="../Image.png" width="24" height="23" style="margin-top:-6px"></a>';
                        }
                        if (!empty($url4)) {
                            echo '<a href="'.$url4.'"><i class="fa-brands fa-telegram" style="color: #478ff; width:25px; font-size:1.3em;"></i></a>';
                        }
                        if (!empty($url5)) {
                            echo '<a href="'.$url5.'"><i class="fa-brands fa-linkedin-in" style="color: #478ff; width:25px; font-size:1.3em;"></i></a>';
                        }
                    ?>
                </div><br>
                <?php

                $shiv = "SELECT followers, following FROM user WHERE user_id = '$id'";
                $shiva = mysqli_query($conn, $shiv);

                if ($shiva) {
                    $rows = mysqli_fetch_assoc($shiva);
                    $followerCount = $rows['followers'];
                    $followingCount = $rows['following'];
                } 
                ?>
                <div class="follows" style="display:flex;">
                <h6>
                    <form action="" method="POST">
                        <button onmouseover="this.style.color='blue';" onmouseout="this.style.color='#3b7add';" style="outline:none; text-decoration:none; font-weight:bold; color:#3b7add; background-color:transparent; border:none;" name="following">Following: <span><?php echo $followingCount; ?></span></button>
                        <input type="hidden" name="target_id" value="<?php echo $id;?>">
                        <button onmouseover="this.style.color='blue';" onmouseout="this.style.color='#3b7add';" style="outline:none; text-decoration:none; font-weight:bold; color:#3b7add; background-color:transparent; border:none;" name="followers">Followers: <span><?php echo $followerCount; ?></span></button>
                    </form>
                </h6>
            </div>
            </div>
            <div class="follow">
                <?php
                    // include 'dbcon.php';
                    $id = $_POST['target_id'];

                    if (isset($_POST['following'])) {
                        // echo 'yes';
                        $sql = "SELECT follow_to FROM follow WHERE following_by = '$id'";
                        $query = mysqli_query($conn, $sql);

                        if ($query) {
                            $user_id = []; 
                            while ($rows = mysqli_fetch_assoc($query)) {
                                $user_id[] = $rows['follow_to'];
                            }

                            if (count($user_id) > 0) {
                                foreach ($user_id as $uid) {
                                    $data = "SELECT * FROM user WHERE user_id = '$uid'";
                                    $fetch = mysqli_query($conn, $data);
                                    $row = mysqli_fetch_assoc($fetch);

                                    if ($row) {
                                        echo '
                                            <table">
                                                <tr>
                                                    <td><img style="height:35px; width:35px; border-radius:100%;" src="images/' . $row['image'] . '"></td>
                                                    <td>' . ucfirst($row['name']) . '</td>
                                                    <td></td>
                                                    <td>' . ucfirst($row['user_name']) . '</td>
                                                </tr>
                                            </table><br>
                                        ';
                                    } 
                                }
                            } 
                            else {
                                echo '<p>No followers found.</p>';
                            }
                        } 
                    }

                    if(isset($_POST['followers'])){
                        $sql = "SELECT following_by FROM follow WHERE follow_to = '$id'";
                        $query = mysqli_query($conn, $sql);

                        if ($query) {
                            $user_id = []; 
                            while ($rows = mysqli_fetch_assoc($query)) {
                                $user_id[] = $rows['following_by'];
                            }

                            if (count($user_id) > 0) {
                                foreach ($user_id as $uid) {
                                    $data = "SELECT * FROM user WHERE user_id = '$uid'";
                                    $fetch = mysqli_query($conn, $data);
                                    $row = mysqli_fetch_assoc($fetch);

                                    if ($row) {
                                        echo '
                                            <table">
                                                <tr>
                                                    <td><img style="height:35px; width:35px; border-radius:100%;" src="images/' . $row['image'] . '"></td>
                                                    <td>' . $row['name'] . '</td>
                                                    <td>' . $row['user_name'] . '</td>
                                                </tr>
                                            </table><br>
                                        ';
                                    } 
                                }
                            } 
                            else {
                                echo '<p>No followers found.</p>';
                            }
                        } 
                    }
                ?>
            </div>
            <br>
            <div class="comment">
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
                            <div style="display:flex; text-transform:capitalize; justify-content: space-between;">
                                <h5 class="my-0" style="font-size:1.2rem;"><a class="text-dark" href="https://dj.000.pe/talksta/thread.php?threadid=<?php echo $tid; ?>"><?php echo $sno . ". " . $title; ?></a></h5>
                                <p style="font-size:14px" class="font-weight-bold text-right my-0"><?php echo $date1; ?></p>
                            </div>
                            <?php echo $desc; ?>
                        </div>
                    </div>
                <?php
                }
                if ($got1) {
                ?>
                    <div class="jumbo">
                        <div class="container">
                            <p class="display"><h5>No Threads Found</h5></p>
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-custom">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Important Message</h5>
                </div>
                <div class="modal-body">
                    Your account has been block.<br>
                    Contact us for reopen your account <a href="https://t.me/sabkacode"><i class="fa-brands fa-telegram" style="color: #478ff; width:25px; font-size:1.3em;"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/02f4bd7d60.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var showPopup = <?php echo json_encode($showPopup); ?>;
            if (showPopup) {
                $('#myModal').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#myModal').modal('show');
            }
        });
    </script>
  
</body>
</html>

<?php
    include 'edit.php';
    include 'add.html';
?>
