<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Operating System</title>
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
        <h2>Syllabus Of OS</h2>
             <p><b>Introduction:</b> What is an operating system, Simple Batch Systems, Multi, Programmed Batch System, Time. Sharing System, Personal. Computer systems, Parallel Systems, Distributed Systems, Real, Time Sysiems, Memory Organization: Fixed memory , variable memory. Memory Management: Background, Logical versus physical Address space, swapping. Contiguous allocation, paging, Segmentation Virtual memory: Denand Paging. Page Replacement, Page replacement Algorithms, Performance of Demand Paging, Allocation of Frames, thrashing.<br><BR>
             <b>Processes:</b> Process Con cept, Process Scheduling, operation on processes, CPU Scheduling: Basic Concepts, Scheduling Criteria, Scheduling Algorithms, Multiple,Processor Scheduling, Process Synchronization: Background, the critical, section problem, synchronization Hardware, Semaphores, Cassical Problems of synchronization. Deadlocks: system Model, Deadlock Characterization, Methods for Handling Deadlocks, Deadlock Prevention, Deadlock Avoidance, Deadlock Detection, Recovery from Deadlock. <br><BR>
             <b>Device Management:</b> Techniques for Device Management, Dedicated Devices, Shared Devices, Virtual Devices, Input or Output Devices. Storage Devices, Buffering Secondary Storage Structure: Disk Structure, Disk Scheduling, Disk Management, Swap, Space Management, Disk Reiability Information Management: Introduction, A simple file system General Model of a File system, Symbolic File System, Basic File System, Access Control Verification, Logical File System, Physical File System File Syster. Interface, File Concept,Access Methods, Directory Structure, Protection. Consistency Semantics File, System Implementation: File, System Structure. Allocation Methods, Free Space Management. <br><br>
             <b>Unix:</b> A Sample Login Session, Logging On, Using the on - line Man pages, Logging Off, Directory and File Structure, File Names. 
Directories, The dfProgram, Your Login Directory, Subdirectories, Specifying Files, Protecting Files and Directoreis, Text Editors, Files as Output and Log files, Logging Your Actions to a File, Comparing Files, Searching Through Files, The Systems and Dealing with Multiple Users.<br><bR>
<b>Windows:</b> Features of windows desktop, start menu, contro. Windows, panel, my computer, windows explorer, accessories, Managing Multipis managing arranging icons on the desktop, creating and managing folders. files and drivers, logging ofi and shutting down windows Control. Entertainment CD player, VD Player, media player, Sound recorder, volume control. <br><br></p><br>
        <div id="download">
            <h2>Download Notes of OS</h2>
            <table border="2";>
                <tr class="book">
                    <th>Units</th>
                    <th>Download</th>
                </tr>                        
            </table>
        </div> 
        <div class="download">
            <h2>Download Book of OS</h2>
            <table border="2">
                <tr class="book">
                  <th>Html Books</th>
                  <th>Writter name</th>
                  <th>Download</th>
                </tr>
            </table><br><br>
         </div>
         <div class="imp">
             <h2>Download the IMPORTANT question of OS with Solutions.</h2>
             <center><a href="/imp/os/n.pdf" download><button class="down">Download here</button></a></center><br>
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
