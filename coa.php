<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Computer Organization and Architecture</title>
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

    <main><center><span id="pageCount"><span></center>
        <h2>Syllabus Of COA</h2>
            <p><b>Computer Evolution:</b> Briefhistory ofComputer, Classification of computer, Structure of a computer system, Arithmetic Logic Unit, Control Unit, Von Neumann Architecture, Integer Addition and Subtraction, Floating point representation, Signed numbers, Binary Arithmetic 1's and 2's Complements, Booths Algorithm, Hardware Implementation, IEEE Standards, Floating Point Arithmetic, The accumulator, shifts, carry and overflow instruction Characteristics, CPU with single BUS, Types of operands, Types of operations, Addressing Modes, instruction Formats. <br><br>
<b>Processor Organization:</b> Parallelism and Computer arithmetic, Computer arithmetic associatively, Floating Point in the 8086, Programmers Model of 8086, Register Organization 8086 Registers, Instruction Cycles, Addressing Modes, Micro operations, The instruction cycle, Control of the CPU, Functional Requirements, Single, Two, three bus structure Execution of a complete instruction, Branching, Sequencing of Control Signals, Hardwired Control Unit, Micro- Programmed Control. <br><br>
<b>Memory Organization:</b> Characteristics ofMemory Systems, Main Memory, Types of memory, Memory system considerations, Design of memory subsystem using Static, Dynamic Memory Chips, Memory interleaving High Speed Memories: Cache Memory, Structure of cache and main memory, Elements of Cache Design, Mapping functions, Replacement algorithms, External Memory, Virtual memory. <br><br>
<b>I/O Organization:</b> Input/ Output Module: Need, Techniques, Interrupt Driven I/O, Basic concepts of an Interrupt, Response of CPU to an Interrupt, Design issues, Priorities, interrupt handling, Types of interrupts. Data transfer Techniques, Data memory Acces, Buses, Types of buses., /O interface, synchronous and Asynchronous Data Transfer, serial l/O Input Devices, Output Devices, Multi-programming vs. Multiprocessing, Comparison between closely coupled and closely coupled multiprocessor.<br><br>
<b>Micro-programming:</b> Basic Principles, Features, Hardwired VS. MicrO programmed computers, Applications and advantages of micro programming, Limitations of microprogramming Computer Clock Micro instructions and its Contro! Path. Microcode. Machine instruction. Paralie! ganization, Instruction Set Architecture (1SA), RISC and CISC. Characteristics of CISC. Characteristics ofRISC. RISC versus CISC. Vector Processing requirements and characteristics ofvector processing.</p><br>
        <div id="download">
            <h2>Download Notes of COA</h2>
            <table border="2";>
                <tr class="book">
                    <th>Download</th>
                </tr>
                <tr class="notes">
                    <td><a href="https://drive.google.com/uc?export=download&id=1xmPkYERbuzKHoNrqGKakN6OmYKStBhOp">Click Here</a></td>
                </tr>                             
            </table>
        </div> 
        <div class="download">
            <h2>Download Book of COA</h2>
            <table border="2">
                <tr class="book">
                  <th>Html Books</th>
                  <th>Writter name</th>
                  <th>Download</th>
                </tr>
            </table><br><br>
         </div>
         <!--<div class="imp">
             <h2>Download the practical file of COA</h2>
             <center><a href="htmlfile.pdf" download><button class="down">Download here</button></a></center><br>
         </div>-->
    </main><br><br><br><br><br><br><br><br>
    
    <button class="whats" onclick="whats()"><i class="fab fa-whatsapp whatsapp-icon"></i></button>
    <button class="goto" onclick="goto()">Go</button>
    <script src="counter.js">hello</script>
    <footer>
        <!-- Add footer content, copyright information, etc. -->
        &copy; 2024 SabkaCode. All rights reserved.
    </footer>
    
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
