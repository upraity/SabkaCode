<?php
include ('_dbconnect1.php');
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: https://dj.000.pe/old/login.php");
}


?>
<!DOCTYPE html>
    <head>
        <title> My Account</title>
        <style>
     
            .m{
                border: 2px solid blue;
                 padding:20px;
            }
            .main{
                border: 2px solid red;
                width:50%;
                margin:15px;
            }
            p{
                text-align:right;
                color:blue;
                font-size:20px;
                margin-top:-22px;
            }
            p a{
                text-decoration:none;
                color:blue;
            }
            p a::visited{
                text-decoration:none;
                color:blue;
            }
            table{
                font-size:25px;
            }
            .logout a{
                color:red;
                margin-top:10px;
                float:right;
                font-size:25px;
            }
        </style>
    </head>
    <body>
        <center><h2>!!Radhe Radhe!!</h2></center>
        <div class="home">
            <?php include('nav.php');?>
            <br><br>
           <div class="m">
           <p class="logout"><a href="https://dj.000.pe/old/logout1.php">Logout</a></p>
                <center><div class="main">
                    <h1>My Account</h1>
                    <table>
                    <br>
                        <tr>
                            <td>Name</td>
                            <td>:-</td>
                            <td> </td>
                            <td><?php echo $_SESSION['username']?></td>
                        </tr>
                         <tr>
                            <td>Email</td>
                            <td>:-</td>
                            <td> </td>
                            <td><?php echo $_SESSION['email']?></td>
                        </tr>
                         <tr>
                            <td>Password</td>
                            <td>:-</td>
                            <td> </td>
                            <td><?php echo $_SESSION['password']?></td>
                        </tr>
                    </table>
                    <br>
                </div></center>
           </div><br>
           <?php include('footer.php');?> 
        </div>
    </body>

<!--ads-->
<center>
    <script type="text/javascript">
	atOptions = {
		'key' : '<>',
		'format' : 'iframe',
		'height' : 90,
		'width' : 728,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplaynetwork.com/9b108077b060ac8fb972f7767f79a32a/invoke.js"></scr' + 'ipt>');
</script>
</center>
<!--ads-->
</html>
