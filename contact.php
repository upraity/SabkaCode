<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Contact Us</title>
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
    border-radius: 10px;
    border: none;
    font-size: 18px;
    color:white;
    font-weight:bold;
    }
    .form{
    width:100%;
    display:flex;
    align:items:center;
    justify-content:center;
    }

    form{
    background:#fff;
    display:flex;
    flex-direction:column; 
    width:90%;
    padding:4vw 4vw;
    max-width:480px;
    height:600px;
    border-radius:10px;
    }
                  
    form input, form textarea{
    border:0;
    margin:10px 0;                  
    padding:20px;
    outline:none;
    background:#f5f5f5;
    font-size:16px;
    border-radius:25px;
    }

    form button{
    padding:20px;
    background:#ff5361;
    color: #fff;
    font-size:15px;
    border:0;
    outline:none;
    cursor:pointer;  
    width:150px;
    margin:10px auto -50px;
    border-radius:30px;
    }     

    .home{
    margin:10px;
    padding:15px 15px;
    border:2px solid black;
    }

    .dj a{
    color:red;
    text-align:center;
    text-decoration:none;
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
        <div class="form">
            <form id="my-form" action = "https://formspree.io/f/moqzzyvq" method="POST">
                <h2> Get In Touch</h2>
                <input type="text" id="name" placeholder="Name"  name="name" required>
                <input type="tel" id="phone" placeholder="Phone No." name="phone" required>
                <input type="email" id="email" placeholder="Email Id" name="email" required>
                <textarea name="message" id="message" rows="8" placeholder="How can we help you?"></textarea>
                <p id="my-form-status"></p>
                <div class="g-recaptcha" data-sitekey="6LdB5jYnAAAAAMhb3o1PgXH5_hD8T-__rMDGmEaU"></div>
                <p><input type="checkbox" required> Click this </p>
                <button id="my-form-button" type="submit">SUBMIT</button>
                <br> 
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
