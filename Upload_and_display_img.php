<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    </body>
</html>


<?php
            $msg = false;
 $conn = mysqli_connect('<server>', '<username>', '<password>', '<database>');
    if(!$conn){
        die(mysqli_connect_error());
    }
    else{
        // echo'success';

    // if(isset($_SERVER['REQUEST_METHOD'] == 'POST')){
        if(isset($_POST["submit"])) {
            $targetDirectory = "uploads/";
            $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
        
            // Check if file already exists
            if (file_exists($targetFile)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
        
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
        
            // Allow certain file formats
            if($fileType != "txt" && $fileType != "pdf" && $fileType != "png" && $fileType != "jpg" && $fileType != "jpeg"){
                echo "Sorry, only TXT, PDF, DOC files are allowed.";
                $uploadOk = 0;
            }
        
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    $msg = true;
                }
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    // }
    if($msg){
        $sql = 'INSERT INTO img (img) VALUES ("'.basename( $_FILES['fileToUpload']['name']).'")';
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>alert("You file submit successfully!!");</script>';
        }
    }
    }
?>

<table border="1" style="margin:30px;">
        <tr>
            <h2>All Img</h2>
            <td>Sno</td>
            <td>Img</td>
        </tr>
        <tr>

<?php
$query = "SELECT * FROM img";
$r = mysqli_query($conn, $query);
if(mysqli_num_rows($r) > 0){
    while($row = mysqli_fetch_assoc($r)){
        echo'
                    <td>'.$row['sno'].'</td>
                    <td><img src="https://dj.000.pe/talksta/uploads/'.$row['img'].'" height=100px; width=100px></td>
                </tr> 
        ';
    }
}
?>
</table>
