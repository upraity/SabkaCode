<?php
include 'dbcon.php';
error_reporting(0);
session_start();

if(!isset($_SESSION['loggedin'])){
    echo '<script>alert("You are not logged in. Please log in first.");</script>';
    header("refresh:0;url=http://localhost/comment");
    exit(); // Stop execution after redirect
}

// Fetch user details after ensuring user is logged in
$user_name = $_SESSION['user_name'];
$id = $_SESSION['user_id'];

$sql = "SELECT * FROM `user` WHERE `user_name` = '$user_name'";
$result = mysqli_query($conn, $sql);
// $stmt = mysqli_prepare($conn, $sql);
// mysqli_stmt_bind_param($stmt, "s", $user_name);
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);


if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $user_email = $row['user_email'];
    $name = $row['name'];
}

$sql1 = "SELECT * FROM `thread` WHERE `threads_user_id` = '$id' ";
$result1 = mysqli_query($conn, $sql1);

$got1 = true;
    

                //for user_name
                // $thread_user_id = $row['threads_user_id'];
                // $sql1    = "SELECT user_name, user_email FROM `user` WHERE user_id = '$thread_user_id' ";
                // $result1 = mysqli_query($conn, $sql1);
                // $row1    = mysqli_fetch_assoc($result1);


include 'h.php';
echo
'<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>'. $_SESSION['user_name'] .' - profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
                        body,html {
                            /* margin: 0;
                            padding: 0;
                            height: 100%; */
                        }
                        .container1 {
                            display: flex;
                            /* height: 100%; */
                            max-width:100%;
                            width:100%;
                        }
                        .left {
                            flex: .6;
                            /* display: flex; */
                            /* justify-content: center; */
                            text-align: center;
                            align-items: center;
                            /* background-color: #f0f0f0; */
                        }
                        .right {
                            flex: 1;
                            padding: 20px;
                            /* background-color: #ffffff; */
                        }
                        .profile-pic {
                            width: 70%;
                            height: 65%;
                            border-radius: 50%;
                            cursor: pointer;
                            margin-top:20%
                        }
                        .r{
                            margin-top: 8%;
                            font-size: 16px;
                        }
                        .contact{
                            // font-size:25px;
                        }
                        .comment{
                            margin-top:10%;
                        }
                    </style>
</head>
<body>
    <div class="container1">
                                <div class="left">
                                    <img class="profile-pic" src="logo12.jpg" alt="Profile Picture"><br><br>
                                    <p><strong>Username: </strong>'. $user_name. '</p>
                                </div>
                                <div class="right">
                                <button type="button" class="btn btn-outline-primary">Edit <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                              </svg></button>
                                    <div class="r">
                                        <p><strong>Name:</strong> '.  $name.'</p>
                                        <p><strong>Email:</strong> '. $user_email .'</p>
                                        <!-- Add other details here -->
                                        <div class="contact">
                                            <h5>Contact Us:</h5>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                          </svg></a>
                                          <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                        </svg>
                                          </a>
                                          <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                          <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                        </svg>
                                        </a>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                                      </svg>
                                        </a>
                                        <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                      </svg>
                                      </a>
                                      <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                        </svg>
                                      </a>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <h4>Comment:</h4>';
                                        while($row = mysqli_fetch_assoc($result1)){
                                            $got1 = false;
                                            // $id = $row['threads_id'];
                                            $title = $row['threads_title'];
                                            $desc = $row['threads_desc'];
                                            $comment_time = $row['datetime'];
                                            $date = new DateTime($comment_time);
                                            $date1 = $date->format('h:i A d-m-Y');
                                            echo'
                                                <div class="media mt-3">
                                                    <div class="media-body">
                                                        <div style="display:flex; text-transform:capitalize; justify-content: space-between;"
                                                            <p style="font-size:20px;" class="font-weight-bold my-0">'.$row1['user_name'].'</p>
                                                            <p style="font-size:16px" class="font-weight-bold text-right my-0">'.$date1.'</p>
                                                        </div>
                                                        <h5 class="my-0"><a class="text-dark" href="thread.php?threadid='.$id.'">'.$title.'</a></h5>
                                                        '.$desc.'
                                                    </div>
                                                </div>';
                                        }
                                        if($got1){
                                            echo '
                                                <div class="jumbotron jumbotron-fluid">
                                                    <div class="container">
                                                        <p class="display-4">No Threads Found</p>
                                                        <p class="lead">Be the first person to ask a question</p>
                                                    </div>
                                                </div>
                                            ';
                                        }
                                    echo'</div>
                                </div>
                            </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
';
include 'edit.php';
?>
