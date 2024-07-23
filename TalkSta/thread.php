<?php
error_reporting(0);
session_start();
include 'dbcon.php';
    $user_name = $_SESSION['user_name'];
    $id = $_SESSION['user_id'];

    $sql = "SELECT * FROM `user` WHERE `user_name` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user_name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);     
        $block = $row['block'];
    }

    $showPopup = false;
    if ($block == 1) {
        $showPopup = true;
    }
?>
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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>TalkSta</title>
</head>

<body>
    <?php 
        include 'dbcon.php';
        // include 'dbcon.php';
        include 'header.php';
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `thread` WHERE threads_id=$id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 0) {
            echo '<script>
                alert("Thread not found!");
                window.location.href = "https://dj.000.pe/talksta"; 
              </script>';
            exit();
        }

        while($row = mysqli_fetch_assoc($result)){
            $title = $row['threads_title'];
            $desc = $row['threads_desc'];

            $thread_user_id = $row['threads_user_id'];
            $sql2    = "SELECT user_name, image, name FROM `user` WHERE user_id = '$thread_user_id' ";
            // echo $thread_user_id;
            $result2 = mysqli_query($conn, $sql2);
            $row2    = mysqli_fetch_assoc($result2);
            $posted_by = $row2['user_name'];
            $naam = $row2['name'];
            // $block = $row2['block'];
            // // $image = $row2['image'];
            // $showPopup = false;
            // if ($block == 1) {
            //     $showPopup = true;
            // }

        }


    ?>

    <!-- category -->
    <div class="container mt-3">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead"><?php echo $desc;?></p>
            <hr class="my-4">
            <p>
                There are sharing the knowledge.<br>
                <b>Conditions:</b>
                * No Spamming, Advertizing.
                * Self promote in this area not allowed.
                * Do not post copyright material/ offensive posts, links, image.
            </p>
           
            <div class="contain" style="display:inline-flex">
                <p ><b>Posted By:&nbsp;
                <?php 
                    $n = false;
                    if($naam == 'yourname'){
                        $n = true;
                    }
                    if(!$n){
                        echo $naam; 
                    }
                    if($n){
                        echo $posted_by;
                    }
                ?></b></p>
            </div>
        </div>
    </div>

    <div class="container">
        <?php

            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
                echo'
                    <div class="container mt-3">
                        <h2>Post a Comment</h2>
                        <form action="'. $_SERVER['REQUEST_URI'].' " method="POST">
                            <div class="form-group">
                                <label for="textarea">Type your comment</label>
                                <textarea required class="form-control" id="textarea" name="comment" rows="5"></textarea>
                                <input type="hidden" name="user_id" value="'.$_SESSION["user_id"].'">
                            </div>
                            <button type="submit" class="btn btn-success">Post Comment</button>
                        </form>
                    </div>
                    ';
            }
            else{
                echo'
                    <h2>Post a Comment</h2>
                    <div class="alert alert-danger" role="alert">
                        <strong>You Can\'t post your comment because you are not loggedin!</strong>
                    </div>
                ';
            }
        ?>
    </div>

    <div class="container mt-3">
        <h2>Discussions</h2>
        <?php
        $alert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            // echo $method;
            //data insert into db
            $comment = $_POST['comment'];
            $comment = str_replace("&", "&amp;", $comment); //senitization 
            $comment = str_replace("<", "&lt;", $comment); //senitization 
            $comment = str_replace(">", "&gt;", $comment); //senitization 
            // $comment = str_replace("&", "&amp;", $comment); //senitization 
            
            $user_id = $_POST['user_id']; 
            $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `datetime`) VALUES ('$comment', '$id', '$user_id', current_timestamp()) ";
            $result = mysqli_query($conn, $sql);
            $alert = true;
            if($alert){
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!!</strong> Your comment has been added.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
            if(!$alert){
                echo'
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Your thread has not been addes!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        }
    ?>
        <?php
            // error_reporting(0);


            $id = $_GET['threadid'];
            $sql = "SELECT * FROM `comments` WHERE thread_id=$id ";
            $result = mysqli_query($conn, $sql);
            $got = true;
            // if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $got = false;
                $id = $row['comment_id'];
                $content = $row['comment_content'];
                $comment_time = $row['datetime'];
                $date = new DateTime($comment_time);
                $date1 = $date->format('h:i A d-m-Y');

                //for user_name
                $thread_user_id = $row['comment_by'];
                $sql1    = "SELECT user_name, user_email, name, image FROM `user` WHERE user_id = '$thread_user_id' ";
                $result1 = mysqli_query($conn, $sql1);
                $row1    = mysqli_fetch_assoc($result1);
                $image =  $row1['image'];
                $name = $row1['name'];
                $n = false;
                if($name == 'yourname'){
                    $n = true;
                }    
    
                echo'
                <div class="media mt-3">
                    <img src="profiles/images/'.$image.'" class="mr-3" alt="user"  width="30px" style="border-radius:50%">
                    <div class="media-body">
                        <div style="display:flex; justify-content: space-between;"
                            <p class="font-weight-bold my-0">';
                            if($n){
                                echo $row1['user_name'];
                            }
                            if(!$n){
                                echo $row1['name'];
                            }
                            echo'</p>
                             <p style="font-size:16px" class="font-weight-bold text-right my-0"><a href="?id='.$id.'" data-id="'.$id.'" data-toggle="modal" id="openPopup" data-target="#report" name="click11" onclick="fac">Report
                            <input type="hidden" value="'.$id.'" name="id">
                            </a>&nbsp;&nbsp;'.$row['datetime'].'</p>
                        </div>
                            '.$content.'
                    </div>
                </div>
                ';
            }
            // }

            if($got){
                echo '
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <p class="display-4">No Results Found</p>
                            <p class="lead">Be the first person to ask a question</p>
                        </div>
                    </div>
                ';
            }
        ?>

    </div>
    </div>
    <?php
    if(isset($_SESSION['user_id'])){
        echo'
            <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Report - Talk Sta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <form action="handle_report.php" method="POST">
                                    <h6 for="reportReason">Reason for reporting</h6>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="text">Desc.</label>
                                            <textarea class="form-control" id="desc" name="desc" rows="5" placeholder="Enter description" required></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button name="reportc" type="submit" name="clickbtn" class="btn btn-primary">Report</button>
                                        </div>
                                        <input type="hidden" id="reportThreadId" name="id">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        else{
            echo'
                <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loginModalLabel">Alert - Talk Sta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <p>
                                                Your are not login!! Please login first.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
<script src="https://kit.fontawesome.com/02f4bd7d60.js" crossorigin="anonymous"></script>
     <script>
        document.querySelectorAll('#openPopup').forEach(item => {
            item.addEventListener('click', function(event) {
                var id = this.getAttribute('data-id');
                document.getElementById('reportThreadId').value = id;
            });
        });
    </script>
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
    <BR><BR><BR><BR><BR>
</body>
</html>
