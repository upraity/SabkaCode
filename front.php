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
                        <div class="m1"><b><?php echo $_POST['cn']; ?></b></div>
                        <div class="m2"><b><?php echo $_POST['city']; ?></b></div><br><br>
                        <div class="m9"><b><?php echo $_POST['dn']; ?></b></div><br><br>
                        <div class="m3"><img src="pic.png"; width="250"> </div><br>
                        <div class="m4"><b>Session:-<?php echo $_POST['s']; ?></b></div><br><br><br>
                        <div class="m5"><u><b><?php echo $_POST['file']; ?> </b></u></div><br>
                        <div class="m6"><?php echo $_POST['sub']; ?> </div><br><br><br>
                        <!--<div class="m7"><b>Topic:- </b></div><br><br><br>-->
                        <div class="m8"><u><b><?php echo $_POST['sd']; ?></b></u></div><br><br><br><br>
                        <div class="m91"><u><b>Submitted To</b></u><b>:-</b></div>
                        <div class="m92"><u><b>Submitted By</b></u><b>:-</b></div><br>
                        <div class="m101"><?php echo $_POST['name']; ?> </div>
                        <div class="m102"><?php echo $_POST['teachername']; ?></div> 
                        <?php
                        if($_POST['rl']){
                        echo "<div class='m103'><b>Roll No.:</b></div><div class='rollno'>".$_POST['rl'] ."</div>";
                        }
                        else{
                            echo "";
                        }
                        ?>
                    </div>
                </div>
        </main>
        <script src="counter.js">hello</script>
    </body>
</html>
