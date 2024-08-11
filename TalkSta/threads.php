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
    session_start();
    error_reporting(0);
    include 'dbcon.php';
    include 'header.php';
    $id = $_GET['subid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 0) {
        echo '<script>
                alert("Category not found!");
                window.location.href = "https://dj.000.pe/talksta"; 
              </script>';
        exit();
    }
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_desc'];
    }
    ?>
    <?php
    $alert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == 'POST'){
        //data insert into db

        $_title = $_POST['pt']; 
        $_desc  = $_POST['desc'];
        $user_id = $_POST['user_id']; 

        $_title = str_replace("&", "&amp;", $_title); //sanitization 
        $_title = str_replace("<", "&lt;",  $_title); //sanitization 
        $_title = str_replace(">", "&gt;",  $_title); //sanitization 

        $_desc = str_replace("&", "&amp;", $_desc); //sanitization 
        $_desc = str_replace("<", "&lt;",  $_desc); //sanitization 
        $_desc = str_replace(">", "&gt;",  $_desc); //sanitization 

        $sql = "INSERT INTO `thread` (`threads_cat_id`, `threads_title`, `threads_desc`, `threads_user_id`, `datetime`) VALUES ('$id', '$_title', '$_desc', '$user_id', current_timestamp()) ";
        $result = mysqli_query($conn, $sql);
        $alert = true;
        if($alert){
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!!</strong> Your thread has been added! Please wait for someone response.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
        if(!$alert){
            echo'
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Your thread has not been added!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
    }


    ?>

    <!-- category -->
    
    <div class="container mt-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname;?></h1>
            <p class="lead"><?php echo $catdesc;?></p>
            <hr class="my-4">
            <p>
                There are sharing the knowledge.<br>
                <b>Conditions:</b>
                * No Spamming, Advertizing.
                * Self promote in this area not allowed.
                * Do not post copyright material/ offensive posts, links, image.
            </p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

    <div class="container">
        <?php
        // session_start();
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
            echo'
                <div class="container mt-3">
                    <h2>Start a Discussion</h2>
                    <form action=" '.$_SERVER["REQUEST_URI"].'" method="POST">
                        <div class="form-group">
                            <label for="problemTitle">Title</label>
                            <input type="text" name="pt" required class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Keep your title as short & crisp as possible</small>
                        </div>
                        <input type="hidden" name="user_id" value="'.$_SESSION["user_id"].'">
                        <div class="form-group">
                            <label for="textarea">Elaborate your concern</label>
                            <textarea class="form-control" required id="textarea" name="desc" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            ';
        }
        else{
            echo'
            <h2>Start a Discussion</h2>
                <div class="alert alert-danger" role="alert">
                    <strong>You can\'t post your question because you are not logged in!</strong>
                </div>
            ';
        }
        ?>
    </div>

    <div class="container mt-3">
        <h2>Questions</h2>
        <?php
            $id = $_GET['subid'];
            $_SESSION['thread'] = $id;

            $sql = "SELECT * FROM `thread` WHERE threads_cat_id=$id ";
            $result = mysqli_query($conn, $sql);
            $got = true;
            while($row = mysqli_fetch_assoc($result)){
                $got = false;
                $id = $row['threads_id'];
                $title = $row['threads_title'];
                $desc = $row['threads_desc'];
                $comment_time = $row['datetime'];
                $date = new DateTime($comment_time);
                $date1 = $date->format('h:i A d-m-Y');

                //for user_name
                $thread_user_id = $row['threads_user_id'];
                $sql1    = "SELECT user_name, user_email, `image`, `name` FROM `user` WHERE `user_id` = '$thread_user_id' ";
                $result1 = mysqli_query($conn, $sql1);

                if(mysqli_num_rows($result1) > 0) {
                    $row1  = mysqli_fetch_assoc($result1);
                    $image = $row1['image'];
                    $name  = $row1['name'];
                }
                $n = false;
                if($name == 'yourname'){
                    $n = true;
                }

                echo'
                <div class="media mt-3">
                    <a href="https://dj.000.pe/talksta/'.$row1['user_name'].'" style="text-decoration:none; color:black;">
                        <img src="profiles/images/'.$image.'" class="mr-3" alt="user"  width="30px" height="30px" style="border:1px solid grey; border-radius:50%">
                        <div class="media-body">
                            <div style="display:flex; text-transform:capitalize; justify-content: space-between;">
                                <p style="font-size:20px;" class="font-weight-bold my-0">';
                                if($n){
                                    echo $row1['user_name'];
                                }
                                if(!$n){
                                    echo $row1['name'];
                                }
                                echo'</p>
                            </a>
                            <p style="font-size:16px" class="font-weight-bold text-right my-0"><a href="?id='.$id.'" data-id="'.$id.'" data-toggle="modal" id="openPopup" data-target="#report" name="click11" onclick="fac">Report
                            <input type="hidden" value="'.$id.'" name="id">
                            </a>&nbsp;&nbsp;'.$date1.'</p>
                        </div>
                        <h5 class="my-0"><a class="text-dark" href="https://dj.000.pe/talksta/thread.php?threadid='.$id.'">'.$title.'</a></h5>
                         '.$desc.'
                    </div>
                </div>
                ';
            }

            if($got){
                echo '
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <p class="display-4">No Threads Found</p>
                            <p class="lead">Be the first person to ask a question</p>
                        </div>
                    </div>
                ';
            }
            include 'report.php';
        ?>
    </div>

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
                                            <button name="report" type="submit" name="clickbtn" class="btn btn-primary">Report</button>
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
    <br><br><br><br><br>
</body>
</html>
