<!DOCTYPE html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="sagar1.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>
           .form{
                   width:90%;
                   height:90%;
                   display:flex;
                   align:items:center;
                   justify-content:center;
                  }

             .form{
                   background:#fff;
                   display:flex;
                   flex-direction:column; 
                   width: 90%;
                   padding:4vw 4vw;
                   margin-top:200px;
                   height:600px;
                   border-radius:20px;
                  }
                  
            
                .form input{
                    width:100%;
                }

             form input, form textarea{
                                        width:100%;
                                        border:0;
                                        margin:5px 0;                  
                                        padding:20px;
                                        outline:none;
                                        background:#f5f5f5;
                                        font-size:14px;
                                      }   
            .form button{
                          padding:20px;
                          background:#ff5361;
                          color: #fff;
                          font-size:18px;
                          border:0;
                          outline:none;
                          cursor:pointer;  
                          width:100%;
                          margin:10px auto -50px;
                          border-radius:30px;
                       }   

            form h2{
                      color:#555;
                      front-weigth:500;
                      margin-top:-125px;
                      margin-bottom:15px;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <nav class="navbar">
                <a href="https://dj.000.pe/old/l.php">Home</a>
                <a href="_notice1.php">Notice</a>
                <a href="_contact1.php">Contact</a>
               
            </nav>

            <form action="#" class="search-bar">
                <input type="text" placeholder="Search....">
                <button type="submit"><i class='bx bx-search'></i></button>
            </form>
        </header>
        <div class="background"></div>
        <div class="contanier">
           <div class="content">
                <h2 class="logo"><i class='bx bxl-flutter'></i>Sabka Code<p class="p"></p></h2>

            <div class="text-sci">
                <h2>Welcome!<br><span>To Our New Website.</span></h2>
                <p>Learn and Study the Code</p>

                <div class="social-icons">
                         <!--<a href="#"><i class='bx bxl-linkedin'></i></a>-->
                        <a href="https://www.facebook.com/profile.php?id=100094393995814&mibextid=ZbWKwL"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/sabkacode/"><i class='bx bxl-instagram'></i></a>
                        <a href="https://twitter.com/sabkacode"><i class='bx bxl-twitter'></i></a>
                    </div>
            </div>
           </div>

            <div class="logreg-box">
                 <div class="form-box login">
                    <div class="form">
                        <form id="my-form" action = "https://formspree.io/f/moqzzyvq" method="POST">
                            <h2> Get In Touch</h2>
                            <input type="text" id="name" placeholder="Name"  name="name" required>
                            <input type="tel" id="phone" placeholder="Phone No." name="phone" required>
                            <input type="email" id="email" placeholder="Email Id" name="email" required>
                            <textarea name="message" id="message" rows="2" placeholder="How can we help you?"></textarea>
                            
                            <p id="my-form-status"></p>
                            <button id="my-form-button" type="submit">SUBMIT</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="sagar.js"></script>
        <script src="kala.js"></script>
    </body>
</html>
