<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Nav Bar</title>
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

        /* nav {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 0.5em;
        } */

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
       /* a{
            text-decoration:none;
            color:black;
        }*/
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

    /******/
     nav {
	//background-color: #E64A19;
    background-color: #2c3e50;
    color: #fff;
    text-align: center;
    padding: 0.5em;
}
 
nav ul {
	padding: 0;
    margin: 0;
	list-style: none;
	position: relative;
	}
	
nav ul li {
	display:inline-block;
	background-color: #2c3e50;
	}
 
nav a {
	display:block;
	padding:0 8px;	
	color:#FFF;
	font-size:17px;
	line-height: 35px;
	text-decoration:none;
}
 
nav a:hover { 
	background-color: rgba(0, 0, 0, 0.4);
    color: #fff;
}
/* Fisrt level Dropdown */
nav ul ul li {
	width:150px;
	float:none;
	display:list-item;
	position: relative;
}
 
/* Second, Third and more levels	*/
nav ul ul ul li {
	position: relative;
	//top:-60px; 
	//left:140px;
}
li > a:after { content:  ' +'; }
li > a:only-child:after { content: ''; }

/* Hide Dropdowns by Default */
nav ul ul {
	display: none;
	position: absolute; 
	top: 45px; /* the height of the main nav */
}
	
/* Display Dropdowns on Hover */
nav ul li:hover > ul {
	display:inherit;
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
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#">Services</a>
            <ul>
                <!--<li><a href="">Result</a></li>-->
                <li><a href="frontpage.php">FrontPage</a></li>
                <li><a href="admitcard">AdmitCard</a></li>
                <li>
                    <a href="#">Projects</a>
                        <ul>
                            <li><a href="#">qUizZY lOoP</a></li>
                            <li><a href="#">Add Data</a></li>
                        </ul>
                </li>
                <li>
                    <a href="#">All Course</a>
                        <ul>
                            <li><a href="c.php">C</a></li>
                            <li><a href="html.php">Html</a></li>
                            <li><a href="maths.php">Maths</a></li>
                            <li><a href="de.php">DE</a></li>
                            <li><a href="cpp.php">Cpp</a></li>
                            <li><a href="dsa.php">DSA</a></li>
                            <li><a href="nm.php">NM</a></li>
                            <li><a href="os.php">OS</a></li>
                            <li><a href="coa.php">COA</a></li>
                            <li><a href="dbms.php">DBMS</a></li>
                            <li><a href="stats.php">Stats</a></li>
                            <li><a href="php.php">PHP</a></li>           
                            <li><a href="java.php">JAVA</a></li>
                            <li><a href="ai.php">AI</a></li>
                        </ul>
                </li>
                <li><a href="p.php">Previous Paper</a></li>
            </ul>        
            </li>
            <li><a href="">Login</a></li>
            <li><a href="">Register</a></li>
            <li><a href="#">More</a>
                <ul>
                    <li><a href="#">Account</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    
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
