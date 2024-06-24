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
$conn = mysqli_connect('sql202.infinityfree.com', 'epiz_34301861', 'jVGDaC5ddKyKJnd', 'epiz_34301861_conn');
    error_reporting(0);

    $query  = "SELECT * FROM agrafp";
    $data   = mysqli_query($conn, $query);
    $total  = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
?>
<h2 align="center"><mark>Displaying All Records Of Frontpage</mark></h2>
<table border="1" cellspacing="7" style="font-size:20px"; width="100%">
    <tr>
        <th width="2%">Sno</th>
        <th width="5%">Name</th>
        <th width="11%">T Name</th>
        <th width="10%">Subject</th>
        <th width="5%">Session</th>
        <th width="8%">F Name</th>
        <th width="8%">Semester</th>
        <th width="10%">Section</th>
        <th width="12%">Date & Time</th> 
    </tr>

<?php
     echo "
                    <td class='id'><center>".$result['sno']."</center></td>       
                    <td>".$result['name']."</td>
                    <td class='id'>".$result['tname']."</td>
                    <td class='id'>".$result['sub']."</td>
                    <td class='id'>".$result['session']."</td>
                    <td class='id'><center>".$result['fname']."</center></td>
                    <td class='id'><center>".$result['clasem']."</center></td>
                    <td class='id'><center>".$result['section']."</center></td>
                    <td><center>".$result['datetime']."</center></td>
                 </tr>";
    
    if($total != 0){
        while($result = mysqli_fetch_assoc($data)){
                 echo "
                    <td class='id'><center>".$result['sno']."</center></td>       
                    <td>".$result['name']."</td>
                    <td class='id'>".$result['tname']."</td>
                    <td class='id'>".$result['sub']."</td>
                    <td class='id'>".$result['session']."</td>
                    <td class='id'><center>".$result['fname']."</center></td>
                    <td class='id'><center>".$result['clasem']."</center></td>
                    <td class='id'><center>".$result['section']."</center></td>
                    <td><center>".$result['datetime']."</center></td>
                 </tr>";
    }
    }
?>
</table>
