<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: https://dj.000.pe/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        header img{
            height:10%;
            width:10%;
        }

        nav {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 0.5em;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            display: inline-block;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        nav .dropdown {
            display: inline-block;
        }

        nav .dropdown-content {
            display: none;
            position: absolute;
            background-color: #2c3e50;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        nav .dropdown:hover .dropdown-content {
            display: block;
        }

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
    .profile-container {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 50px;
    }
.profile-picture img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 20px;
    }

    .profile-details {
    text-align: left;
    }

    h2 {
    margin-bottom: 10px;
    }

    p {
    margin-bottom: 5px;
    }
    </style>
</head>

<body>

    <header>
        <!--<img src="1.png" alt="SabkaCode Logo">-->
        <h1>SabkaCode</h1>
        <p>with coding</p>
        <!-- Placeholder for logo image -->
        
    </header>

    <nav>
        <a href="https://dj.000.pe/index.php">Home</a>
        <div class="dropdown">
            <a href="#">Notes&nbsp;</a>
            <div class="dropdown-content">
                <a href="https://dj.000.pe/c">C</a><br>
                <a href="https://dj.000.pe/html">Html</a><br>
                <a href="https://dj.000.pe/maths">Maths</a><br>
                <a href="https://dj.000.pe/de">DE</a><br>
                <a href="https://dj.000.pe/cpp">Cpp</a><bR>
                <a href="https://dj.000.pe/dsa">DSA</a><br>
                <a href="https://dj.000.pe/nm">NM</a><br>
                <a href="https://dj.000.pe/coa">COA</a><br>
                <a href="https://dj.000.pe/dbms">DBMS</a><br>
                <a href="https://dj.000.pe/stats">Stats</a>
            </div>
        </div>
        <!--<div class="dropdown">
            <a href="#">&nbsp;Codes</a>
            <div class="dropdown-content">
                <a href="#">C</a><br>
                <a href="#">Cpp</a><br>
                <a href="#">DSA</a><br>
                <a href="#">DBMS</a><br>
            </div>
        </div>-->
        <div class="dropdown">
            <a href="#">Resources</a>
            <div class="dropdown-content">
                <a href="#">Result</a><br>
                <a href="https://dj.000.pe/frontpage.php">Front Page</a><br>
                <a href="p">Previous Papers</a>
            </div>
        </div>
        <a href="contact">Contact Us</a>
    </nav>
    <main>
        <div class="profile-container">
            <div class="profile-picture">
                <img src="th.jpg" alt="Profile Picture">
            </div>
            <div class="profile-details">
                <h2>Name: <?php echo $_SESSION['username']; ?></h2>
                <p>Email: <?php echo $_SESSION['email']; ?></p>
                <p>Password: <?php echo $_SESSION['password']; ?></p>
            </div>
        </div>
    </main><br><br><br><br><br><br><br><br>
    
    <button class="whats" onclick="whats()"><i class="fab fa-whatsapp whatsapp-icon"></i></button>
    <button class="goto" onclick="goto()">Go</button>

    <footer>
        <!-- Add footer content, copyright information, etc. -->
        &copy; 2023 SabkaCode. All rights reserved.
    </footer>
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
