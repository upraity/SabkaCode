<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Html</title>
    <style>
        /* body {
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
        } */

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
<!--
    <header>
        <!--<img src="1.png" alt="SabkaCode Logo">--***
        <h1>SabkaCode</h1>
        <p>with coding</p>
        <!-- Placeholder for logo image --****
        
    </header>

    <nav>
        <a href="https://dj.000.pe">Home</a>
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
                <a href="https://dj.000.pe/os">OS</a><br>
                <a href="https://dj.000.pe/coa">COA</a><br>
                <a href="https://dj.000.pe/dbms">DBMS</a><br>
                <a href="https://dj.000.pe/stats">Stats</a><br>
                <a href="php">PHP</a><br>                
                <a href="java">JAVA</a><br>
                <a href="ai">AI</a><br>
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
        </div>--****
        <div class="dropdown">
            <a href="#">Resources</a>
            <div class="dropdown-content">
                <a href="#">Result</a><br>
                <a href="https://dj.000.pe/admitcard">Admitcard</a><br>
                <a href="https://dj.000.pe/frontpage.php">Front Page</a><br>
                <a href="p">Previous Papers</a>
            </div>
        </div>
        <a href="contact">Contact Us</a>
    </nav>-->
    <main><center><span id="pageCount"><span></center>
        <h2>Syllabus Of Html</h2>
             <p><b>Basics of INternet and Web:</b> The Basics of internet, World Wide Web, Web page, Home page, Web site, Static, Dynamic and Active webpage. Overview of protocols, Simple Mail Transfer Protocol, Gopher, Telnet, Emails, TFTP, Simple Network Management Protocol, Hyper Text Transfer Protocol. Client Server Computing Concepts. Web Client and Web Server, Web Browser, Browser e.g., Netscape Navigator, Internet Explorer, Morzilla Firefox, Client Side Scripting Language, VB Script and Java Script, Active X Control and Plug-ins, Web Server Architecture, IMage maps, CGI, API Web database connectivity, DBC, ODBC.<br><br><b>Dynamic Html: </b> Dynamic Html, Cocument Object Model, Features, DHTML, CSSP(Cascading Style Sheet Positioning) and JSSS(Java Script assisted Style Sheet), Layers of Netscape, The ID Attribute, DHTML Events.<br><br><b>Introduction to HTML: </b> Editors, Basics, Elements, Attribute, Heading, Paragraphs, Styles, Formatting, Quotaions, Comments, CSS Links, Images, Tables, Lists, Blocks, Classess, ID, Frames, File Paths Head, Layout , Computer Code, Entities, Symbols, Char set, Color and Background  of Web Pages, Hypertext, Hyperlink, and Hypermedia, Links, Anchors and URLs, Links to External Documents, Differnet Section of a page and graphics, Footnote, and E-malling, Creating Table, Frame, Form and Style Sheet.<br><br><b>CSS:</b> Introduction, Syntax, Color, Background, Border, Margins, Padding, Height/Width, Box Model, Outline, Text, Fonts, Icons, Links, Lists, Tables, Display, Max, Width, Position, Overflow, Float, Inline, Block, Align, Combinators, Pseudo Class, Pseudo Elements, Opacity, Navigation Bar, Dropdowns, Image Gallery, Image Sprites, Attr Selectors, Forms, Counters, WEbsite Layout, Units, Specificity.<br><br><b>XML:</b> Introduction, Tree, Synatx, Elements, Attributes, Namespaces, Display, HTTp request, Parser, DOM, XPath, XSLT, XQuerry, XLink, Validator, DTD, Schema, Server.</p><br>
        <div id="download">
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
         </div>
         <div class="imp">
             <h2>Download the practical file of Html.</h2>
             <center><a href="htmlfile.pdf" download><button class="down">Download here</button></a></center><br>
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
