<?php
    include 'dbcon.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $desc = $_POST['desc'];
    
        $sql = "INSERT INTO `categories` (`category_name`, `category_desc`, `datetime`) VALUES ('$title', '$desc', current_timestamp()) ";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Insert successfully');</script>";
            header("refresh:0; url= https://dj.000.pe/talksta");
        }
        else{
            echo "<script>alert('Not insert, \nsome problem...');</script>";
            header("refresh:0; url= https://dj.000.pe/talksta");
        }
        
    }
    else{
        echo "<script>alert('Accha, maje le raha he!!');</script>";
        header("refresh:0; url= https://dj.000.pe/talksta");
    }

?>
