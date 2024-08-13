<?php
error_reporting(0);
session_start();
echo'
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="https://dj.000.pe/talksta">Talk Sta</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://dj.000.pe/talksta">Home <span class="sr-only">(current)</span></a>
        </li>
          <!--<li class="nav-item"> 
              <a class="nav-link" href="#">Features</a>
          </li> -->
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Top Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
          $sql = "SELECT category_name, category_id FROM `categories` ";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
            echo '<a class="dropdown-item" href="https://dj.000.pe/talksta/threads.php?subid='.$row['category_id'].' ">'.$row['category_name'].'</a>';
          }
          echo'
            <!-- <div class="dropdown-divider"></div> -->
            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://dj.000.pe">SabkaCode</a>
            <a class="dropdown-item" href="http://htmlify.artizote.com">HTMLify</a>
            <a class="dropdown-item" href="http://artizote.com">ArtiZote</a>
            <!-- <div class="dropdown-divider"></div> -->
            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
        <li class="nav-item"> 
              <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
        <!-- </li> -->
      </ul>';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM `user` WHERE `user_id` = '$id' ";
        $r = mysqli_query($conn, $query);
        if(mysqli_num_rows($r) > 0){
          $ro = mysqli_fetch_assoc($r);
          $type = $ro['type'];
          if($type == 'admin'){
            echo'
              <button class="btn btn-outline-success ml-2"  data-toggle="modal" data-target="#addModal" title="Add More Categories">Add</button>
            ';
          }
          elseif($type == 'user'){
              echo'
              <button class="btn btn-outline-success ml-2"  data-toggle="modal" data-target="#add" title="Add More Categories">Add</button>
            ';
          }
        }
      }
      
      echo'
      <div class="row m-2">
      <form class="form-inline my-2 my-lg-0" method="GET" action="https://dj.000.pe/talksta/search.php">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search" required>
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      ';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
          echo'
            <form style="display:flex;">
              <p class="text-light my-1 ml-1"><a style="text-decoration: none; color:white;" href="https://dj.000.pe/talksta/profiles">Welcome '. $_SESSION['user_name'].'</a></p>
              <a href="https://dj.000.pe/talksta/logout.php" class="btn btn-outline-success ml-2" >Logout</a>
            </form>
          ';
      }
      else{
        echo'
          <button class="btn btn-outline-success ml-2"  data-toggle="modal" data-target="#loginModal">Login</button>
          <button class="btn btn-outline-success mx-2"  data-toggle="modal" data-target="#signupModal">SignUp</button>       
        ';
      }
      echo'
      </div>
    </div>
  </nav>
';
include 'login.php';
include 'signup.php';
include 'add.php';
include '../add.html';
?>
