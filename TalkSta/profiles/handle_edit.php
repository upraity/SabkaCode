 <?php
error_reporting(0);
include 'dbcon.php';
session_start();
if(!isset($_SESSION['loggedin'])){
    echo '<script>alert("You are not logged in. Please log in first!!");</script>';
    header("refresh:0;url= https://dj.000.pe/talksta");
    exit(); 
}

$id = $_SESSION['user_id'];
$name = $_POST['name'];
$image = $_FILES['image'];
$query = "SELECT * FROM `user` WHERE `user_id` = '$id' ";
$raman = mysqli_query($conn, $query);
$renu = mysqli_fetch_assoc($raman);
$name101 = $renu['name'];
$url1 = $renu['url1'];
$url2 = $renu['url2'];
$url3 = $renu['url3'];
$url4 = $renu['url4'];
$desc = $renu['user_desc'];
// $url5 = $renu['url5'];


if ($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_FILES['image'])) {
    $url1 = $_POST['url1'];
    $url2 = $_POST['url2'];
    $url3 = $_POST['url3'];
    $url4 = $_POST['url4'];
    $url5 = $_POST['url5'];
    $hidden = $_POST['hidden'];
    $desc = $_POST['desc'];

    $query7 = "update `user` set `user_desc` = '$desc' where `user_id` = '$id'";
    $query_7 = mysqli_query($conn, $query7); 
    if($query_7){
        echo'<script>alert("Add Desc successfully")</script>';
    }

    $raman55 = "UPDATE `user` SET `url1` = '$url1', `url2` = '$url2', `url3` = '$url3', `url4` = '$url4', `url5` = '$url5', `cts` = '$hidden' WHERE `user_id` = '$id' ";
    if(mysqli_query($conn, $raman55)){
        // echo "<script>alert('updated.');</script>";
    }
    
    // Check if user wants to update name
    if($name101 == $name){
        echo '<script>alert("Name is same!!");</script>';
    }
    else{
        if (!empty($name)) {
            $sql = "UPDATE `user` SET `name` = '$name' WHERE `user_id` = '$id'";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Name updated successfully.');</script>";
            } else {
                echo "<script>alert('Name not updated.');</script>";
            }
        }
        else {
                echo "<script>alert('You can\'t blank name field');</script>";
        }
    }

    // Check if user wants to update profile picture
    if ($image["error"] == UPLOAD_ERR_OK) {
        $filename = $image['name'];
        $tmp_path = $image['tmp_name'];

        $query = "SELECT `user_name` FROM `user` WHERE `user_id` = $id ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $user_name = $row['user_name'];

            // Generate a unique file name
            // $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $random_name = $user_name . '.png';
            $folder = "images/" . $random_name;

            if (move_uploaded_file($tmp_path, $folder)) {
                $sql = "UPDATE `user` SET `image` = '$random_name' WHERE `user_id` = '$id'";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Image uploaded successfully.');</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "<script>alert('Failed to upload image.');</script>";
                header("refresh:0;url=https://dj.000.pe/talksta/profiles");
            }
        } else {
            echo "User not found.";
            header("refresh:0;url=https://dj.000.pe/talksta/profiles");
        }
    } else {
        // Error uploading image
        if ($image["error"] != UPLOAD_ERR_NO_FILE) {
            echo "<script>alert('Error uploading image.');</script>";
    header("refresh:0;url=https://dj.000.pe/talksta/profiles");
        }
    }
}
else{
echo "<script>alert('Kyo, Maje le raha he!!');</script>";
    // Redirect user after processing
}
header("refresh:0;url=https://dj.000.pe/talksta/profiles");
?>
