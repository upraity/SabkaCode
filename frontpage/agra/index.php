<?php
    error_reporting(0);
    include("admitcard/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Front Page</title>
    <style>
       
        main {
            padding: 20px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .card:hover {
            background-color: #3498db;
            color: #fff;
        }

        footer {
            background-color: #34495e;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        a{
            text-decoration:none;
            color:black;
        }
        .goto{
            background-color: #4caf50;
            color: #fff;
            padding: 15px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 19px;
            transition: background-color 0.3s ease;
            position: fixed;
            bottom: 60px;
            right: 20px;
            height:53px;
        }
         .goto:hover{
            background-color:#3498db;
        }
         .whats{
            background-color: #4caf50;
            color: #fff;
            padding: 12px 13.5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 30px;
            transition: background-color 0.3s ease;
            position: fixed;
            bottom: 120px;
            right: 20px;
            height:57px;

        }
         .whats:hover{
            background-color:#3498db;
        }
        @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    table {
      width: 100%;
      border-collapse: collapse;
      animation: fadeIn 2s ease; /* Apply the animation to the table */
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    main h2{
        color:#3498db;
    } 
    .program p {
        text-indent:center;
    }
    .p{
    font-weight: bold;
    color: red;
    font-family: Monospace, Verdana, Geneva, Tahoma, sans-serif;
    }
    .down {
    width: 30%;
    height: 50px;
    background-color: #3498db;
    border-radius: 10px;
    border: none;
    font-size: 18px;
    color:white;
    font-weight:bold;
    }
    #pageCount{
        color:transparent;
    }
    </style>
</head>
<body>
    <?php
        include 'nav.php';
    ?>

    <main><center><span id="pageCount"><span></center>
        <div class="main">
<form method="POST" action="front.php" enctype="multipart/form-data">
<table><center><h1>Fill Carefully<hr></h1></center><br>
<tr><td>Your Name:</td><td><input type="text" name="name" required></td></tr>
<tr><td>Father Name:</td><td><input type="text" name="dn" required></td></tr>
<tr><td>Teacher Name:</td><td><input type="text" name="teachername" required></td></tr>
<tr><td>Class - Sem:</td><td><input type="text" name="topic" placeholder="like: Ba 1st sem"required></td></tr>
<tr><td>Subject:</td><td><input type="text" name="sub" required></td></tr>
<!--<tr><td>College Name:</td><td><input type="text" name="cn"></td></tr>-->
<tr><td>Session:</td><td><input type="text" name="s" required></td></tr>
<!--<tr><td>Semester & Department:</td><td><input type="text" name="sd" required></td></tr>-->
<tr><td>Section:</td><td><input type="text" name="rl" ></td></tr>
<tr><td>Clg:</td><td><input type="text" value="Agra College Agra" readonly></td></tr>
<!--<tr><td>Choose:</td>
<td>Assignment: <input type="radio" name="file" value="Assignment" required><br>
Practical File: <input type="radio" name="file" value="Practical File" required></td></tr> -->
</table><br>
<center><input type="submit"  value="Submit" name='click'></center>
</form>
</div>
    </main><br><br><br><br><br><br><br><br>
    
    <button class="whats" onclick="whats()"><i class="fab fa-whatsapp whatsapp-icon"></i></button>
    <button class="goto" onclick="goto()">Go</button>

    <footer>
        <!-- Add footer content, copyright information, etc. -->
        &copy; 2024 SabkaCode. All rights reserved.
    </footer>
    <script src="counter.js">hello</script>
<script>
    function goto(){
        window.location.href = "https://dj.000.pe/old";
    }
    function whats(){
        window.location.href = "https://whatsapp.com/channel/0029VaElLRrAYlUMk0qIHX1G";
    }
</script>
</body>
</html>
