<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>C++ Language</title>
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
        @keyf<span class="ll"><<</span>es fadeIn {
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
    .program{
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
    color:#008000;
    }
    .return_type{
    color:#0000cc;
    }
    .ll{
    color:red;
    }
    .c{
    color:#003380;
    }
    .p{
    color:#cc0066;
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
        <h2>Syllabus Of C++ Language</h2>
             <p><b>Introduction:</b> Introducing Object Oriented Approach, Procedural Programing Language Vs. Object Oriented Language, Basic concept of OOPS, Operators, Tokens, Variables, Keywords, Data types, Identifiers, Characters, Type def statement, Constants, Enumerated data type.
<BR><BR>
<B>Control Flow:</B> If statement, If else statement, Nested If, Else, Statements, For Loop, While Loop, While Loop, Break, Switch, Continue, goto. Classes and Objects, Encapsulation, information hiding, abstract data types, object & classes, attributes, methods, C++ class declaration, Constructors and destructors, Default parameter value, object types, C++ garbage collection, dynamic memory allocation, Metaclass/abstract classes.
<BR><BR>
<B>Array:</B> Array Illustration, Multi, Dimensional arrays, Strings, Array of strings, function prototype, function return data type, parameter passing, default argument, Inline function, Function Overloading, Array Function, Operator Overloading.
<BR><BR>
<B>Pointers:</B> Pointer to Derived Class, array of pointers, Inheritance and Polymorphism: Inheritance, Class hierarchy, derivation, public, private & protected, abstract classes, Single, Multilevel, Multiple, Hierarchical, Hybrid, benefits of Inheritance. 
<br><br>
<b>Files and Exception Handling: </b> Streams and files, Namespaces, Exception handling.<br>
        <div id="download">
            <h2>Download Notes of C++ Language</h2>
            <table border="2";>
                <tr class="notes">
                    <th>Hand Written Notes</th>
                    <th><a href="https://drive.google.com/uc?export=download&id=1Vxmv3meBAeGIwmAC7801SxqsEat8APcZ">Download</a></th>
                </tr>      
            </table>  
            <br><br>
        </div>
        <div class="download">
            <h2>Download Book of C++ language</h2>
            <table border="2">
                <tr class="book">
                  <th>C++ Books </th>
                  <th>Writter name</th>
                  <th>Download</th>
                </tr>
                <tr>
                   <td>Beginning C++ Programing</td>
                   <td>Richard Grimes</td>
                   <td><a href="cpp.pdf" download>Click Here</td>
                </tr>
            </table><br><br>
         </div>
         <div class="imp">
             <h2>Download the practical file of C++ language.</h2>
             <center><a href="https://drive.google.com/uc?export=download&id=16g0huWmK8EuhYJCcXgyb5ZwX8jfl48T5" download><button class="down">Download here</button></a></center><br>
         </div>
         <div class="pro">
            <h2>Click Here to topic to see these program</h2>
                <div class="list">
                    <table border="2">
                        <tr><td><a href="#1">If Statement<a/></td></tr>
                        <tr><td><a href="#2">If-Else Statement</a></td></tr>
                        <tr><td><a href="#3">For Loop</a></td></tr>
                        <tr><td><a href="#4">While Loop</a></td></tr>
                        <tr><td><a href="#5">Break Statement</a></td></tr>
                        <tr><td><a href="#6">Continue Statement</a></td></tr>
                        <tr><td><a href="#7">Switch Case</a></td></tr>
                        <tr><td><a href="#8">Class & Objects</a></td></tr>
                        <tr><td><a href="#9">Constructor</a></td></tr>
                        <tr><td><a href="#10">Destructor</a></td></tr>
                        <tr><td><a href="#11">Array</a></td></tr>
                        <tr><td><a href="#12">Function call by value</a></td></tr>
                        <tr><td><a href="#13">Function call by refrence</a></td></tr>
                        <tr><td><a href="#14">Function call by address</a></td></tr>
                        <tr><td><a href="#15">Function Overloading</a></td></tr>
                        <tr><td><a href="#16">Operator Overloading</a></td></tr>
                        <tr><td><a href="#17">Inline Function</a></td></tr>
                        <tr><td><a href="#18">Default Argument</a></td></tr>
                        <tr><td><a href="#19">Passing array an Object</a></td></tr>
                        <tr><td><a href="#20">Single Inheritance</a></td></tr>
                        <tr><td><a href="#21">Multilevel Inheritance</a></td></tr>
                        <tr><td><a href="#22">Namespace</a></td></tr>
                        <tr><td><a href="#23">Exception Handiling</a></td></tr> 
                    </table>
                </div>
          </div><br>
          <div class="program">
            <h2>Click Here to topic to see these program</h2>
              <div id="1">
              <pre><p>
<b>//If Statement</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header">  std<span class="ll">;</span><span class="ll"></span></span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Enter a number: "<span class="ll">;</span>
     <span class="header"><span class="header">cin</span></span>  <span class="ll">>></span> n<span class="ll">;</span>
     <span class="ll">if</span><span class="ll">(</span>n>0<span class="ll">)</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> "Hello"<span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre> </div><hr>
              <div id="2">
              <pre><p>
<b>//If-Else Statement</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Enter a number: "<span class="ll">;</span>
     <span class="header"><span class="header">cin</span></span> <span class="ll">>></span> n<span class="ll">;</span>
     <span class="ll">if</span><span class="ll">(</span>n>10<span class="ll">)</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> "N is: = " <span class="ll"><<</span> n<span class="ll">;</span>
     <span class="ll">}</span>
     <span class="c">else</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> "Welcome"<span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="3">
              <pre><p>
<b>//For Loop</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> i<span class="ll">,</span>n<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span>"Enter any number: "<span class="ll">;</span>
     <span class="header"><span class="header">cin</span></span>  <span class="ll">>></span> n<span class="ll">;</span>
     <span class="return_type">for</span><span class="ll">(</span>i=1<span class="ll">;</span>i<span class="ll"><=</span>n<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> i<span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="4">
              <pre><p>
<b>//While Loop</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> i=1<span class="ll">;</span>
     <span class="return_type">while</span><span class="ll">(</span>i<span class="ll"><=</span>9<span class="ll">)</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> i<span class="ll">;</span>
         i<span class="ll">++</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="5">
              <pre><p>
<b>// Break Statement</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">,</span>i<span class="ll">,</span>sum=0<span class="ll">;</span>
     <span class="return_type">for</span><span class="ll">(</span>i=0<span class="ll">;</span>i<span class="ll"><=</span>9<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> "Enter a number: "<span class="ll">;</span>
         <span class="header"><span class="header">cin</span></span>  <span class="ll">>></span> n<span class="ll">;</span>
        <span class="ll">if</span><span class="ll">(</span>n<span class="ll"><=</span>0<span class="ll">)</span>
        <span class="ll">{</span>
            <span class="return_type">break</span><span class="ll">;</span>
        <span class="ll">}</span>
        sum<span class="ll"><span class="ll"><span class="ll">+=</span></span></span>n<span class="ll">;</span>
     <span class="ll">}</span>
        <span class="header">cout</span> <span class="ll"><<</span>"Sum is: " <span class="ll"><<</span> sum<span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="6">
              <pre><p>
<b>// Continue Statement</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
      <span class="return_type">int</span> i<span class="ll">;</span>
     <span class="return_type">for</span><span class="ll">(</span>i=1<span class="ll">;</span>i<span class="ll"><=</span>9<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
        <span class="ll">if</span><span class="ll">(</span>i<span class="ll"<span class="ll">>=</span>=</span>3<span class="ll">)</span>
        <span class="ll">{</span>
            <span class="return_type">continue</span><span class="ll">;</span>
        <span class="ll">}</span>
        <span class="header">cout</span> <span class="ll"><<</span>" "<span class="ll"><<</span> i<span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
            </p></pre></div><hr>
            <div id="7">
            <pre><p>
<b>// Switch Case</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     char ch<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Enter any character: "<span class="ll">;</span>
     <span class="header"><span class="header">cin</span></span>  <span class="ll">>></span> ch<span class="ll">;</span>
     <span class="ll">if</span><span class="ll">(</span>ch<span class="ll">>=</span>'a' <span class="ll">&&</span> ch<span class="ll"><span class="ll">>=</span></span>'A'<span class="ll">)</span>
     <span class="ll">{</span>
         <span class="return_type">switch</span><span class="ll">(</span>ch<span class="ll">)</span>
         <span class="ll">{</span>
             <span class="return_type">case</span> 'a'<span class="ll">:</span>
             <span class="return_type">case</span> 'e'<span class="ll">:</span>
             <span class="return_type">case</span> 'i'<span class="ll">:</span>
             <span class="return_type">case</span> 'o'<span class="ll">:</span>
             <span class="return_type">case</span> 'u'<span class="ll">:</span>
             <span class="return_type">case</span> 'A'<span class="ll">:</span>
             <span class="return_type">case</span> 'E'<span class="ll">:</span>
             <span class="return_type">case</span> 'I'<span class="ll">:</span>
             <span class="return_type">case</span> 'O'<span class="ll">:</span>
             <span class="return_type">case</span> 'U'<span class="ll">:</span> <span class="header">cout</span> <span class="ll"><<</span> "Vowel"<span class="ll">;</span>
                       <span class="return_type">break</span><span class="ll">;</span>
             default<span class="ll">:</span> <span class="header">cout</span> <span class="ll"><<</span> "Consonant"<span class="ll">;</span>
         <span class="ll">}</span>
     <span class="ll">}</span>
     <span class="c">else</span>
        <span class="header">cout</span> <span class="ll"><<</span> "Not an character"<span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="8">
              <pre><p>
<b>//Class & Objects</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>

 <span class="return_type">class </span>A     
 <span class="ll">{</span>
     private<span class="ll">:</span> <span class="return_type">int</span> x<span class="ll">;</span>   
     <span class="p">public</span><span class="ll">:</span> <span class="return_type">void</span> slow<span class="ll">(</span><span class="ll">)</span>  
             <span class="ll">{</span>
                 <span class="header">cout</span> <span class="ll"><<</span> "Enter value: "<span class="ll">;</span>
                 <span class="header"><span class="header">cin</span></span>  <span class="ll">>></span> x<span class="ll">;</span>
                 <span class="header">cout</span> <span class="ll"><<</span> x<span class="ll">*</span>2<span class="ll">;</span>
             <span class="ll">}</span>
 <span class="ll">}</span><span class="ll">;</span>

 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     A z<span class="ll">;</span>  
     z.slow<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>  
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="9">
              <pre><p>
<b>// Constructor</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> n<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Enter a number: "<span class="ll">;</span>
     <span class="header">cin</span>  <span class="ll">>></span> n<span class="ll">;</span>
     <span class="ll">if</span><span class="ll">(</span>n>0<span class="ll">)</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> "Hello"<span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="10">
              <pre><p>
<b>// Destructor</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">class </span><span class="return_type">des</span>
 <span class="ll">{</span>
     <span class="p">public</span>: <span class="return_type">des</span><span class="ll">(</span><span class="ll">)</span>  //constructor
             <span class="ll">{</span>
                 <span class="header">cout</span> <span class="ll"><<</span> "Hello "<span class="ll">;</span>
             <span class="ll">}</span>
             <span class="ll">~</span><span class="return_type">des</span><span class="ll">(</span><span class="ll">)</span> //destructor
             <span class="ll">{</span>
                 <span class="header">cout</span> <span class="ll"><<</span> "Bye "<span class="ll">;</span>
             <span class="ll">}</span>
 <span class="ll">}</span><span class="ll">;</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">des</span> d1<span class="ll">,</span>d2<span class="ll">,</span>d3<span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="11">
              <pre><p>
<b>// Array</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
    <span class="return_type">int</span> a<span class="ll"><span class="ll">[</span></span>5<span class="ll"><span class="ll">]</span></span><span class="ll">,</span>i<span class="ll">;</span>
    <span class="return_type">for</span><span class="ll">(</span>i=0<span class="ll">;</span>i<5<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
       <span class="header">cout</span><span class="ll"><<</span> "Enter element a<span class="ll"><span class="ll">[</span></span>"<span class="ll"><<</span> i <span class="ll"><<</span>"<span class="ll"><span class="ll">]</span></span>:"<span class="ll">;</span>
       <span class="header">cin</span> <span class="ll">>></span> a<span class="ll"><span class="ll">[</span></span>i<span class="ll"><span class="ll">]</span></span><span class="ll">;</span>
    <span class="ll">}</span>
    <span class="header">cout</span> <span class="ll"><<</span> "You enter elements: "<span class="ll"><<</span> <span class="header">endl</span><span class="ll">;</span>
    <span class="return_type">for</span><span class="ll">(</span>i=0<span class="ll">;</span>i<5<span class="ll">;</span>i<span class="ll">++</span><span class="ll">)</span>
    <span class="ll">{</span>
        <span class="header">cout</span> <span class="ll"><<</span>" " <span class="ll"><<</span> a<span class="ll">[</span>i<span class="ll"><span class="ll">]</span></span><span class="ll">;</span>
    <span class="ll">}</span>
 <span class="ll">}</span>

            </p></pre></div><hr>
            <div id="12">
            <pre><p>
<b>// Function Call by value</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>

 <span class="return_type">void</span> fun<span class="ll">(</span><span class="return_type">int</span> p<span class="ll">)</span>
 <span class="ll">{</span>
     p = p+5<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> p<span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a=5<span class="ll">;</span>
     fun<span class="ll">(</span>a<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="13">
              <pre><p>
<b>// Function Call by refrence</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>

 <span class="return_type">void</span> fun<span class="ll">(</span><span class="return_type">int</span> <span class="ll">&</span>b<span class="ll">)</span>
 <span class="ll">{</span>
     b = b <span class="ll">*</span> 5<span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a=5<span class="ll">;</span>
     <span class="return_type">int</span> <span class="ll">&</span>b = a<span class="ll">;</span>
     fun<span class="ll">(</span>a<span class="ll">)</span><span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> a<span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="14">
              <pre><p>
<b>// Function Call By Address</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">void</span> fun<span class="ll">(</span><span class="return_type">int</span> <span class="ll">*</span>p<span class="ll">)</span>
 <span class="ll">{</span>
     <span class="ll">*</span>p = <span class="ll">*</span>p +5<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> p<span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a = 5<span class="ll">;</span>
     fun<span class="ll">(</span>&a<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="15">
              <pre><p>
<b>// Function Overloading</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>

 <span class="return_type">void</span> add<span class="ll">(</span><span class="return_type">int</span><span class="ll">,</span> <span class="return_type">int</span><span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">void</span> add<span class="ll">(</span><span class="return_type">int</span><span class="ll">,</span> <span class="return_type">int</span><span class="ll">,</span> <span class="return_type">int</span><span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a<span class="ll">,</span>b<span class="ll">,</span>c<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Enter value of a<span class="ll">,</span>b<span class="ll">,</span>c: "<span class="ll">;</span>
     <span class="header">cin</span>  <span class="ll">>></span> a <span class="ll">>></span> b <span class="ll">>></span> c<span class="ll">;</span>
     add<span class="ll">(</span>a<span class="ll">,</span>b<span class="ll">)</span><span class="ll">;</span>
     add<span class="ll">(</span>a<span class="ll">,</span>b<span class="ll">,</span>c<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">void</span> add<span class="ll">(</span><span class="return_type">int</span> x<span class="ll">,</span> <span class="return_type">int</span> y<span class="ll">)</span>
 <span class="ll">{</span>
     <span class="header">cout</span> <span class="ll"><<</span> x+y <span class="ll"><<</span> <span class="header">endl</span><span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">void</span> add<span class="ll">(</span><span class="return_type">int</span> x<span class="ll">,</span> <span class="return_type">int</span> y<span class="ll">,</span> <span class="return_type">int</span> z<span class="ll">)</span>
 <span class="ll">{</span>
     <span class="header">cout</span> <span class="ll"><<</span> x+y+z <span class="ll"><<</span><span class="header">endl</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id=16">
              <pre><p>
<b>// Operator Overloading</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">class </span>A
 <span class="ll">{</span>
    <span class="return_type">int</span> x<span class="ll">,</span>y<span class="ll">;</span>
    <span class="p">public</span>: <span class="return_type">void</span> input<span class="ll">(</span><span class="ll">)</span>
            <span class="ll">{</span>
                <span class="header">cout</span> <span class="ll"><<</span> "Enter value: "<span class="ll">;</span>
                <span class="header">cin</span>  <span class="ll">>></span> x<span class="ll">;</span>
                <span class="header">cout</span> <span class="ll"><<</span> "Enter value: "<span class="ll">;</span>
                <span class="header">cin</span>  <span class="ll">>></span> y<span class="ll">;</span>
            <span class="ll">}</span>
            <span class="return_type">void</span> display<span class="ll">(</span><span class="ll">)</span>
            <span class="ll">{</span>
            <span class="header">cout</span> <span class="ll"><<</span> x <span class="ll"><<</span> <span class="header">endl</span> <span class="ll"><<</span> y <span class="ll"><<</span> <span class="header">endl</span><span class="ll">;</span>
            <span class="ll">}</span>
            <span class="return_type">void</span> operator - <span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span><span class="ll">;</span>
 <span class="return_type">void</span> A<span class="ll">:</span><span class="ll">:</span>operator - <span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     x = -x<span class="ll">;</span>
     y = -y<span class="ll">;</span>
 <span class="ll">}</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     A z<span class="ll">;</span>
     z.input<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
     z.display<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
     -z<span class="ll">;</span>
     z.display<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="17">
              <pre><p>
<b>// Inline Function</b><br>
<span class="header">#include&lt;iostream&gt;</span>
  <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>

 <span class="return_type">int</span> add<span class="ll">(</span><span class="return_type">int</span><span class="ll">,</span> <span class="return_type">int</span><span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a<span class="ll">,</span>b<span class="ll">,</span>ad<span class="ll">;</span>
     a = 10<span class="ll">;</span>
     b = 5<span class="ll">;</span>
     ad = add<span class="ll">(</span>a<span class="ll">,</span>b<span class="ll">)</span><span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> ad<span class="ll">;</span>
 <span class="ll">}</span>

 <span class="p">inline</span> <span class="return_type">int</span> add<span class="ll">(</span><span class="return_type">int</span> x<span class="ll">,</span> <span class="return_type">int</span> y<span class="ll">)</span>
 <span class="ll">{</span>
     <span class="ll">return</span><span class="ll">(</span>x+y<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="18">
              <pre><p>
<b>// Default Argument</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">void</span> add<span class="ll">(</span><span class="return_type">int</span> x<span class="ll">,</span> <span class="return_type">int</span> y<span class="ll">,</span> <span class="return_type">int</span> z=20<span class="ll">)</span><span class="ll">;</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a<span class="ll">,</span>b<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Enter values: "<span class="ll">;</span>
     <span class="header">cin</span>  <span class="ll">>></span> a <span class="ll">>></span> b<span class="ll">;</span>
     add<span class="ll">(</span>a<span class="ll">,</span>b<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>

 <span class="return_type">void</span> add<span class="ll">(</span><span class="return_type">int</span> x<span class="ll">,</span> <span class="return_type">int</span> y<span class="ll">,</span> <span class="return_type">int</span> z<span class="ll">)</span>
 <span class="ll">{</span>
     <span class="header">cout</span> <span class="ll"><<</span> x + y + z<span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="19">
              <pre><p>
<b>// Passing Array an Object</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">class </span>power
 <span class="ll">{</span>
    <span class="return_type">int</span> i<span class="ll">;</span>
    <span class="p">public</span>: <span class="return_type">void</span> pod<span class="ll">(</span><span class="ll">)</span>
            <span class="ll">{</span>
                <span class="header">cin</span>  <span class="ll">>></span> i<span class="ll">;</span>
            <span class="ll">}</span>
            <span class="return_type">void</span> show<span class="ll">(</span><span class="ll">)</span>
            <span class="ll">{</span>
                <span class="header">cout</span> <span class="ll"><<</span> i <span class="ll">;</span>
            <span class="ll">}</span>
 <span class="ll">}</span><span class="ll">;</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> m<span class="ll">;</span>
     power ob<span class="ll">[</span>5<span class="ll"><span class="ll">]</span></span><span class="ll">;</span>
     <span class="return_type">for</span><span class="ll">(</span>m=0 <span class="ll">;</span> m&lt<span class="ll">;</span>5 <span class="ll">;</span> m<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> "Enter number: "<span class="ll">;</span>
         ob<span class="ll">[</span>m<span class="ll"><span class="ll">]</span></span>.pod<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     <span class="return_type">for</span><span class="ll">(</span> m=0 <span class="ll">;</span> m&lt<span class="ll">;</span>5 <span class="ll">;</span> m<span class="ll">++</span><span class="ll">)</span>
     <span class="ll">{</span>
         ob<span class="ll">[</span>m<span class="ll"><span class="ll">]</span></span>.show<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="20">
              <pre><p>
<b>// Single Inheritance</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">class </span>A
 <span class="ll">{</span>
     <span class="p">public</span><span class="ll">:</span> <span class="return_type">int</span> a<span class="ll">,</span>b<span class="ll">;</span>
 <span class="ll">}</span><span class="ll">;</span>
 <span class="return_type">class </span>B<span class="ll">:</span> <span class="p">public</span> A
 <span class="ll">{</span>
    <span class="p">public</span><span class="ll">:</span> <span class="return_type">void</span> add<span class="ll">(</span><span class="ll">)</span>
            <span class="ll">{</span>
              <span class="header">cout</span><span class="ll"><<</span> "Enter value of a: "<span class="ll">;</span>
              <span class="header">cin</span> <span class="ll">>></span> a<span class="ll">;</span>
              <span class="header">cout</span><span class="ll"><<</span> "Enter value of b: "<span class="ll">;</span>
              <span class="header">cin</span> <span class="ll">>></span> b<span class="ll">;</span>
              <span class="header">cout</span><span class="ll"><<</span> a + b<span class="ll">;</span>
            <span class="ll">}</span>
 <span class="ll">}</span><span class="ll">;</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     B ob<span class="ll">;</span>
     ob.add<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="21">
              <pre><p>
<b>// Multilevel Inheritance</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std<span class="ll">;</span></span>
 <span class="return_type">class </span>student
 <span class="ll">{</span>
     protected<span class="ll">:</span> <span class="return_type">int</span> roll_number<span class="ll">;</span>
     <span class="p">public</span>   <span class="ll">:</span> <span class="return_type">void</span> get_number<span class="ll">(</span><span class="return_type">int</span><span class="ll">)</span><span class="ll">;</span>
             <span class="return_type">void</span> put_number<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span><span class="ll">;</span>
 <span class="return_type">void</span> student<span class="ll">:</span><span class="ll">:</span>get_number<span class="ll">(</span><span class="return_type">int</span> a<span class="ll">)</span>
 <span class="ll">{</span>
     roll_number = a<span class="ll">;</span>
 <span class="ll">}</span>
 <span class="return_type">void</span> student<span class="ll">:</span><span class="ll">:</span>put_number<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
    <span class="header">cout</span><span class="ll"><<</span> "Roll number: "<span class="ll"><<</span>roll_number<span class="ll"><<</span>\n<span class="ll">;</span>
 <span class="ll">}</span>
 <span class="return_type">class </span>test<span class="ll">:</span> <span class="p">public</span> student
 <span class="ll">{</span>
     protected<span class="ll">:</span> float sub1<span class="ll">,</span> sub2<span class="ll">;</span>
     <span class="p">public</span>   <span class="ll">:</span> <span class="return_type">void</span> get_marks<span class="ll">(</span>float<span class="ll">,</span> float<span class="ll">)</span><span class="ll">;</span>
                <span class="return_type">void</span> put_marks<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span><span class="ll">;</span>
 <span class="return_type">void</span> test<span class="ll">:</span><span class="ll">:</span>get_marks<span class="ll">(</span>float x<span class="ll">,</span> float y<span class="ll">)</span>
 <span class="ll">{</span>
     sub1 = x<span class="ll">;</span>
     sub2 = y<span class="ll">;</span>
 <span class="ll">}</span>
 <span class="return_type">void</span> test<span class="ll">:</span><span class="ll">:</span>put_marks<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Marks in Sub1: " <span class="ll"><<</span>sub1<span class="ll"><<</span>\n<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Marks in Sub2: " <span class="ll"><<</span>sub2<span class="ll"><<</span>\n<span class="ll">;</span>
 <span class="ll">}</span>
 <span class="return_type">class </span>result<span class="ll">:</span> <span class="p">public</span> test
 <span class="ll">{</span>
     float total<span class="ll">;</span>
     <span class="p">public</span><span class="ll">:</span> <span class="return_type">void</span> display<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span><span class="ll">;</span>
 <span class="return_type">void</span> result<span class="ll">:</span><span class="ll">:</span>display<span class="ll">(</span><span class="ll">)</span>
 <span class="ll">{</span>
     total = sub1 + sub2<span class="ll">;</span>
     put_number<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
     put_marks<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Total: "<span class="ll"><<</span> total <span class="ll"><<</span> <span class="header">endl</span><span class="ll">;</span>
 <span class="ll">}</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     result student1<span class="ll">;</span>
     student1.get_number<span class="ll">(</span>111<span class="ll">)</span><span class="ll">;</span>
     student1.get_marks<span class="ll">(</span>52 <span class="ll">,</span> 8.0<span class="ll">)</span><span class="ll">;</span>
     student1.display<span class="ll">(</span><span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
              </p></pre></div><hr>
              <div id="22">
              <pre><p>
<b>//Namespace</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header"> std</span><span class="ll">;</span>
 <span class="return_type">namespace</span> <span class="header">test</span>
 <span class="ll">{</span>
     <span class="return_type">int</span> m = 10<span class="ll">;</span>
     <span class="return_type">void</span> display<span class="ll">(</span><span class="return_type">int</span> z<span class="ll">)</span>
     <span class="ll">{</span>
          <span class="header">cout</span> <span class="ll"><<</span>"Value is: " <span class="ll"><<</span> z <span class="ll"><<</span> <span class="header">endl</span><span class="ll">;</span>
     <span class="ll">}</span>
 <span class="ll">}</span>
 <span class="return_type">using namespace</span><span class="header">test</span><span class="ll">;</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     display<span class="ll">(</span>m<span class="ll">)</span><span class="ll">;</span>
 <span class="ll">}</span>
          </p></pre></div><hr>
          <div id="23">
              <pre><p>
<b>//Exception Handling</b><br>
<span class="header">#include&lt;iostream&gt;</span>
 <span class="return_type">using namespace</span><span class="header">std</span>
 <span class="return_type">int</span> main<span class="ll"><span class="ll">(</span><span class="ll">)</span></span>
 <span class="ll">{</span>
     <span class="return_type">int</span> a<span class="ll">,</span>b<span class="ll">,</span>x<span class="ll">;</span>
     <span class="header">cout</span> <span class="ll"><<</span> "Enter a & b: "<span class="ll">;</span>
     <span class="header">cin</span>  <span class="ll">>></span> a <span class="ll">>></span> b<span class="ll">;</span>
     <span class="return_type">try</span>
     <span class="ll">{</span>
         x = a - b<span class="ll">;</span>
         <span class="ll">if</span><span class="ll">(</span>x<span class="ll"><span class="ll"><span class="ll">!=</span></span></span>0<span class="ll">)</span>
         <span class="ll">{</span>
             <span class="header">cout</span> <span class="ll"><<</span> a/x<span class="ll">;</span>
         <span class="ll">}</span>
         <span class="c"><span class="c">else</span></span>
            <span class="return_type">throw</span><span class="ll">(</span>x<span class="ll">)</span><span class="ll">;</span>
     <span class="ll">}</span>
     <span class="return_type">catch</span><span class="ll">(</span><span class="return_type">int</span> k<span class="ll">)</span>
     <span class="ll">{</span>
         <span class="header">cout</span> <span class="ll"><<</span> <span class="header">endl</span> <span class="ll"><<</span> "Exception Caught"<span class="ll">;</span>
     <span class="ll">}</span>
     <span class="header">cout</span> <span class="ll"><<</span> <span class="header">endl</span> <span class="ll"><<</span> "End of the program"<span class="ll">;</span>
 <span class="ll">}</span>
          </p></pre></div><hr>
          </div>  
          </div> 
    </main><br><br><br><br><br><br><br><br>
    
    <button class="whats" onclick="whats()"><i class="fab fa-whatsapp whatsapp-icon"></i></button>
    <button class="goto" onclick="goto()">Go</button>

    <footer>
        <!-- Add footer content<span class="ll">,</span> copyright information, etc. -->
        &copy; 2023 SabkaCode. All rights reserved.
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
