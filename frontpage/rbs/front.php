<?php
    include('admitcard/connection.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if( isset($_POST['click']))
    {
        $name        = $_POST['name']; 
        $teachername = $_POST['teachername']; 
        $subject     = $_POST['sub']; 
        $clgname     = $_POST['cn'];
        $session     = $_POST['s'];
        $department  = $_POST['dn'];
        $semester    = $_POST['sd']; 
        $rollno      = $_POST['rl'];
        $city        = $_POST['city'];
        $file        = $_POST['file'];

        $name = str_replace("&", "&amp;", $name); //sanitization 
        $name = str_replace("<", "&lt;",  $name); //sanitization 
        $name = str_replace(">", "&gt;",  $name); //sanitization

        $teachername = str_replace("<", "&lt;",  $teachername); //sanitization 
        $teachername = str_replace("&", "&amp;", $teachername); //sanitization 
        $teachername = str_replace(">", "&lt;",  $teachername); //sanitization 

        $subject = str_replace(">", "&gt;",  $subject); //sanitization
        $subject = str_replace("&", "&amp;", $subject); //sanitization 
        $subject = str_replace("<", "&lt;",  $subject); //sanitization 

        $clgname = str_replace(">", "&gt;",  $clgname); //sanitization
        $clgname = str_replace("&", "&amp;", $clgname); //sanitization 
        $clgname = str_replace("<", "&lt;",  $clgname); //sanitization

        $session = str_replace(">", "&gt;",  $session); //sanitization
        $session = str_replace("&", "&amp;", $session); //sanitization 
        $session = str_replace("<", "&lt;",  $session); //sanitization 

        $department = str_replace(">", "&gt;",  $department); //sanitization
        $department = str_replace("&", "&amp;", $department); //sanitization 
        $department = str_replace("<", "&lt;",  $department); //sanitization 

        $semester = str_replace(">", "&gt;",  $semester); //sanitization
        $semester = str_replace("&", "&amp;", $semester); //sanitization 
        $semester = str_replace("<", "&lt;",  $semester); //sanitization 

        $rollno = str_replace(">", "&gt;",  $rollno); //sanitization
        $rollno = str_replace("<", "&gt;",  $rollno); //sanitization
        $rollno = str_replace("&", "&amp;", $rollno); //sanitization 

        $city = str_replace("<", "&lt;",  $city); //sanitization 
        $city = str_replace(">", "&gt;",  $city); //sanitization 
        $city = str_replace("&", "&amp;", $city); //sanitization 

        $file = str_replace("<", "&lt;",  $file); //sanitization 
        $file = str_replace(">", "&gt;",  $file); //sanitization
        $file = str_replace("&", "&gt;",  $file); //sanitization

// echo'<script>alert("ok");</script>';
        $query = "INSERT INTO `frontpage` (`name`, `teachername`, `subject`, `clgname`, `session`, `departmentname`, `semester`, `rollno`,`city`,`filetype`, `date&time`)  VALUES ('$name','$teachername','$subject','$clgname','$session','$department','$semester','$rollno','$city','$file', current_timestamp())";
        $data = mysqli_query($conn,$query);

        // if($data){
        //    echo "<script> alert('Data Inserted into Database') </script>";
        // }

        // else{
        //     echo "<script> alert('Failed') </script>";
        // }
        echo'
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
                    <title>Front Page</title>
                    <style>
                        #main{
                            //border:3px solid black;
                            width:210mm;
                            height:285mm;
                        }

                        .m1{
                            text-align: center;
                            padding-top: 15;
                            color:black;
                            font-size:45px;
                        }

                        .m2{
                            text-align: center;
                            padding-top: 1;
                            color:black;
                            font-size:40px;
                        }
                        .m3{
                            //width: 550;
                            text-align: center;
                        } 
                        .m4{
                            //width: 550;
                            text-align:center;
                            color:black;
                            font-size:30px;
                        }
                        .m5{
                            //width:550;
                            text-align:center;
                            font-size:38px;
                        }
                        .m6{
                            //width:550;
                            text-align:center;
                            font-size:38px;
                        }
                        .m7{
                        //width:550;
                        text-align:center;
                        font-size:40px;
                        }
                        
                        .m8{
                        text-align:center;
                        font-size:35px;
                        color:skyblue;
                        }
                        .m9{
                        
                        text-align:center;
                        font-size:30px;
                        }
                        .m91{
                        width:50%;
                        display:inline-block;
                        font-size:30px;
                        text-align:center;
                        }
                        .m92{
                        width:50%;
                        float:left;
                        text-align:center;
                        font-size:30px;
                        }
                        .m10{
                        width:100%;
                        }
                        /*.m101{
                        float:left;
                        //margin-left:-57px;
                        font-size:28px;
                        display:inline-block;
                        }
                        .m103{
                        width:62%;
                        float:left;
                        font-size:28px;
                        display:inline-block;
                        }

                        .m102{
                        margin-left:-20px;
                        float:right;
                        display:inline-block;
                        font-size:28px;
                        }*/
                        .m102{
                        //width:50%;
                        display:inline-block;
                        font-size:30px;
                        margin-left:485px;
                        margin-top:-35px;
                        //text-align:center;
                        }
                        .m101{
                        //width:50%;
                        float:left;
                        //text-align:center;
                        font-size:30px;
                        margin-left:88px;
                        }
                        .m103{
                        width:39%;
                        display:inline-block;
                        font-size:30px;
                        text-align:center;
                        }
                        .rollno{
                            font-size:30px;
                            margin-left: 220px;
                            margin-top: -34px;
                        }
                        #pageCount{
                    color:transparent;
                }
                    </style>
                </head>
                <body>
                    <main><center><span id="pageCount"><span></center>
                        <a tittle="printscreen" alt="printscreen" onclick="window.print()" ; tarpost="_blank" style="cursor:pointer"><br>
                            <div class="mai">
                                <div id="main"><br><br>
                                    <div class="m1"><b>'; echo $clgname; echo'</b></div>
                                    <div class="m2"><b>'; echo $city; echo'</b></div><br><br>
                                    <div class="m9"><b>'; echo $department; echo' Department</b></div><br><br>
                                    <div class="m3"><img src="../../../pic.png"; width="250"> </div><br>
                                    <div class="m4"><b>Session:'; echo $session; echo'</b></div><br><br><br>
                                    <div class="m5"><u><b>'; echo $file; echo'</b></u></div><br>
                                    <div class="m6">'; echo $subject; echo'</div><br><br><br>
                                    <!--<div class="m7"><b>Topic:- </b></div><br><br><br>-->
                                    <div class="m8"><u><b>'; echo $semester; echo'</b></u></div><br><br><br><br>
                                    <div class="m91"><u><b>Submitted To</b></u><b>:-</b></div>
                                    <div class="m92"><u><b>Submitted By</b></u><b>:-</b></div><br>
                                    <div class="m101">'; echo $name; echo'</div>
                                    <div class="m102">'; echo $teachername; echo'</div> ';
                                    
                                    if($rollno){
                                    echo "<div class='m103'><b>Roll No.:</b></div><div class='rollno'>".$rollno ."</div>";
                                    }
                                    else{
                                        echo "";
                                    }
                                echo'
                                </div>
                            </div>
                        </a>
                    </main>
                    <script src="counter.js">hello</script>
                </body>
            </html>
    ';
    }
}
else{
    echo'<script>alert("Kyo, maje lene he!!");</script>';
    header( "refresh:0;url= https://dj.000.pe/frontpage" );
}
?>
