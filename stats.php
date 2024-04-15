<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Statistics</title>
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
            border-radius: 5px;<
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
            bottom: 60px;
            right: 20px;
            height:55px;

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
        <h2>Syllabus Of Statics</h2>
             <p>Classification of data, Tabulation of data, preparation of frequency distribution, presentation of data through histogram, frequency polygon curve.<br><br>
            <b>Measures of Central Tendency:</b> Computer of Arithemetic Mean, Median and Mode for ungrouped data grouped data, verification of median through ogives.<br><br>
            <b>Measures of Dispersion:</b> Computation of Range, Quartile deviation, mean deviation and standard deviation, coefficient of variation.(Numerical Application Only).<br><br>
            Concept of skewness, Karl Pearson's and Bowley's Cofficients of skewness (Numerical Application only).<br><br>
            Meaning of Correlation, Type of correlation, Correlation Coefficients, Karl Pearson, Spearman's rank correlation coefficient.(Numerical Application Only).<p><br>
        <!--<div id="download">
            <h2>Download Notes of Statics</h2>
            <table border="2";>
                <tr class="book">
                    <th>Units</th>
                    <th>Download</th>
                </tr>
                <tr class="notes">
                    <td>Unit-1</td>
                    <td><a href="https://drive.google.com/file/d/1Sgg962p_rnjT30k2d3_us78hTaUs2dvU/view?usp=drivesdk download">Click Here</a></td>
                </tr>                             
            </table>
        </div>-->
        <div class="download">
            <h2>Download Book of Statistics</h2>
            <table border="2">
                <tr class="book">
                  <th>Stats Books</th>
                  <th>Writter name</th>
                  <th>Download</th>
                </tr>
            </table><br><br>
         </div>
         <div class="imp">
             <h2>Download the formulae of Stats</h2>
             <center><a href="https://drive.google.com/file/d/1JF_YT624n3rm3olUY-zPCcv4me94HvKp/view?usp=drivesdk" download><button class="down">Download here</button></a></center><br>
         </div>
     </main><br><br><br><br><br><br><br><br>
    
    <button class="whats" onclick="whats()"><i class="fab fa-whatsapp whatsapp-icon"></i></button>
    <!--<button class="goto" onclick="goto()">Go</button>-->;

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
