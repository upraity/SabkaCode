<?php
    include 'dbcon.php';
    if(isset($_SESSION['loggedin'])){
        header("location: https://dj.000.pe/talksta");
    }

    if(isset($_GET['email']) && isset($_GET['vcode'])){
        $query = "SELECT * FROM `user` WHERE user_email = '$_GET[email]' AND verification_code = '$_GET[vcode]' ";
        $result = mysqli_query($conn,$query);
        
        if($result){
            if(mysqli_num_rows($result) == 1){
                $result_fetch = mysqli_fetch_assoc($result);
                if($result_fetch['is_verified'] == '0'){
                    $update = "UPDATE `user` SET is_verified = '1' WHERE user_email = '$result_fetch[user_email]' ";
                    if(mysqli_query($conn, $update)){
                        echo "
                            <script>
                                alert('Email verification successfully');
                                location.href='https://dj.000.pe/talksta';
                            </script>";
                    }
                    else{
                        echo "
                        <script>
                            alert('Something went wrong');
                            location.href='https://dj.000.pe/talksta';
                        </script>";
                    }
                }
                else{
                    echo "<script>
                    alert('Email already verified');
                    location.href='https://dj.000.pe/talksta';
                    </script>";
                }
            }
        }
        else{
            echo "<script>
            alert('Something went wrong');
            location.href='https://dj.000.pe/talksta';
            </script>";
        }
    }
?>
