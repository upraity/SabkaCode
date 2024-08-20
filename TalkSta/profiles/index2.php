<?php
include 'dbcon.php';
include 'h.php';
session_start();
    if(!isset($_SESSION['loggedin'])){
        echo'
            <script>
                alert("You are not login\nfirst login!!");
            </script>
        ';
        header( "refresh:0;url= http://localhost/comment" );
    }

    else{
        $user_name = $_SESSION['user_name'];
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


        echo'
            <!doctype html>
            <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                            margin-top: 15%;
                            font-size: 16px;
                        }
                    </style>
                <title> '. $_SESSION['user_name']. '- profile</title>
                </head>
                <body>';
                        // include 'h.php';
                        echo'
                            <div class="container1">
                                <div class="left">
                                    <img class="profile-pic" src="logo12.jpg" alt="Profile Picture"><br>
                                    <p>'. $user_name. '</p>
                                </div>
                                <div class="right">
                                    <div class="r">
                                        <p><strong>Name:</strong> '. $row['name'] .'</p>
                                        <p><strong>Email:</strong> '. $user_email .'</p>
                                        <!-- Add other details here -->
                                    </div>
                                </div>
                            </div>
                        ';
                ' <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
            </body> 
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
                </script>
            </html>
        ';
    }
?>
