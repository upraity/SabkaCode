<?php
/*session_start();
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){
    header("location: https://dj.000.pe/profile.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="UpCtnERv_OdHBR4c5vAHfn8VcnpYshlSEutWzbxSKwY" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>SabkaCode - with coding</title>
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
        #pageCount{
        color:transparent;
    }
    </style>
    <script language="JavaScript" type="text/javascript">
//Message to display whenever right click on website
var message = "Sorry, Right Click have been disabled."; 
function click(e) {
if (document.all) {
if (event.button == 2 || event.button == 3) {
alert(message);
return false;
}
}
else {
if (e.button == 2 || e.button == 3) {
e.preventDefault();
e.stopPropagation();
alert(message);
return false;
}
}
}
if (document.all) {
document.onmousedown = click;
}
else {
document.onclick = click;
}
document.oncontextmenu = function () {
return false;
};
</script>
</head>
<body>
        <?php
           /*if(isset($_SESSION['loggedin'])){
                echo '<a href="https://dj.000.pe/logout.php">Logout</a>';
            }
            else{
                echo '<a href="https://dj.000.pe/login.php">Login</a>';
                echo '<a href="https://dj.000.pe/signin.php">Sign up</a>';
            }*/
            include 'nav.php';
        ?>
    <main><center><span id="pageCount"><span></center>
        <!-- Card grid for different sections -->
        <h2>Welcome to SabkaCode!</h2>
        <p>Welcome to SabkaCode, your one-stop destination for all things programming. Here you can find syllabus, previous paper, notes, code and related to various programming language and topics.</p><br>
        <h2>Explore SabkaCode Sections</h2>
        <div class="card-container">
            <!-- Card 1 - Home -->
            <div class="card">
                <h3>Home</h3>
                <p>Discover the latest updates and announcements.</p>
            </div>
            <!-- Card 2 - Notes -->
            <div class="card">
                <h3>Notes</h3>
                <p>Access comprehensive study materials and notes. Find detailed and easy to understand notes on different programming languages and concepts.
                </p>
            </div>
            <!-- Card 3 - Codes -->
            <div class="card">
                <h3>Codes</h3>
                <p>Explore coding examples and solutions. Explore a vast collection of code samples and examples for various programming tasks.</p>
            </div>
            <!-- Card 4 - Resources -->
            <div class="card">
                <h3>Resources</h3>
                <p>Find previous papers and detailed syllabus information. Create a front page of assignment & practical file. And you see your result here.</p>
            </div>
            <!--Card 5 - Previous Paper-->
            <a href="https://dj.000.pe/p.php">
                <div class="card">
                    <h3>Previous Paper</h3>
                    <p>Access previous paper for coding exams and assessments.</p><br>
                </div>
            </a>
            <a href="https://dj.000.pe/jee.php">
            <!-- Card 6 - Jee -->
            <div class="card">
                <h3>Jee Previous Paper</h3>
                <p>Find Jee previous papers and download it.</p>
            </div>
            </a>
        </div>
    </main><br><br><br><br><br><br><br><br><br><br>
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
