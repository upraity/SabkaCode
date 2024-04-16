<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2c3e50">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>DSA</title>
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
        <h2>Syllabus Of DSA</h2>
             <p><b>Classification of Data Structure:</b> Operations on Data Structure, Address Calculating, Application of Array, Limitation of Array, Array as parameters, Sparse Matrix.<br><br><b>Continuous Implementation(Stack):</b> Array Representation, Operations of Stacks, Push & Pop, Applications of Stack, Conversation of Infix to Prefix and Post Expressions, Evaluation of Postfix expression using stack, <b>Recursion:</b>Recursive Defination and process, Principles of Recursion, Tower of Hanoi problem, Recursion Vs Iteration Continuous, <b>Implementation(Queue):</b> Array representation and implementation of queues, Operation on Queue: Create, Add, Delete, Full and empty queue, circular queue, De-queue and Priority queue.<br><br><b>Non Continuous Implementation Link Lists:</b> Linear list concept, Linked List Terminology representation of Linked List in Memory, Type of Linked List, Single Linked List, Doubly Linked List, Single Circular List, Circular Doubly Linked List, Operation on Linked List: Create list insert node(empty list beginning, middle, end), Delete node(first, general case). Traversing node, Searching node, Print list, Count nodes, Sort lists.<br><br><b>Tree:</b> Introduction to tree & it Terminology binary trees, Type of Binary tree, representation of Binary tree, Traversals(inorder, preorder, postorder), Tree Expression, Binary Search Tree, Insertion and Deletion in BST. <br><br><b>Sorting & Searching Techniques:</b> Bubble Sort, Selection Sort, Insertion Sort, Quick Sort, Merge Sort, Sequential Sort, Binary Search.</p><br>
        <div id="download">
            <h2>Download Notes of DSA</h2>
            <table border="2";>
                <tr class="book">
                    <th>Topics</th>
                    <th>Download</th>
                </tr>
                 <tr>
                                    <td>Introduction</td>
                                    <td><a href="https://drive.google.com/uc?export=download&id=14vRIOQr7uiPZhBUHxkuJAxRLxuMxLh3m">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>Classification of Data Structure</td>
                                    <td><a href="https://drive.google.com/uc?export=download&id=14s9AIt6k1B-ZeAgMGceGtzCXrWUQvKfV">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>Operation on Data Structure</td>
                                    <td><a href="https://drive.google.com/uc?export=download&id=155uc3zqibSS8H_PRWUKKe6FX0yir_Apy">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>Address Calculating</td>
                                    <td><a href="https://drive.google.com/uc?export=download&id=14pTqFpl-WoSxCcKiu14unCVj-1DEsg6R">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>Application of Array</td>
                                    <td><a href="https://drive.google.com/uc?export=download&id=14ZKwk6xwRUccZ0S934q_NLtKalIvP3VT">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>Limitation of Array</td>
                                    <td><a href="https://drive.google.com/uc?export=download&id=155XaO9pwuiC-3X6sc0_8mHy2fFIW1vzQ">Click Here</a></td>
                                </tr>                                      
            </table>
        </div> 
        <div class="download">
            <h2>Download Book of DSA</h2>
            <table border="2">
                <tr class="book">
                  <th>DSA Books</th>
                  <th>Writter name</th>
                  <th>Download</th>
                </tr>
            </table><br><br>
         </div>
         <div class="imp">
             <h2>Download the practical file of DSA.</h2>
             <center><a href="https://drive.google.com/uc?export=download&id=1xdFVw71WASItcnrBkD9ihOniDaYcmpE4" download><button class="down">Download here</button></a></center><br>
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
