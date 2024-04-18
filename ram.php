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

        header img {
            height: 10%;
            width: 10%;
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
            background-color: rgba(0, 0, 0, 0.4);
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #2c3e50;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            width: 100%;
            left: 0;
            top: 100%;
        }

        .dropdown-content-1 {
            display: none;
            position: absolute;
            background-color: #2c3e50;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            list-style-type: none;
            margin: 0;
            padding: 0;
            top: 0;
            left: 100%;
        }

        .dropdown:hover .dropdown-content-1 {
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

        a {
            text-decoration: none;
            color: black;
        }

        .goto {
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
            height: 53px;
        }

        .goto:hover {
            background-color: #3498db;
        }

        .whats {
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
            height: 57px;
        }

        .whats:hover {
            background-color: #3498db;
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
            animation: fadeIn 2s ease;
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

        main h2 {
            color: #3498db;
        }

        .program p {
            text-indent: center;
        }

        .p {
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
            color: white;
            font-weight: bold;
        }

        #pageCount {
            color: transparent;
        }
    </style>
</head>

<body>
    <header>
        <h1>SabkaCode</h1>
        <p>with coding</p>
    </header>

    <nav>
        <a href="https://dj.000.pe">Home</a>
        <div class="dropdown">
            <a href="#">Services</a>
            <div class="dropdown-content">
                <li><a href="#">Projects</a></li>
                <li><a href="#">All Course</a>
                    <ul class="dropdown-content-1">
                        <li class='hi'><a href="#">C</a></li>
                        <li class='hi'><a href="#">Cpp</a></li>
                        <li class='hi'><a href="#">DSA</a></li>
                        <li class='hi'><a href="#">HTML</a></li>
                        <li class='hi'><a href="#">Maths</a></li>
                    </ul>
                </li>
                <li><a href="#">AdmitCard</a></li>
                <li><a href="#">Front Page</a></li>
                <li><a href="#">Previous Paper</a></li>
            </div>
        </div>
        <a href="#">Login</a>
        <a href="#">Register</a>
        <a href="#">Logout</a>
        <div class="dropdown">
            <a href="#">More</a>
            <div class="dropdown-content">
                <li><a href="#">Account</a></li>
            </div>
        </div>
        <a href="contact">Contact Us</a>
    </nav>

    <button class="whats" onclick="whats()"><i class="fab fa-whatsapp whatsapp-icon"></i></button>
    <button class="goto" onclick="goto()">Go</button>

    <footer>
        © 2024 SabkaCode. All rights reserved.
    </footer>

    <script src="counter.js"></script>
    <script>
        function goto() {
            window.location.href = "https://dj.000.pe/old";
        }
        function whats() {
            window.location.href = "https://whatsapp.com/channel/0029VaElLRrAYlUMk0qIHX1G";
        }
    </script>
</body>
</html>
