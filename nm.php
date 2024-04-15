<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Numerical Method</title>
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
        <h2>Syllabus Of Numerical Method</h2>
            <p><b>Roots of Equations:</b>Bisections Method, False Position Method, Newton's Raphson Method, Rate of convergence of Newton's Method.<br><br>
           <b>Interpolation and Extrapolation:</b> Finite Differences, The operator E, Newton's Forward and Backward Differences, Newton's dividend differences formulae, <br>Lagrange's Interpolation formula for unequal INtervals, Gauss's Interpolation formula, Starling formula, Bessel's formula, Laplace Everett formula.<br><br>
           <b>Numerical Differentiation Numerical Integration:</b> Introduction, direct methods, maxima and minima of a tabulated function, General Quadratic formula, Trapezoidal rule, Simpson's One third rule, Simpson's three-eight rule.<br><br>
           <b>Solution of Linear Equation:</b> Gauss's Elimination method and Gauss's Siedel iterative method.<br><br>
           <b>Solution of Differential Equations:</b> Euler's method, Picard method, Fourth-order Ranga-Kutta method.</p><br>
        <!--<div id="download">
            <h2>Download Notes of HTML</h2>
            <table border="2";>
                <tr class="book">
                    <th>Units</th>
                    <th>Download</th>
                </tr>
                <tr class="notes">
                    <td>Unit-1</td>
                    <td><a href="https://drive.google.com/uc?export=download&id=1Sj8F0p3kL1YPkekjsDgYWmNp_Y8azgur">Click Here</a></td>
                </tr>                             
            </table>
        </div> 
        <div class="download">
            <h2>Download Book of Html</h2>
            <table border="2">
                <tr class="book">
                  <th>Html Books</th>
                  <th>Writter name</th>
                  <th>Download</th>
                </tr>
                <tr>
                   <td>Beginner’s Guide to HTML</td>
                   <td>Michael Gabriel</td>
                   <td><a href="https://drive.google.com/uc?export=download&id=1GhHOJd6ZLtDUyH63PRG4AZVYYTU4jcWi" download>Click Here</td>
                </tr>
                <tr>
                   <td>HTML & CSS: The Complete Reference, Fifth Edition</td>
                   <td>Thomas A. Powell</td>
                   <td><a href="https://drive.google.com/uc?export=download&id=11ybDwogu5q4lfoG3-OYxpWU4K_FpMGyD" download>Click Here</td>
                </tr>
            </table><br><br>
         </div>-->
         <div class="imp">
             <h2>Download the formulae of Nm</h2>
             <center><a href="https://drive.google.com/file/d/1Hkp-rH3vTOxcpPg5XEmJMsc6SdqT0RUB/view?usp=drive_link" download><button class="down">Download here</button></a></center><br>
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
