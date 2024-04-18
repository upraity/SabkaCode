<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel"stylesheet" href="syntex_highlight.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>C Language</title>
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
            bottom: 60px;
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
      animation: fadeIn 2s ease; /<span class="ll">*</span> Apply the animation to the table <span class="ll">*</span>/
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
    .header{
    color:#00ff00;
}

.return_type{
    color:#0000cc;
}

.ll{
    color:red;
}

.inner{
    color:#005ce6;
}

.header{
    color:#00cc00;
}
.num{
    color:#ff66b3;
}
#pageCount{
    color:transparent;
}
    </style>
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
</head>

<body>
    
    <?php
        include 'nav.php';
    ?>

    <main><center><span id="pageCount"><span></center>
        <h2>Syllabus of C Language</h2>
           <p><b>C basics:</b> C character set, Identifiers and keywords, Data type, Constants, Variables and Arrays, Declarations, Expressions statements, Symbolic constants, Compound statements, Arithmetic operators, Unary operators,<br> Relational and Logical operators, Assignment operators, Conditional operators, Bit operators.<br><br>
<b>Decision Control Structures:</b> If statement, If-else statement, Nested if(), If ladder, Switch, case statement, <b>Iterative statements:</b>For loop, While loop, Do-while loop, <b>Conditional statements:</b> Break, Continue, Storage <br>Classes, <b>Array:</b> Declaration of an Array, Initialization of Array, <b>Types of Array:</b> Single Dimension Array, Two, Dimensional Array, Address Calculation of an Element of a 2-D Array.<br><br>
<b>Functions:</b> Library Functions, User Defined Functions, Function Declaration, Prototype Declaration, <b>Types of Arguments:</b> Actual Arguments, Formal Arguments, Function Definition, Passing Arrays as Parameters, <br><b>Methods to Call a Function:</b> Call by Value, Call by Reference.<br><br>
<b>Pointers:</b> Declaration of Pointer Variables, Pointer Arithmetic, Returning Multiple Output Values through a Function Strings.<br><br>
<b>Structures</b>, Unions, Array of Structures, Enumerations, File Handling: Opening a file, Closing a file, File Opening Modes, Reading from and writing to a file, Copying Content of an existing file to another, Command line arguments, argc and argv Parameters, Pre-processor directives.<br>
        <div id="download">
            <h2>Download Notes of C Language</h2>
            <table border="2"; cellpadding="7"; cellspacing="2">
                <tr class="notes">
                    <th>Hand Written Notes</th>
                    <th><a href="https://drive.google.com/uc?export=download&id=15Jmp0sRe85FWQ5YCP2SUprbFV0W5ui-K">Download</a></th>
                </tr>      
            </table>  
            <br><br>
        </div>
        <div class="download">
            <h2>Download Book of C language</h2>
            <table>
                <tr class="book">
                  <th>C Books </th>
                  <th>Writter name</th>
                  <th>Download</th>
                </tr>
                <tr>
                   <td>Let Us C</td>
                   <td>Yashavant Kanetkar</td>
                   <td><a href="c.pdf" download>Click Here</td>
                </tr>
                <tr>
                   <td>C Programming</td>
                   <td>Harry. H. Chaudhary</td>
                   <td><a href="C.pdf" download>Click Here</td>
                </tr>
            </table><br><br>
         </div>
         <div class="imp">
             <h2>Download the practical file of C language.</h2>
             <center><a href="complete file.pdf" download><button class="down">Download here</button></a></center><br>
         </div>
         <div class="pro">
            <h2>Click Here to topic to see these program</h2>
                <div class="list">
                    <table border="2";>
                        <tr><td><a href="#30">!!Other Programs for Programmers!!</a></td></tr>
                        <tr><td><a href="#1">If Statement<a/></td></tr>
                        <tr><td><a href="#2">If-Else Statement</a></td></tr>
                        <tr><td><a href="#3">If Ladder</a></td></tr>
                        <tr><td><a href="#4">Nested If</a></td></tr>
                        <tr><td><a href="#5">For Loop</a></td></tr>
                        <tr><td><a href="#6">While Loop</a></td></tr>
                        <tr><td><a href="#7">Do-while Loop</a></td></tr>
                        <tr><td><a href="#8">Break Statement</a></td></tr>
                        <tr><td><a href="#9">Continue Statement</a></td></tr>
                        <tr><td><a href="#29">Size of () Operator</a></td></tr>
                        <tr><td><a href="#10">Switch Case</a></td></tr>
                        <tr><td><a href="#11">Auto Storage Class</a></td></tr>
                        <tr><td><a href="#12">Register Storage Class</a></td></tr>
                        <tr><td><a href="#13">Static Storage Class</a></td></tr>
                        <tr><td><a href="#14">Extern Storage Class</a></td></tr>
                        <tr><td><a href="#15">Array</a></td></tr>
                        <tr><td><a href="#16">Two Dimensional Array</a></td></tr>
                        <tr><td><a href="#17">Function</a></td></tr>
                        <tr><td><a href="#18">Function call by value</a></td></tr>
                        <tr><td><a href="#19">Function call by refrence</a></td></tr>
                        <tr><td><a href="#20">Recursion</a></td></tr>
                        <tr><td><a href="#21">Passing array in function</a></td></tr>
                        <tr><td><a href="#22">Using Gets</a></td></tr>
                        <tr><td><a href="#23">Pointer</a></td></tr>
                        <tr><td><a href="#24">Pointer Arithemetic</a></td></tr>
                        <tr><td><a href="#25">Structure</a></td></tr>
                        <tr><td><a href="#26">Array of Structure</a></td></tr>
                        <tr><td><a href="#27">File Handiling</a></td></tr>
                        <tr><td><a href="#28">File Handiling copy content to another file</a></td></tr> 
                    </table>
                </div>
          </div><br>
        <div class="program">
            <h2>Click Here to topic to see these program</h2>
              <div id="1">
              <pre><p><code>
<b>//If Statement</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"Enter a number: "</span><span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,&</span>n<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><</span>0</span><span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner">"Hello"</span><span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </code></p></pre>
        </div><hr>
              <div id="2">
              <pre><p>
<b>//If-Else Statement</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"Enter a number: "</span><span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,&</span>n<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">if</span><span class="ll">(</span>n<span class="ll">%</span>2<span class="ll">==</span>0</span><span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner">"Even number: "</span><span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     <span class="return_type">else</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner">"Odd number: "</span><span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="3">
              <pre><p>
