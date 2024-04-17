<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3498db">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Data Base Management System</title>
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
        <h2>Syllabus Of Dbms</h2>
            <p><b>Introduction:</b> Database system concepts, Database Users, and Architecture Introduction to Database System with example, Introduction to Traditional File
            Oriented System, Characteristics of the Database Approach, Components of Database System, Database users, Advantages and disadvantages of using a DBMS, structure of DBMS,
            Database Schemas and Instances, DBMS Architecture, Data Independence, Database Languages and Interfaces, Classification of Database Management Systems.<br><br>
            <b>Data Modeling & Relational:</b> Database Management System Data Modeling using the Entity Relationship Model: Entity Types, Entity Sets, Attributes, Key 
            Relationships, Relationship Types, Role and Structural, Constraints, weak Entity Types, ER Diagrams, Naming Conventions, Design issues.<br><br>
            <b>The Relational Data model:</b> Relational Constraints and the Relational Algebra: Relational Model Concepts, Relational Constraints and Relational database Schemas
            update Operations and Dealing with Constraint Violations, Basic Relational Algebra Operations, Additional Relational Operations, and Examples ofQueries in Relational
            Algebra.<br><br>
            <b>SQL:</b> SQL. and Database Design Theory and Methodology Structured Query Language The Relational Database Standard: Data Definition, Constraints and schema Changes
            in SQL, Types of SQL Commands, SQL, Operators and their Procedure, insert, Delete, and Update Statements in SQL. Queries and Sub Queries, Aggregate Functions, Join
            Unions, Intersection, Minus Views (Virtual Tables) in SQL. Functional Dependencies and Normalization of Relational Database: Informal Design Guidelines for Relation
            Schemas. Functional Dependencies, Armstrong Rules, Closure of Attributes, Normal Forms Based on Primary Keys, General Definitions of Second and Third Normal Forms, Boyce
            Codd Normal Form.<br><br>
            <b>Transaction Processing:</b> Concurrency Control and Distributed Database Transaction Processing Concepts: Introduction to Transaction Processing Transaction and
            system concepts, Desirable Properties of Transactions, Concurrency Control Techniques, Locking Techniques for concurrency Control, Concurrency Control Based on Timestamp
            Ordering.</p><br>
        <div id="download">
            <h2>Download Notes of Dbms</h2>
            <table border="2";>
                <tr class="book">
                    <th>Units</th>
                    <th>Download</th>
                    <th>View</th>
                </tr>
                <tr class="notes">
                    <td>Unit-1</td>
                    <td><a href="https://drive.google.com/uc?export=download&id=1tKfU1IF7RwggPENLtwz2a_PyfYfKL-ZX">Click Here</td>
                    <td><a href="https://drive.google.com/file/d/1tKfU1IF7RwggPENLtwz2a_PyfYfKL-ZX/view?usp=drivesdk">View</a></td>
                </tr>  
                <tr class="notes">
                    <td>Unit-2</td>
                    <td><a href="https://drive.google.com/uc?export=download&id=1AKQjV03Tl8eoP4TZArjGaD0nJLjCQ6Ox">Click Here</td>
                    <td><a href="https://drive.google.com/file/d/1AKQjV03Tl8eoP4TZArjGaD0nJLjCQ6Ox/view?usp=sharing">View</td>
                </tr>                             
            </table>
        </div> 
        <div class="download">
            <h2>Download Book of Dbms</h2>
            <table border="2">
                <tr class="book">
                  <th>Html Books</th>
                  <th>Writter name</th>
                  <th>Download</th>
                </tr>
            </table><br><br>
         </div>
         <div class="imp">
             <h2>Some important function in SQL</h2>
             <center><a href="https://drive.google.com/uc?export=download&id=127g3CsmBPmNKNe8LNTL3lJFAlFVQ_cGr" download><button class="down">Download here</button></a></center><br>
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
