<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data</title>
<style>
    .id{
        text-transform:capitalize;
    }
    .update{
        background-color:red;
        color:white;
        width:90%;
        height:30px;
        font-size:90%;
        border:0;
        outline:none;
        border-radius:10px;
    }
    th{
        border-radius:10px;
        background-color:skyblue;
    }
    td{
        border-radius:5px;
    }

</style>
</head>
</html>
<?php
    error_reporting(0);
    include("connection.php");

    $query  = "SELECT * FROM admitcard";
    $data   = mysqli_query($conn, $query);
    $total  = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
?>
<h2 align="center"><mark>Displaying All Records</mark></h2>
<table border="1" cellspacing="7" style="font-size:20px"; width="100%">
    <tr>
        <th width="2%">Sno</th>
        <th width="3%">Photo</th>
        <th width="11%">Student Name</th>
        <th width="10%">Father Name</th>
        <th width="10%">Mother Name</th>
        <th width="5%">Gender</th>
        <th width="8%">Wrn No</th>
        <th width="8%">Enrollment No</th>
        <th width="10%">Roll No</th>
        <th width="15%">Date & Time</th> 
        <th width="20%">Operations</th> 
    </tr>

<?php
     echo "
                    <td class='id'><center>".$result['sno']."</center></td>        
                    <td><img src= '".$result['stu_pic']."' height='100px' width='100px'></td>
                    <td class='id'>".$result['name']."</td>
                    <td class='id'>".$result['fathername']."</td>
                    <td class='id'>".$result['mothername']."</td>
                    <td class='id'><center>".$result['gender']."</center></td>
                    <td class='id'><center>".$result['wrnno']."</center></td>
                    <td class='id'><center>".$result['enrollmentno']."</center></td>
                    <td><center>".$result['rollno']."</center></td>
                    <td><center>".$result['date_time']."</center></td>
                    <td><center><a href='update_data.php?sno=$result[sno]'><input type='submit' value='Update' class='update'></a></center></td>
                 </tr>";
    
    if($total != 0){
        while($result = mysqli_fetch_assoc($data)){
            echo "
                    <td><center>".$result['sno']."</center></td>        
                    <td><img src= '".$result['stu_pic']."' height='100px' width='100px'></td>
                    <td class='id'>".$result['name']."</td>
                    <td class='id'>".$result['fathername']."</td>
                    <td class='id'>".$result['mothername']."</td>
                    <td class='id'><center>".$result['gender']."</center></td>
                    <td class='id'><center>".$result['wrnno']."</center></td>
                    <td class='id'><center>".$result['enrollmentno']."</center></td>
                    <td><center>".$result['rollno']."</center></td>
                    <td><center>".$result['date_time']."</center></td>
                    <td><center><a href='update_data.php?sno=$result[sno]'><input type='Submit' value='Update' class='update'></a></center></td>
                 </tr>";
    }
    }
?>
</table>