<b>//If Ladder</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
    <span class="return_type">int</span> n<span class="ll">;</span>
    printf<span class="ll">(</span><span class="inner">"Enter a number b/w 1 to 7: "</span><span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,&</span>n<span class="ll">)</span><span class="ll">;</span>
    <span class="return_type">if</span><span class="ll">(</span>n<span class="ll">></span>1</span> <span class="ll">||</span> n<span class="ll"><</span>7</span><span class="ll">)</span>
    <span class="ll">{</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll">==</span>1<span class="ll">)</span>
           printf<span class="ll">(</span><span class="inner">"Monday"</span><span class="ll">)</span><span class="ll">;</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll">==</span>2<span class="ll">)</span>
           printf<span class="ll">(</span><span class="inner">"Tuesday"</span><span class="ll">)</span><span class="ll">;</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll">==</span>3<span class="ll">)</span>
           printf<span class="ll">(</span><span class="inner">"Wednesday"</span><span class="ll">)</span><span class="ll">;</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><span class="ll"><span class="ll">==</span></span></span>4<span class="ll">)</span>
           printf<span class="ll">(</span><span class="inner">"Thrusday"</span><span class="ll">)</span><span class="ll">;</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><span class="ll"><span class="ll">==</span></span></span>5<span class="ll">)</span>
           printf<span class="ll">(</span><span class="inner">"Friday"</span><span class="ll">)</span><span class="ll">;</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><span class="ll"><span class="ll">==</span></span></span>6<span class="ll">)</span>
           printf<span class="ll">(</span><span class="inner">"Saturday"</span><span class="ll">)</span><span class="ll">;</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><span class="ll"><span class="ll">==</span></span></span>7<span class="ll">)</span>
           printf<span class="ll">(</span><span class="inner">"Sunday"</span><span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
    <span class="return_type">if</span><span class="ll">(</span>n<span class="ll">></span>7</span> <span class="ll">||</span> n<span class="ll"><</span>1</span><span class="ll">)</span>
        printf<span class="ll">(</span><span class="inner">"Invalid no."</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span> 
              </p></pre></div><hr>
              <div id="4">
              <pre><p>
<b>//Nested If</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
    <span class="return_type">int</span> n<span class="ll">;</span>
    printf<span class="ll">(</span><span class="inner">"Enter a number: "</span><span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,&</span>n<span class="ll">)</span><span class="ll">;</span>
    <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><</span>5<span class="ll">)</span>
    <span class="ll">{</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><span class="ll"><span class="ll">==</span></span></span>1<span class="ll">)</span>
           printf<span class="ll">(</span><span class="inner">"The value is: %d"</span><span class="ll">,</span>n<span class="ll">)</span><span class="ll">;</span>
        <span class="return_type">else</span>
           printf<span class="ll">(</span><span class="inner">"This is greater than 1"</span><span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
    <span class="return_type">else</span>
       printf<span class="ll">(</span><span class="inner">"Value is greater than 5"</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="5">
              <pre><p>
<b>//For Loop</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> i<span class="ll">,</span>n<span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"Enter any number: "</span><span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,&</span>n<span class="ll">)</span><span class="ll">;</span>
     for<span class="ll">(</span>i=1<span class="ll">;</span>i<span class="ll"><=</span>n<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner"><span class="inner">"%d\n"</span></span>,i<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="6">
              <pre><p>
<b>// While Loop</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> i=1<span class="ll">;</span>
     while<span class="ll">(</span>i<span class="ll"><=</span>9<span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner"><span class="inner">"%d\n"</span></span>,i<span class="ll">)</span><span class="ll">;</span>
         i<span class="ll">++</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="7">
              <pre><p>
/<b>/ Do-While Loop</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">,</span>sum=0</span><span class="ll">;</span>
     do
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner">"Enter a number: "</span><span class="ll">)</span><span class="ll">;</span>
         scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,&</span>n<span class="ll">)</span><span class="ll">;</span>
        sum<span class="ll"><span class="ll">+=</span></span>n<span class="ll">;</span>
     <span class="ll">}</span>
     while<span class="ll">(</span>n<span class="ll">!=</span>0</span><span class="ll">)</span><span class="ll">;</span>
        printf<span class="ll">(</span><span class="inner">"Sum is: %d"</span><span class="ll">,</span>sum<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

              </p></pre></div><hr>
              <div id="8">
              <pre><p>
<b>// Break Statement</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">,</span>i<span class="ll">,</span>sum=0</span><span class="ll">;</span>
     for<span class="ll">(</span>i=0</span>;i<span class="ll"><=</span>9;i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner">"Enter a number: "</span><span class="ll">)</span><span class="ll">;</span>
         scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,&</span>n<span class="ll">)</span><span class="ll">;</span>
        <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><=</span>0</span><span class="ll">)</span>
        <span class="ll">{</span>
            <span class="return_type">break;</span>
        <span class="ll">}</span>
        sum<span class="ll"><span class="ll">+=</span></span>n<span class="ll">;</span>
     <span class="ll">}</span>
        printf<span class="ll">(</span><span class="inner">"Sum is: %d"</span><span class="ll">,</span>sum<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="9">
              <pre><p>
<b>// Continue Statement</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> i<span class="ll">;</span>
     for<span class="ll">(</span>i=1<span class="ll">;</span>i<span class="ll"><=</span>9<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
        <span class="return_type">if</span><span class="ll">(</span>i<span class="ll"><span class="ll"><span class="ll">==</span></span></span>3<span class="ll">)</span>
        <span class="ll">{</span>
            <span class="return_type">continue;</span>
        <span class="ll">}</span>
        printf<span class="ll">(</span><span class="inner"><span class="inner">"%d\n"</span></span><span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="29">
              <pre><p>

<b>Size of () Operator</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
<span class="return_type">int</span> x<span class="ll">;</span>
<span class="return_type">float</span> y<span class="ll">;</span>
<span class="return_type">char</span> z<span class="ll">;</span>
printf<span class="ll">(</span><span class="inner">"enter the int float & char:"</span><span class="ll">)</span><span class="ll">;</span>
scanf<span class="ll">(</span><span class="inner">"%d %f %c"</span><span class="ll">,</span> &x<span class="ll">,</span> &y<span class="ll">,</span> &z<span class="ll">)</span><span class="ll">;</span>
printf<span class="ll">(</span><span class="inner">"\nsize of x is =%d"</span><span class="ll">,</span>sizeof<span class="ll">(</span>x<span class="ll">)</span><span class="ll">)</span><span class="ll">;</span>
printf<span class="ll">(</span><span class="inner">"\nsize of y is=%f"</span><span class="ll">,</span>sizeof<span class="ll">(</span>y<span class="ll">)</span><span class="ll">)</span><span class="ll">;</span>
printf<span class="ll">(</span><span class="inner">"\nsize of z =%c"</span><span class="ll">,</span>sizeof<span class="ll">(</span>z<span class="ll">)</span><span class="ll">)</span><span class="ll">;</span>
printf<span class="ll">(</span><span class="inner">"size of double=%d"</span><span class="ll">,</span>sizeof<span class="ll">(</span>double<span class="ll">)</span><span class="ll">)</span><span class="ll">;</span>
getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span></p></pre><hr>

            <div id="10">
            <pre><p>
<b>// Switch Case</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">char</span> ch<span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"Enter any character: "</span><span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%c"</span><span class="ll"><span class="ll">,</span>&</span>ch<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">if</span><span class="ll">(</span>ch<span class="ll">>=</span>'a' && ch<span class="ll">>=</span>'A'<span class="ll">)</span>
     <span class="ll">{</span>
         <span class="return_type">switch</span><span class="ll">(</span>ch<span class="ll">)</span>
         <span class="ll">{</span>
             case 'a'<span class="ll">:</span>
             case 'e'<span class="ll">:</span>
             case 'i'<span class="ll">:</span>
             case 'o'<span class="ll">:</span>
             case 'u'<span class="ll">:</span>
             case 'A'<span class="ll">:</span>
             case 'E'<span class="ll">:</span>
             case 'I'<span class="ll">:</span>
             case 'O'<span class="ll">:</span>
             case 'U'<span class="ll">:</span> printf<span class="ll">(</span><span class="inner">"Vowel"</span><span class="ll">)</span><span class="ll">;</span>
                       <span class="return_type">break;</span>
             default: printf<span class="ll">(</span><span class="inner">"Consonant"</span><span class="ll">)</span><span class="ll">;</span>
         <span class="ll">}</span>
     <span class="ll">}</span>
     <span class="return_type">else</span>
        printf<span class="ll">(</span><span class="inner">"not an character"</span><span class="ll">)</span><span class="ll">;</span>

 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="11">
              <pre><p>
<b>// Auto Storage Class</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">auto</span> <span class="return_type">int</span> i=1<span class="ll">;</span>
     <span class="ll">{</span>
         <span class="return_type">auto</span> <span class="return_type">int</span> i=2<span class="ll">;</span>
         <span class="ll">{</span>
             <span class="return_type">auto</span> <span class="return_type">int</span> i=3<span class="ll">;</span>
             printf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
         <span class="ll">}</span>
         printf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     printf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="12">
              <pre><p>
<b>// Register Storage Class</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">register</span> <span class="return_type">int</span> i<span class="ll">;</span>
     for<span class="ll">(</span>i=1<span class="ll">;</span>i<span class="ll"><=</span>5<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner"><span class="inner">"%d\n"</span></span><span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="13">
              <pre><p>
<b>// Static Storage Class</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> sum<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">static</span> <span class="return_type">int</span> a=0</span><span class="ll">;</span>
     a<span class="ll">++</span><span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner"><span class="inner">"%d\n"</span></span><span class="ll">,</span>a<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     sum<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
     sum<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
     sum<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="14">
              <pre><p>
<b>// Extern Storage Class</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     extern a<span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,</span>a<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
<span class="return_type">int</span> a<span class="ll">=</span>500</span><span class="ll">;</span>
              </p></pre></div><hr>
              <div id="15">
              <pre><p>
<b>// Array</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
  <span class="return_type">int</span> a[5]<span class="ll">,</span>i<span class="ll">;</span>
  for<span class="ll">(</span>i=0</span><span class="ll">;</span>i&lt;5<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
    printf<span class="ll">(</span><span class="inner">"Enter array element a[%d]:"</span><span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>a[i]<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span><span class="inner">"You enter the array elements:\n"</span><span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0</span><span class="ll">;</span>i&lt;5<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
      printf<span class="ll">(</span><span class="inner">"%d "</span><span class="ll">,</span>a[i]<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
<span class="ll">}</span>

              </p></pre></div><hr>
              <div id="16">
              <pre><p>
<b>// Two Dimensions Array</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
  <span class="return_type">int</span> a[3][3]<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">;</span>
  printf<span class="ll">(</span><span class="inner"><span class="inner">"Enter Matix A element\n"</span></span><span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0</span><span class="ll">;</span>i&lt;3<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
    for<span class="ll">(</span>j=0</span><span class="ll">;</span>j&lt;3<span class="ll">;</span>j<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
      printf<span class="ll">(</span><span class="inner"><span class="inner">"Element of a[%d][%d]:"</span></span><span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">)</span><span class="ll">;</span>
      scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>a[i][j]<span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span><span class="inner"><span class="inner">"You enter the array elements:\n"</span></span><span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0</span><span class="ll">;</span>i&lt;3<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
    for<span class="ll">(</span>j=0</span><span class="ll">;</span>j&lt;3<span class="ll">;</span>j<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
      printf<span class="ll">(</span><span class="inner">"%d "</span><span class="ll">,</span>a[i][j]<span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
    printf<span class="ll">(</span>"\n"<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
<span class="ll">}</span>
              </p></pre></div><hr>
              <div id="17">
              <pre><p>
<b>// Function</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">int</span> sum<span class="ll">(</span><span class="return_type">int</span> <span class="ll">,</span> <span class="return_type">int</span> <span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n1<span class="ll">,</span>n2<span class="ll">,</span>s=0</span><span class="ll">;</span>
     printf<span class="ll">(</span>"Enter value of n1 and n2: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d%d"</span><span class="ll"><span class="ll">,</span>&</span>n1<span class="ll"><span class="ll">,</span>&</span>n2<span class="ll">)</span><span class="ll">;</span>
     s=sum<span class="ll">(</span>n1<span class="ll">,</span>n2<span class="ll">)</span><span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"Sum is: %d"</span><span class="ll">,</span>s<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">int</span> sum<span class="ll">(</span><span class="return_type">int</span> c<span class="ll">,</span> <span class="return_type">int</span> d<span class="ll">)</span>
 <span class="ll">{</span>
     return c<span class="ll">+</span>d<span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="18">
              <pre><p>
<b>// Function Call by value</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> sum<span class="ll">(</span><span class="return_type">int</span><span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">;</span>
     printf<span class="ll">(</span>"Enter value: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
     s<span class="ll">(</span>n<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">void</span> s<span class="ll">(</span><span class="return_type">int</span> a<span class="ll">)</span>
 <span class="ll">{</span>
     a=a<span class="ll">+</span>5<span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,</span>a<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="19">
              <pre><p>
<b>// Function Call by refrence</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> sum<span class="ll">(</span><span class="return_type">int</span> <span class="ll"><span class="ll">*</span></span><span class="ll">,</span> <span class="return_type">int</span> <span class="ll"><span class="ll">*</span></span><span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">,</span>m<span class="ll">;</span>
     printf<span class="ll">(</span>"Enter two value: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span>"<span class="inner">%d%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll"><span class="ll">,</span>&</span>m<span class="ll">)</span><span class="ll">;</span>
     sum<span class="ll">(</span>&n<span class="ll"><span class="ll">,</span>&</span>m<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">void</span> sum<span class="ll">(</span><span class="return_type">int</span> <span class="ll"><span class="ll">*</span></span>a<span class="ll">,</span> <span class="return_type">int</span> <span class="ll"><span class="ll">*</span></span>b<span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> s=0</span><span class="ll">;</span>
     s=<span class="ll">*</span>a<span class="ll">+</span><span class="ll">*</span>b<span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,</span>s<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="20">
              <pre><p>
<b>// Recursion</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> sum<span class="ll">(</span><span class="return_type">int</span> <span class="ll">*</span><span class="ll">,</span> <span class="return_type">int</span> <span class="ll">*</span><span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"Hello"</span><span class="ll">)</span><span class="ll">;</span>
     printf<span class="ll">(</span>"\nEnter a number: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">if</span><span class="ll">(</span>n<span class="ll">>=</span>5<span class="ll">)</span>
        printf<span class="ll">(</span>"Bye"<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">else</span>
        main<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="21">
              <pre><p>
<b>// Passing array in function</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> fun<span class="ll">(</span><span class="return_type">int</span> a<span class="ll"><span class="ll">[]</span></span><span class="ll">,</span><span class="return_type">int</span><span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a<span class="ll">[]</span>=<span class="ll">{</span>5<span class="ll">,</span>4<span class="ll">,</span>9<span class="ll">,</span>8<span class="ll">,</span>2<span class="ll">}</span><span class="ll">;</span>
     fun<span class="ll">(</span>a<span class="ll">,</span>5<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">void</span> fun<span class="ll">(</span><span class="return_type">int</span> z<span class="ll">[]</span> <span class="ll">,</span> <span class="return_type">int</span> x<span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> i<span class="ll">;</span>
     for<span class="ll">(</span>i=0</span><span class="ll">;</span>i&lt;x<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span><span class="inner"><span class="inner">"%d\n"</span></span><span class="ll">,</span>z[i]<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="22">
              <pre><p>
<b>// Using gets</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">;</span>
     <span class="return_type">char</span> name<span class="ll">[</span>20</span><span class="ll">]</span><span class="ll">;</span>
     printf<span class="ll">(</span>"Enter name: "<span class="ll">)</span><span class="ll">;</span>
     gets<span class="ll">(</span>name<span class="ll">)</span><span class="ll">;</span>
     printf<span class="ll">(</span><span class="inner">"%s"</span><span class="ll">,</span>name<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="23">
              <pre><p>
<b>// Pointer</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a<span class="ll">;</span>
     <span class="return_type">int</span> <span class="ll">*</span>p<span class="ll">;</span>
     a<span class="ll">=</span>10<span class="ll">;</span>
     p<span class="ll">=</span><span class="ll">&</span>a<span class="ll">;</span>
     printf<span class="ll">(</span>"\nAddress: %d"<span class="ll">,</span>p<span class="ll">)</span><span class="ll">;</span>
     printf<span class="ll">(</span>"\nValue: %d"<span class="ll">,</span>a<span class="ll">)</span><span class="ll">;</span>
     printf<span class="ll">(</span>"\nAddress: <span class="ll">%</span>u"<span class="ll"><span class="ll">,</span>&</span>a<span class="ll">)</span><span class="ll">;</span>
     printf<span class="ll">(</span>"\nAddress of address: <span class="ll">%</span>u"<span class="ll"><span class="ll">,</span>&</span>p<span class="ll">)</span><span class="ll">;</span>
     printf<span class="ll">(</span>"\nValue: %d"<span class="ll">,</span><span class="ll">*</span>p<span class="ll">)</span><span class="ll">;</span>
     printf<span class="ll">(</span>"\nAddress: %d\n"<span class="ll">,</span><span class="ll">*</span><span class="ll">(</span>&p<span class="ll">)</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="24">
              <pre><p>
<b>// Pointer Arithemetic</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a<span class="ll">=</span>10</span><span class="ll">;</span>
     <span class="return_type">int</span> <span class="ll">*</span>p<span class="ll">;</span>
     p<span class="ll">=</span><span class="ll">&</span>a<span class="ll">;</span>
     printf<span class="ll">(</span>"Address of p variable: <span class="ll">%</span>u"<span class="ll">,</span>p<span class="ll">)</span><span class="ll">;</span>
     p<span class="ll">++</span><span class="ll">;</span>//increament
     printf<span class="ll">(</span>"Address of p variable: <span class="ll">%</span>u"<span class="ll">,</span>p<span class="ll">)</span><span class="ll">;</span>
     p<span class="ll">--</span><span class="ll">;</span>//Decreamemt
     printf<span class="ll">(</span>"Address of p variable: <span class="ll">%</span>u"<span class="ll">,</span>p<span class="ll">)</span><span class="ll">;</span>
     p<span class="ll">=</span>p<span class="ll">+</span>5<span class="ll">;</span>
     printf<span class="ll">(</span>"After Add address of p: <span class="ll">%</span>u"<span class="ll">,</span>p<span class="ll">)</span><span class="ll">;</span>
     p<span class="ll">=</span>p<span class="ll">-</span>3<span class="ll">;</span>
     printf<span class="ll">(</span>"After Sub address of p: <span class="ll">%</span>u"<span class="ll">,</span>p<span class="ll">)</span><span class="ll">;</span>
       
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="25">
              <pre><p>
<b>// Structure</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">struct</span> student
 <span class="ll">{</span>
    <span class="return_type">int</span> roll_no<span class="ll">;</span>
    <span class="return_type">char</span> name[20]<span class="ll">;</span>
    <span class="return_type">float</span> marks<span class="ll">;</span>
 <span class="ll">}</span>s<span class="ll">;</span>

 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
  printf<span class="ll">(</span>"Enter student name: "<span class="ll">)</span><span class="ll">;</span>
  gets<span class="ll">(</span>s.name<span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"Enter student roll no: "<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>s.roll_no<span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"Enter marks: "<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span>"%f"<span class="ll"><span class="ll">,</span>&</span>s.marks<span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"\nStudent name: <span class="ll">%</span>s\n"<span class="ll">,</span>s.name<span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"Student roll no.: %d\n"<span class="ll">,</span>s.roll_no<span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"Marks: %f\n"<span class="ll">,</span>s.marks<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="26">
              <pre><p>
<b>// Array of Structure</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">struct</span> student
 <span class="ll">{</span>
    <span class="return_type">int</span> roll_no;
    <span class="return_type">char</span> name[20];
 <span class="ll">}</span>s1[5];

<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
 <span class="return_type">int</span> i;
 printf<span class="ll">(</span>"Enter Record of 5 student\n"<span class="ll">)</span><span class="ll">;</span>
 for<span class="ll">(</span>i=0;i&lt;5;i<span class="ll">++</span><span class="ll">)</span>
 <span class="ll">{</span>
    printf<span class="ll">(</span>"Enter student name\n: "<span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span>"<span class="ll">%</span>s"<span class="ll"><span class="ll">,</span>&</span>s1[i].name<span class="ll">)</span><span class="ll">;</span>
    printf<span class="ll">(</span>"Enter student roll no\n: "<span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>s1[i].roll_no<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
 for<span class="ll">(</span>i=0;i&lt;5;i<span class="ll">++</span><span class="ll">)</span>
 <span class="ll">{</span>
  printf<span class="ll">(</span>"\nStudent name: <span class="ll">%</span>s\n"<span class="ll">,</span>s1[i].name<span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"Stu.roll no.:%d\n"<span class="ll">,</span>s1[i].roll_no<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
<span class="ll">}</span>
              </p></pre></div><hr>
              <div id="27">
              <pre><p>
<b>// File Handiling</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
#include&lt;stdlib.h&gt;
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n;
     FILE <span class="ll">*</span>fp;
     fp = fopen<span class="ll">(</span>"ABC.txt"<span class="ll">,</span>"w"<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">if</span><span class="ll">(</span>fp<span class="ll"><span class="ll"><span class="ll">==</span></span></span>NULL<span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span>"File not found!!"<span class="ll">)</span><span class="ll">;</span>
         exit<span class="ll">(</span>0<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     printf<span class="ll">(</span>"Enter number: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
     fprintf<span class="ll">(</span>fp<span class="ll">,</span><span class="inner">"%d"</span><span class="ll">,</span>n<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="28">
              <pre><p>
<b>//File Handiling copy content to another file</b><br>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
#include&lt;stdlib.h&gt;
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">char</span> ch;
     FILE <span class="ll">*</span>s<span class="ll">,</span><span class="ll">*</span>t;
     s = fopen<span class="ll">(</span>"ABC.txt"<span class="ll">,</span>"r"<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">if</span><span class="ll">(</span>s<span class="ll"><span class="ll"><span class="ll">==</span></span></span>NULL<span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span>"File not found!!"<span class="ll">)</span><span class="ll">;</span>
         exit<span class="ll">(</span>0<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     t = fopen<span class="ll">(</span>"XYZ.txt"<span class="ll">,</span>"w"<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">if</span><span class="ll">(</span>t<span class="ll"><span class="ll"><span class="ll">==</span></span></span>NULL<span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span>"File not found!!"<span class="ll">)</span><span class="ll">;</span>
         exit<span class="ll">(</span>0<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     while<span class="ll">(</span>1<span class="ll">)</span>
     <span class="ll">{</span>
         ch=fgetc<span class="ll">(</span>s<span class="ll">)</span><span class="ll">;</span>
         <span class="return_type">if</span><span class="ll">(</span>ch<span class="ll"><span class="ll">==</span></span>EOF<span class="ll">)</span>
            <span class="return_type">break;</span>
         <span class="return_type">else</span>
            fputc<span class="ll">(</span>ch<span class="ll">,</span>t<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     fclose<span class="ll">(</span>s<span class="ll">)</span><span class="ll">;</span>
     fclose<span class="ll">(</span>t<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
          </div>  
          </div>
          <div class="other">
              <div id="30">
                <br><h2>Other Programs for Programmers</h2></center><br>

<p><p class="p">Wap  to read any character from the keyboard and see ASCII value.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
  <span class="return_type">char</span> ch;
  printf<span class="ll">(</span><span class="inner">"Enter any character: "</span><span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span><span class="inner"><span class="inner">"%c"</span></span><span class="ll"><span class="ll">,</span>&</span>ch<span class="ll">)</span><span class="ll">;</span>
  ch=getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"ASCII no. of <span class="return_type">char</span> %c is: %d"<span class="ll">,</span>ch<span class="ll">)</span><span class="ll">;</span>
  getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>
<b>Output:</b>
enter any character:  A
ASCII number of character A is: 65</p></pre><hr>

<p><p class="p">Wap to read 3 real no. a b and c and evaluate t1.<b>t1 = a<span class="ll">(</span>b <span class="ll">+</span> c<span class="ll">)</span> <span class="ll">+</span> b<span class="ll">(</span>c <span class="ll">+</span> a<span class="ll">)</span> <span class="ll">+</span> c<span class="ll">(</span>a <span class="ll">+</span> b<span class="ll">)</span></b></p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
#include&lt;math.h&gt;
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
    <span class="return_type">float</span> t1<span class="ll">,</span>a<span class="ll">,</span>b<span class="ll">,</span>c;
    printf<span class="ll">(</span>"enter the value of a<span class="ll">,</span>b and c: "<span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span>"%f%f%f"<span class="ll"><span class="ll">,</span>&</span>a<span class="ll"><span class="ll">,</span>&</span>b<span class="ll"><span class="ll">,</span>&</span>c<span class="ll">)</span><span class="ll">;</span>
    tI=<span class="ll">(</span>a<span class="ll">*</span><span class="ll">(</span>b <span class="ll">+</span> c<span class="ll">)</span><span class="ll">+</span>b<span class="ll">*</span><span class="ll">(</span>c <span class="ll">+</span> a<span class="ll">)</span><span class="ll">+</span>c<span class="ll">*</span><span class="ll">(</span>a <span class="ll">+</span> b<span class="ll">)</span><span class="ll">)</span><span class="ll">;</span>
    printf<span class="ll">(</span>"\nt1=%f\n"<span class="ll">,</span>t1<span class="ll">)</span><span class="ll">;</span>
    getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
 
<b>Output:</b>
enter the value of a<span class="ll">,</span>b and c: 2 4 6
t1=88.00</p></pre><hr>

<p><p class="p">Write a program to convert the decimal <span class="return_type">int</span>o an octal no..</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span>e main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
    <span class="return_type">int</span> n;
    printf<span class="ll">(</span>"enter the <span class="return_type">int</span>eger number: "<span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
    printf<span class="ll">(</span>"<span class="ll">%</span>o"<span class="ll">,</span>n<span class="ll">)</span><span class="ll">;</span>
    getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>

<b>Output:</b>
enter the <span class="return_type">int</span>eger number: 100
144</p></pre><hr>

<p><p class="p">Write a program to convert the decimal <span class="return_type">int</span>o a hexadecimal.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
    <span class="return_type">int</span> n;
    printf<span class="ll">(</span>"enter the value of n"<span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
    printf<span class="ll">(</span>"nhexadecimal number=96x"<span class="ll">,</span>n<span class="ll">)</span><span class="ll">;</span>
    getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>

<b>Output:</b>
enter the value of n: 100
hexadecimal number=64</p></pre><hr>

<p><p class="p">Write a program to find the absolute value of any given number.</p><br>
<b>Solution:</b><pre>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
    <span class="return_type">float</span> a<span class="ll">,</span>i;
    pr<span class="return_type">int</span><span class="ll">(</span>"enter the value of a: "<span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span>"%f"<span class="ll"><span class="ll">,</span>&</span>a<span class="ll">)</span><span class="ll">;</span>
    i=abs<span class="ll">(</span>a<span class="ll">)</span><span class="ll">;</span>
    printf<span class="ll">(</span>"\nabsolute value=%f"<span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
    getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

<b>Output:</b>
enter the value of a: 11.322
absolute value 11.000000</p></pre><hr>

<p><p class="p">Wap to convert character lowercase to uppercase character.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="header"><span class="header">#include&lt;ctype.h&gt;</span></span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
    <span class="return_type">int</span> lower<span class="ll">,</span> upper;
    lower=getchar<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
    upper=toupper <span class="ll">(</span>lower<span class="ll">)</span><span class="ll">;</span>
    getchar <span class="ll">(</span>upper<span class="ll">)</span><span class="ll">;</span>
    getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>

<b>Output:</b>
a
A</p></pre><hr>

<p><p class="p">Wap to convert uppercase characters to lowercase character.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="header"><span class="header">#include&lt;ctype.h&gt;</span></span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
    <span class="return_type">int</span> lower<span class="ll">,</span> upper;
    lower=toupper <span class="ll">(</span>upper<span class="ll">)</span><span class="ll">;</span>
    getchar<span class="ll">(</span>lower<span class="ll">)</span><span class="ll">;</span>
    getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>

<b>Output:</b>
A
a</p></pre><hr>

<p><p class="p">Wap to illustrate the logical ANDing and ORing operations.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
    <span class="return_type">int</span> x<span class="ll">,</span> y<span class="ll">,</span> z;
    x = y;
    y = 3;
    z = x&&y;
    y = x<span class="ll">||</span>y<span class="ll">||</span>z;
    x = x&&y&&z;
    printf<span class="ll">(</span>"x: %d\ny: %d\nz: %d"<span class="ll">,</span>x<span class="ll">,</span>y<span class="ll">,</span>z<span class="ll">)</span><span class="ll">;</span>
    getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>

<b>Output:</b>
1
1
1</p></pre><hr>


<p><p class="p">Write a program to find out year is leap year or not.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
 <span class="return_type">int</span> a;
 printf<span class="ll">(</span>"enter the year"<span class="ll">)</span><span class="ll">;</span>
 scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>a<span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">if</span><span class="ll">(</span>a<span class="ll"><span class="ll">%</span></span>100<span class="ll"><span class="ll">==</span></span>0<span class="ll">)</span>
 <span class="ll">{</span>
  <span class="return_type">if</span><span class="ll">(</span>a<span class="ll"><span class="ll">%</span></span>400<span class="ll">==</span>0<span class="ll">)</span>
    printf<span class="ll">(</span>"year is leap year"<span class="ll">)</span><span class="ll">;</span>
  <span class="return_type">else</span>
    printf<span class="ll">(</span>"year is not leap year"<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
 <span class="return_type">else</span>
 <span class="ll">{</span>
  <span class="return_type">if</span><span class="ll">(</span>a<span class="ll"><span class="ll">%</span></span>4<span class="ll">==</span>0<span class="ll">)</span>
    printf<span class="ll">(</span>"year is leap year"<span class="ll">)</span><span class="ll">;</span>
  <span class="return_type">else</span>
     printf<span class="ll">(</span>"year is not leap year"<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
   getch<span class="ll">(</span> <span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>

<b>Output:</b>
enter the year 2000
year is leap</p></pre><hr>

<p><p class="p">Write a program of Calculator.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">char</span> ch<span class="ll">;</span>
      <span class="return_type">float</span> a<span class="ll">,</span>b<span class="ll">;</span>
      printf<span class="ll">(</span>"Enter Symbol: "<span class="ll">)</span><span class="ll">;</span>
      scanf<span class="ll">(</span><span class="inner"><span class="inner">"%c"</span></span><span class="ll"><span class="ll">,</span>&</span>ch<span class="ll">)</span><span class="ll">;</span>
      printf<span class="ll">(</span>"Enter 1st value: "<span class="ll">)</span><span class="ll">;</span>
      scanf<span class="ll">(</span>"%f"<span class="ll"><span class="ll">,</span>&</span>a<span class="ll">)</span><span class="ll">;</span>
      printf<span class="ll">(</span>"Enter 2nd value: "<span class="ll">)</span><span class="ll">;</span>
      scanf<span class="ll">(</span>"%f"<span class="ll"><span class="ll">,</span>&</span>b<span class="ll">)</span><span class="ll">;</span>
      <span class="return_type">switch</span><span class="ll">(</span>ch<span class="ll">)</span>
      <span class="ll">{</span>
        case'<span class="ll"><span class="ll">+</span></span>': printf<span class="ll">(</span>"Sum is: %f"<span class="ll">,</span>a<span class="ll"><span class="ll">+</span></span>b<span class="ll">)</span><span class="ll">;</span>
                 <span class="return_type">break;</span>
        case'-': printf<span class="ll">(</span>"Sub is: %f"<span class="ll">,</span>a-b<span class="ll">)</span><span class="ll">;</span>
                 <span class="return_type">break;</span>
        case'<span class="ll">*</span>': printf<span class="ll">(</span>"Mul is: %f"<span class="ll">,</span>a<span class="ll">*</span>b<span class="ll">)</span><span class="ll">;</span>
                 <span class="return_type">break;</span>
        case'/': printf<span class="ll">(</span>"Divide is: %f"<span class="ll">,</span>b/a<span class="ll">)</span><span class="ll">;</span>
                 <span class="return_type">break;</span>
        default : printf<span class="ll">(</span>"Invalid Symbol"<span class="ll">)</span><span class="ll">;</span>
      <span class="ll">}</span>
 <span class="ll">}</span>

<b>Output:</b>
Enter Symbol: <span class="ll">+</span>
Enter 1st value: 23
Enter 2nd value: 3
Sum is: 26</p></pre><hr>

<p><p class="p">Wap to input a number and check it is prefect no. or not.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
  <span class="return_type">int</span> n<span class="ll">,</span>i<span class="ll">,</span>sum=0;
  printf<span class="ll">(</span>"Enter number: "<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=1;i&lt;n;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
      <span class="return_type">if</span><span class="ll">(</span>n<span class="ll"><span class="ll">%</span></span>i<span class="ll">==</span>0<span class="ll">)</span>
      <span class="ll">{</span>
          sum<span class="ll"><span class="ll">+=</span></span>i;
      <span class="ll">}</span>
  <span class="ll">}</span>
  <span class="return_type">if</span><span class="ll">(</span>sum<span class="ll">==</span>n<span class="ll">)</span>
     printf<span class="ll">(</span>"%d is perfect number!"<span class="ll">,</span>n<span class="ll">)</span><span class="ll">;</span>
  <span class="return_type">else</span>
     printf<span class="ll">(</span>"%d is not a perfect number!"<span class="ll">,</span>n<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

<b>Output:</b>
Enter number: 6
6 is prefect number!</p></pre><hr>

<p><p class="p">Wap of multipication of two matrix.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span><span class="ll">{</span>
<span class="return_type">int</span> i<span class="ll">,</span>j<span class="ll">,</span>k<span class="ll">,</span>p<span class="ll">,</span>q<span class="ll">,</span>r<span class="ll">,</span>c;
printf<span class="ll">(</span>"Enter row & column of 1st matrix:"<span class="ll">)</span><span class="ll">;</span>
scanf<span class="ll">(</span>"<span class="inner">%d%d"</span><span class="ll"><span class="ll">,</span>&</span>r<span class="ll"><span class="ll">,</span>&</span>c<span class="ll">)</span><span class="ll">;</span>
<span class="return_type">int</span> a[r][c];
printf<span class="ll">(</span>"Enter element of 1st matrix:\n"<span class="ll">)</span><span class="ll">;</span>
for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>  
printf<span class="ll">(</span>"Enter element of a[%d][%d]: "<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">)</span><span class="ll">;</span>
scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>a[i][j]<span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>
<span class="ll">}</span>
printf<span class="ll">(</span>"Enter row & column of 2nd matrix:"<span class="ll">)</span><span class="ll">;</span>
scanf<span class="ll">(</span><span class="inner">"%d%d"</span><span class="ll"><span class="ll">,</span>&</span>p<span class="ll"><span class="ll">,</span>&</span>q<span class="ll">)</span><span class="ll">;</span>
<span class="return_type">if</span><span class="ll">(</span>c<span class="ll">==</span>p<span class="ll">)</span><span class="ll">{</span>
<span class="return_type">int</span> b[p][q]<span class="ll">,</span>m[100][100];
printf<span class="ll">(</span>"Enter element of 2nd matrix:\n"<span class="ll">)</span><span class="ll">;</span>
for<span class="ll">(</span>i=0;i&lt;p;i<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
for<span class="ll">(</span>j=0;j&lt;q;j<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
printf<span class="ll">(</span>"Enter element of a[%d][%d]: "<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">)</span><span class="ll">;</span>
scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>b[i][j]<span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>
<span class="ll">}</span>
for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
for<span class="ll">(</span>j=0;j&lt;q;j<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
for<span class="ll">(</span>k=0;k&lt;p;k<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
m[i][j]=a[i][k]<span class="ll">*</span>b[k][j];
<span class="ll">}</span>
<span class="ll">}</span>
<span class="ll">}</span>
printf<span class="ll">(</span>"Multiplication of two matrix is:\n"<span class="ll">)</span><span class="ll">;</span>
for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
printf<span class="ll">(</span><span class="inner">"%d "</span><span class="ll">,</span>m[i][j]<span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>
printf<span class="ll">(</span>"\n"<span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>
<span class="ll">}</span>
<span class="return_type">else</span>
  printf<span class="ll">(</span>"\nSORRY!!<span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"\nThis Matrix is not mutiplied\n"<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

<b>Output:</b>
Enter rows & column for 1st matrix: 2 2
Enter element of 1st matrix:
Enter element of a[0][0]: 1
Enter element of a[0][1]: 2
Enter element of a[1][0]: 3
Enter element of a[1][1]: 4

Enter rows & column for 2nd matrix: 2 2
Enter element of 2nd matrix:
Enter element of a[0][0]: 9
Enter element of a[0][1]: 8
Enter element of a[1][0]: 7
Enter element of a[1][1]: 6

Multiplication of two matrix is:
14 12
28 24</p></pre><hr>

<p><p class="p">Wap of add two matrix.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
  <span class="return_type">int</span> r<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">,</span>c;
  printf<span class="ll">(</span>"Enter row & column of matrix:"<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span>"<span class="inner">%d%d"</span><span class="ll"><span class="ll">,</span>&</span>r<span class="ll"><span class="ll">,</span>&</span>c<span class="ll">)</span><span class="ll">;</span>
  <span class="return_type">int</span> a[r][c]<span class="ll">,</span>b[r][c]<span class="ll">,</span>s[r][c];
  for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
    for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
      printf<span class="ll">(</span>"Enter element a[%d][%d]:"<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">)</span><span class="ll">;</span>
      scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>a[i][j]<span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span>"\n"<span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
    for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
     printf<span class="ll">(</span>"Enter element b[%d][%d]:"<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>b[i][j]<span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span>"\nAddition of matrix:\n"<span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
    for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
      s[i][j]=a[i][j]<span class="ll">+</span>b[i][j];
      printf<span class="ll">(</span><span class="inner">"%d "</span><span class="ll">,</span>s[i][j]<span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
    printf<span class="ll">(</span>"\n"<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
 <span class="ll">}</span>

<b>Output</b>
Enter rows and column of matrix: 3 3
Enter element of a[0][0]: 1
Enter element of a[0][1]: 2
Enter element of a[0][2]: 3
Enter element of a[1][0]: 4
Enter element of a[1][1]: 5
Enter element of a[1][2]: 6
Enter element of a[2][0]: 7
Enter element of a[2][1]: 8
Enter element of a[2][2]: 9

Enter element of b[0][0]: 9
Enter element of b[0][1]: 8
Enter element of b[0][2]: 7
Enter element of b[1][0]: 6
Enter element of b[1][1]: 5
Enter element of b[1][2]: 4
Enter element of b[2][0]: 3
Enter element of b[2][1]: 2
Enter element of b[2][2]: 1

Addition of matrix:
10 10 10
10 10 10
10 10 10</p></pre><hr>

<p><p class="p">Write a program of Binary Search.</p><br>
<b>Solution</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
  <span class="return_type">int</span> mid<span class="ll">,</span>ub<span class="ll">,</span>lb<span class="ll">,</span>arr[5]<span class="ll">,</span>n<span class="ll">,</span>i;
  for<span class="ll">(</span>i=0;i&lt;5;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
   printf<span class="ll">(</span>"Enter array element of a[%d]:"<span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
   scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>arr[i]<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span>"Enter element to search:"<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
  lb=0;
  ub=4;
  while<span class="ll">(</span>lb<span class="ll"><=</span>ub<span class="ll">)</span>
  <span class="ll">{</span>
    mid=<span class="ll">(</span>lb<span class="ll">+</span>ub<span class="ll">)</span>/2;
    <span class="return_type">if</span><span class="ll">(</span>arr[mid]<span class="ll">==</span>n<span class="ll">)</span>
    <span class="ll">{</span>
       printf<span class="ll">(</span>"Element found "<span class="ll">)</span><span class="ll">;</span>
       <span class="return_type">break;</span>
    <span class="ll">}</span>
    <span class="return_type">if</span><span class="ll">(</span>arr[mid]>n<span class="ll">)</span>
       ub=mid-1;
    <span class="return_type">if</span><span class="ll">(</span>arr[mid]&lt;n<span class="ll">)</span>
       lb=mid<span class="ll">+</span>1;
  <span class="ll">}</span>
  <span class="return_type">if</span><span class="ll">(</span>lb>ub<span class="ll">)</span>
  <span class="ll">{</span>
    printf<span class="ll">(</span>"Element not found"<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
 <span class="ll">}</span>

<b>Output:</b>
Enter array element of a[0]: 6
Enter array element of a[1]: 9
Enter array element of a[2]: 2
Enter array element of a[3]: 4
Enter array element of a[4]: 8
Enter element to be search in array: 3
Element not found</p></pre><hr>

<p><p class="p">Wap of Linear Search.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
#include&lt;stdlib.h&gt;
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
  <span class="return_type">int</span> s<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">,</span>n;
  printf<span class="ll">(</span>"Enter terms: "<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>s<span class="ll">)</span><span class="ll">;</span>
  <span class="return_type">int</span> a[s];
  printf<span class="ll">(</span>"Enter array element: "<span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0;i&lt;s;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
  	scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>a[i]<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span>"Enter number to be search: "<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0;i&lt;s;i<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
  <span class="return_type">if</span><span class="ll">(</span>a[i]<span class="ll">==</span>n<span class="ll">)</span><span class="ll">{</span>
  printf<span class="ll">(</span>"%d Element found at: %d"<span class="ll">,</span>n<span class="ll">,</span>i<span class="ll">+</span>1<span class="ll">)</span><span class="ll">;</span>
  exit<span class="ll">(</span>1<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span>"Element not found!!"<span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>
<b>Output:</b>
Enter terms: 5
Enter array element: 5 6 7 8 9
Enter number to be search: 6
6 element found at position: 2</p></pre><hr>

<p><p class="p">Write a prog%d of Palindrome number checker.</p><br>
<b>Solution</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">,</span>i<span class="ll">,</span>rev<span class="ll">,</span>r;
     printf<span class="ll">(</span>"Enter value: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
     i=n;
     while<span class="ll">(</span>n>0<span class="ll">)</span>
     <span class="ll">{</span>
         r=n<span class="ll"><span class="ll">%</span></span>10;
         rev=<span class="ll">(</span>rev<span class="ll">*</span>10<span class="ll">)</span><span class="ll">+</span>r;
         n=n/10;
     <span class="ll">}</span>
     <span class="return_type">if</span><span class="ll">(</span>i<span class="ll">==</span>rev<span class="ll">)</span>
        printf<span class="ll">(</span>"%d is an palindrome\n"<span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
     <span class="return_type">else</span>
        printf<span class="ll">(</span>"%d is not palindrome\n"<span class="ll">,</span>i<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
<b>Output</b>
Enter value: 1223221
1223221 is an palindrome</p></pre><hr>

<p><p class="p">Write a program input a number and sum of it number.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">,</span>sum=0<span class="ll">,</span>r;
     printf<span class="ll">(</span>"Enter number: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
     while<span class="ll">(</span>n>0<span class="ll">)</span>
     <span class="ll">{</span>
         r=n<span class="ll"><span class="ll">%</span></span>10;
         sum<span class="ll"><span class="ll">+=</span></span>r;
         n/=10;
     <span class="ll">}</span>
     printf<span class="ll">(</span><span class="inner">"Sum is: %d"</span><span class="ll">,</span>sum<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

<b>Output:</b>
Enter number: 123
Sum is: 6</p></pre><hr>

<p><p class="p">Write a program of fibonacci series.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> i<span class="ll">,</span>n<span class="ll">,</span>a=0<span class="ll">,</span>b=1<span class="ll">,</span>c;
     printf<span class="ll">(</span>"Enter number of terms: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
     for<span class="ll">(</span>i=1;i<=n;i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         c=a<span class="ll">+</span>b;
         printf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,</span>a<span class="ll">)</span><span class="ll">;</span>
         a=b;
         b=c;
     <span class="ll">}</span>
 <span class="ll">}</span>

<b>Output</b>
Enter number of terms: 5
0 1 1 2 3</p></pre><hr>

<p><p class="p">Wap to swap two no. without using 3rd variable.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
  <span class="return_type">int</span> a<span class="ll">,</span>b;
  printf<span class="ll">(</span>"Enter value of a & b: "<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span><span class="inner">"%d%d"</span><span class="ll"><span class="ll">,</span>&</span>a<span class="ll"><span class="ll">,</span>&</span>b<span class="ll">)</span><span class="ll">;</span>
  printf<span class="ll">(</span>"Before swap a=%d & b=%d"<span class="ll">,</span>a<span class="ll">,</span>b<span class="ll">)</span><span class="ll">;</span>
  a=a<span class="ll">+</span>b;
  b=a-b;
  a=a-b;
  printf<span class="ll">(</span>"After swaping a=%d & b=%d"<span class="ll">,</span>a<span class="ll">,</span>b<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
 
<b>Output:</b>
Enter value of a & b: 3 5
Before swap value of a=3 & b=5
After swap value of a=5 & b=3</p></pre><hr>

<p><p class="p">Wap of transpose of matrix.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
  <span class="return_type">int</span> i<span class="ll">,</span>j<span class="ll">,</span>r<span class="ll">,</span>c;
  printf<span class="ll">(</span>"Enter row & column of matrix:"<span class="ll">)</span><span class="ll">;</span>
  scanf<span class="ll">(</span><span class="inner">"%d%d"</span><span class="ll"><span class="ll">,</span>&</span>r<span class="ll"><span class="ll">,</span>&</span>c<span class="ll">)</span><span class="ll">;</span>
  <span class="return_type">int</span> a[r][c];
  for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
    for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
     printf<span class="ll">(</span>"matrix element a[%d][%d]:"<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>a[i][j]<span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span>"You enter this matrix: \n"<span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
      for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span>
      <span class="ll">{</span>
          printf<span class="ll">(</span><span class="inner">"%d "</span><span class="ll">,</span>a[i][j]<span class="ll">)</span><span class="ll">;</span>
      <span class="ll">}</span>
      printf<span class="ll">(</span>"\n"<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
  printf<span class="ll">(</span>"\nTranspose of matrix is:\n"<span class="ll">)</span><span class="ll">;</span>
  for<span class="ll">(</span>i=0;i<&lt;;i<span class="ll">++</span><span class="ll">)</span>
  <span class="ll">{</span>
      for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span>
      <span class="ll">{</span>
          printf<span class="ll">(</span><span class="inner">"%d "</span><span class="ll">,</span>a[j][i]<span class="ll">)</span><span class="ll">;</span>
      <span class="ll">}</span>
      printf<span class="ll">(</span>"\n"<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>
 <span class="ll">}</span>

<b>Output:</b>
Enter your rows & column of matrix: 3 3
Enter matrix element of a[0][0]: 9
Enter matrix element of a[0][1]: 8
Enter matrix element of a[0][2]: 7
Enter matrix element of a[1][0]: 6
Enter matrix element of a[1][1]: 5
Enter matrix element of a[1][2]: 4
Enter matrix element of a[2][0]: 3
Enter matrix element of a[2][1]: 2
Enter matrix element of a[2][2]: 1
You enter this matrix:
9 8 7
6 5 4
3 2 1

Transpose of matrix is:
9 6 3
8 5 2
7 4 1</p></pre><hr>

<p><p class="p">Wap of a to the power b using recursion.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
#include&lt;math.h&gt;
  <span class="return_type">int</span> power<span class="ll">(</span><span class="return_type">int</span><span class="ll">,</span><span class="return_type">int</span><span class="ll">)</span><span class="ll">;</span>
  <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
  <span class="ll">{</span>
      <span class="return_type">int</span> a<span class="ll">,</span>b<span class="ll">,</span>c;
      printf<span class="ll">(</span>"Enter the value of a & b: "<span class="ll">)</span><span class="ll">;</span>
      scanf<span class="ll">(</span><span class="inner">"%d%d"</span><span class="ll"><span class="ll">,</span>&</span>a<span class="ll"><span class="ll">,</span>&</span>b<span class="ll">)</span><span class="ll">;</span>
      c=power<span class="ll">(</span>a<span class="ll">,</span>b<span class="ll">)</span><span class="ll">;</span>
      printf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll">,</span>c<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>

  <span class="return_type">int</span> power<span class="ll">(</span><span class="return_type">int</span> x<span class="ll">,</span> <span class="return_type">int</span> y<span class="ll">)</span>
  <span class="ll">{</span>
      <span class="return_type">if</span><span class="ll">(</span>y<span class="ll">==</span>0<span class="ll">)</span>
        return 1;
      <span class="return_type">else</span>
        return<span class="ll">(</span>x<span class="ll">*</span>pow<span class="ll">(</span>x<span class="ll">,</span>y-1<span class="ll">)</span><span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>

<b>Output:</b>
Enter the value of a & b: 2 3
8</p></pre><hr>

<p><p class="p">Write a program of automorphic number.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
  <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
  <span class="ll">{</span>
    <span class="return_type">int</span> n<span class="ll">,</span>i<span class="ll">,</span>s;
    printf<span class="ll">(</span><span class="inner">"Enter a number: "</span><span class="ll">)</span><span class="ll">;</span>
    scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
    s=<span class="ll">(</span>n<span class="ll">*</span>n-n<span class="ll">)</span><span class="ll"><span class="ll">%</span></span>10;
    <span class="return_type">if</span><span class="ll">(</span>s<span class="ll">==</span>0<span class="ll">)</span>
    printf<span class="ll">(</span>"%d is automorphir number!!"<span class="ll">,</span>n<span class="ll">)</span><span class="ll">;</span>
    <span class="return_type">else</span>
    printf<span class="ll">(</span>"%d is not automorphic n0.!!"<span class="ll">,</span>n<span class="ll">)</span><span class="ll">;</span>
  <span class="ll">}</span>

<b>Output</b>
Enter a number: 25
25 is automorphic number!!</p></pre><hr>

<p><p class="p">Wap to input a number and check it is krishnamuerty no. or not.</p><br>
<b>Solution</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
 <span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> i<span class="ll">,</span>n<span class="ll">,</span>r<span class="ll">,</span>t<span class="ll">,</span>f=1<span class="ll">,</span>s=0;
     printf<span class="ll">(</span>"Enter no.: "<span class="ll">)</span><span class="ll">;</span>
     scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>n<span class="ll">)</span><span class="ll">;</span>
     t=n;
     while<span class="ll">(</span>n>0<span class="ll">)</span>
     <span class="ll">{</span>
         r=n<span class="ll"><span class="ll">%</span></span>10;
         for<span class="ll">(</span>i=r;i<span class="ll">>=</span>1;i--<span class="ll">)</span>
         <span class="ll">{</span>
             f=f<span class="ll">*</span>i;
         <span class="ll">}</span>
          s=s<span class="ll">+</span>f;
             f=1;
         n=n/10;
     <span class="ll">}</span>
     <span class="return_type">if</span><span class="ll">(</span>s<span class="ll"<span class="ll">>=</span>=</span>t<span class="ll">)</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span>"YES"<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     <span class="return_type">else</span>
     <span class="ll">{</span>
         printf<span class="ll">(</span>"NO"<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>

<b>Output:</b>
Enter no.: 145
yes</p></pre><hr>

<p><p class="p">Wap of sum of upper triangular matrix.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
<span class="return_type">int</span> a[10][10]<span class="ll">,</span>r<span class="ll">,</span>c<span class="ll">,</span>i<span class="ll">,</span>j<span class="ll">,</span>s=0;
printf<span class="ll">(</span>"Find sum of uppertriangular matrix"<span class="ll">)</span><span class="ll">;</span>
printf<span class="ll">(</span>"\n--------------------------------"<span class="ll">)</span><span class="ll">;</span>
printf<span class="ll">(</span>"\n\nEnter rows and column: "<span class="ll">)</span><span class="ll">;</span>
scanf<span class="ll">(</span><span class="inner">%d%d"</span><span class="ll"><span class="ll">,</span>&</span>r<span class="ll"><span class="ll">,</span>&</span>c<span class="ll">)</span><span class="ll">;</span>
<span class="return_type">if</span><span class="ll">(</span>r<span class="ll">==</span>c<span class="ll">)</span><span class="ll">{</span>
printf<span class="ll">(</span>"\nEnter matrix:\n"<span class="ll">)</span><span class="ll">;</span>
for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span>
<span class="ll">{</span>
    for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
        scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="ll"><span class="ll">,</span>&</span>a[i][j]<span class="ll">)</span><span class="ll">;</span>
    <span class="ll">}</span>
<span class="ll">}</span>
for<span class="ll">(</span>i=0;i&lt;r;i<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
for<span class="ll">(</span>j=0;j&lt;c;j<span class="ll">++</span><span class="ll">)</span><span class="ll">{</span>
<span class="return_type">if</span><span class="ll">(</span>i&lt;j<span class="ll">)</span><span class="ll">{</span>
printf<span class="ll">(</span>"uppertriangular element:%d"<span class="ll">,</span>a[i][j]<span class="ll">)</span><span class="ll">;</span>
s<span class="ll"><span class="ll">+=</span></span>a[i][j];
<span class="ll">}</span>
<span class="ll">}</span>
<span class="ll">}</span>
printf<span class="ll">(</span>"\n"<span class="ll">)</span><span class="ll">;</span>
printf<span class="ll">(</span>"Sumof uppertriangular element:%d"<span class="ll">,</span>s<span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>
 <span class="return_type">else</span>
     printf<span class="ll">(</span>"Sorry!!\n"<span class="ll">)</span><span class="ll">;</span>
  
<b>Output:</b>
Find sum of uppertriangular matrix
----------------------------------

Enter rows and column: 3 3

Enter matrix:
1 2 3
4 5 6
7 8 9

 upper triangular element is:2
 upper triangular element is:3
 upper triangular element is:6

Sumof upper triangular element is:11</p></pre><hr>

<p><p class="p">Write a program of Bubble Sort.</p><br>
<b>Solution:</b><pre>
<span class="header">#include&lt;stdio.h&gt;</span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
	<span class="return_type">int</span> i<span class="ll">,</span>j<span class="ll">,</span>t<span class="ll">,</span>n;
	printf<span class="ll">(</span>"Enter terms: "<span class="ll">)</span><span class="ll">;</span>
	scanf<span class="ll">(</span><span class="inner">"%d"</span><span class="return_type"><span class="ll"><span class="ll">,</span>&</span></span>n<span class="ll">)</span><span class="ll">;</span>
	<span class="return_type">int</span> a[n];
	printf<span class="ll">(</span>"enter array elements:\n"<span class="ll">)</span><span class="ll">;</span>
	for <span class="ll">(</span>i=0;i&lt;n;i<span class="ll">++</span><span class="ll">)</span>
	<span class="ll">{</span>
		scanf<span class="ll">(</span>"<span class="ll"><span class="ll">%</span></span>d"<span class="return_type"><span class="ll"><span class="ll">,</span>&</span></span>a[i]<span class="ll">)</span><span class="ll">;</span>
	<span class="ll">}</span>
	 for <span class="ll">(</span>i=0; i&lt;n;i<span class="ll">++</span><span class="ll">)</span>
	 <span class="ll">{</span>
	 	for <span class="ll">(</span>j=0;j&lt;n-i;j<span class="ll">++</span><span class="ll">)</span>
	 	<span class="ll">{</span>
	 		if <span class="ll">(</span>a[j]&lt;a[j+1]<span class="ll">)</span>
	 		<span class="ll">{</span>
	 			t=a[j];
	 			a[j]=a[j<span class="ll">+</span>1];
	 			a[j<span class="ll">+</span>1]=t;
	 		<span class="ll">}</span>
	 	<span class="ll">}</span>
	 <span class="ll">}</span>
	 printf<span class="ll">(</span>"sorted array is:\n"<span class="ll">)</span><span class="ll">;</span>
	 for <span class="ll">(</span>i=0;i&lt;n;i<span class="ll">++</span><span class="ll">)</span>
	 <span class="ll">{</span>
	 	printf<span class="ll">(</span>"<span class="ll"><span class="ll">%</span></span>d\n"<span class="ll">,</span>a[i]<span class="ll">)</span><span class="ll">;</span>
	 <span class="ll">}</span>
	 getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>

<b>Output:</b>
Enter terms: 5
enter array elementds:
5
3
8
4
7
sorted array is:
8
7
5
4
3</p></pre><hr>

<p><p class="p">Write a program of Selection Sort.</p><br>
<b>Solution:</b><pre>
<span class="header"><span class="header">#include&lt;stdio.h&gt;</span></span>
<span class="header">#include&lt;conio.h&gt;</span>
<span class="return_type">void</span> main<span class="ll">(</span><span class="ll">)</span>
<span class="ll">{</span>
	<span class="return_type">int</span> i<span class="ll">,</span>j<span class="ll">,</span>t<span class="ll">,</span>n;
	printf<span class="ll">(</span>"Enter terms: "<span class="ll">)</span><span class="ll">;</span>
	scanf<span class="ll">(</span>"<span class="ll"><span class="ll">%</span></span>d"<span class="return_type"><span class="ll"><span class="ll">,</span>&</span></span>n<span class="ll">)</span><span class="ll">;</span>
	<span class="return_type">int</span> a[n];
	printf<span class="ll">(</span>"enter array elements:\n"<span class="ll">)</span><span class="ll">;</span>
	for <span class="ll">(</span>i=0;i&lt;n;i<span class="ll">++</span><span class="ll">)</span>
	<span class="ll">{</span>
		scanf<span class="ll">(</span>"<span class="ll"><span class="ll">%</span></span>d"<span class="return_type"><span class="ll"><span class="ll">,</span>&</span></span>a[i]<span class="ll">)</span><span class="ll">;</span>
	<span class="ll">}</span>
	 for <span class="ll">(</span>i=0; i&lt;n;i<span class="ll">++</span><span class="ll">)</span>
	 <span class="ll">{</span>
	 	for <span class="ll">(</span>j=0;j&lt;n;j<span class="ll">++</span><span class="ll">)</span>
	 	<span class="ll">{</span>
	 		if <span class="ll">(</span>a[i]>a[j]<span class="ll">)</span>
	 		<span class="ll">{</span>
	 			t=a[i];
	 			 a[i]=a[j];
	 			 a[j]=t;
	 		<span class="ll">}</span>
	 	<span class="ll">}</span>
	 <span class="ll">}</span>
	 printf<span class="ll">(</span>"sorted array is:\n"<span class="ll">)</span><span class="ll">;</span>
	 for <span class="ll">(</span>i=0;i&lt;n;i<span class="ll">++</span><span class="ll">)</span>
	 <span class="ll">{</span>
	 	printf<span class="ll">(</span>"<span class="ll">%</span>d\n"<span class="ll">,</span>a[i]<span class="ll">)</span><span class="ll">;</span>
	 <span class="ll">}</span>
	 getch<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
<span class="ll">}</span>

<b>Output:</b>
Enter terms: 5
enter array element: 
5
6
7
8
9
sorted array is:
9
8
7
6
5</p></pre>

          </div>   
    </main><br><br><br><bR>
    
    <button class="whats" onclick="whats()"><i class="fab fa-whatsapp whatsapp-icon"></i></button>
    <!--<button class="goto" onclick="goto()">Go</button>-->
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
