<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Mathematics</title>
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
        <h2>Syllabus Of Mathematics</h2>
            <p>
             <b>Determinants:</b> Definition, Minors, Cofactors, Properties of Determinants MATRICES: Definition, Types of Matrices, Addition, Subtraction, Scalar Multiplication
             and Multiplication of Matrices, Adjoint, Inverse, Cramers Rule, Rank of Matrix Dependence of Vectors, Eigen Vectors of a Matrix, Caley-Hamilton Theorem (without proof).
             <br><bR>
             <b>LIMITS & CONTINUITY:</b> Limit at a Point, Properties of Limit, Computation of Limits of Various Types of Functions, Continuity at a Point, Continuity Over an
             Interval Intermediate Value Theorem, Type of Discontinuities.<br><br>
             <b>Differentiation:</b> Derivation, Derivatives of Sum, Differences, Product & Quotients, Chain Rule, Derivatives of Composite Functions, Logarithmic Differentiation
             Rolle's Theorem, Mean Value Theorem, Expansion of Functions (Maclaurin's & Taylor's), Indeterminate Forms, L' Hospitals Rule, Maxima & Minima, Curve Tracing, Successive
             Differentiation & Liebnitz Theorem.<br><br>
             <b>INTEGRATION:</b> Integral as Limit of Sum, Fundamental Theorem of Calculus( without proof.), Indefinite Integrals, Methods of Integration Substitution, By Parts
             Partial Fractions, Reduction Formulae for Trigonometric Functions, Gamma and Beta Functions(definition).<br><bR>
             <b>VECTOR ALGEBRA:</b> Definition of a vector in 2 and 3 Dimensions; Double and Triple Scalar and Vector Product and physical interpretation of area and volume.<br>
            </p><br><br>
        <!--<div class="download">
            <h2>Download Book of Mathematics</h2>
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
         </div>
         <div class="imp">
             <h2>Download the Formulae of Mathematics.</h2>
             <center><a href="" download><button class="down">Download here</button></a></center><br>
         </div>-->
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
