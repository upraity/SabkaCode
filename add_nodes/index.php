<?php
session_start();
// if(!isset($_SESSION['loggedin'])){
//     header("location: https://dj.000.pe/quizzyloop/index1.php");
// }
?>
<?php

    $add    = false;
    $update = false;
    $delete = false;
    // Connecting to the Db
    $servername = "sql202.infinityfree.com";
$username = "epiz_34301861";
$password = "jVGDaC5ddKyKJnd";
$database = "epiz_34301861_nodes";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die('Connection fail!!'.mysqli_connect_error());
    }
    else{
    //echo "Connection was successful";
    }

    // echo $_POST['snoEdit'];
    // echo $_GET['update'];
    // exit();

    if(isset($_GET['delete'])){
      $sno = $_GET['delete'];
      $delete = true;

      $sql = "DELETE FROM `nodes` WHERE `sno` = '$sno' ";
      $result = mysqli_query($conn, $sql);

      //redirection
      header('refresh:1;url=http://dj.000.pe/add_node');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      if (isset($_POST['snoEdit'])){
        //Update the record
        $sno = $_POST['snoEdit'];
        $name  = $_POST['nameEdit']; 
        $title = $_POST['titleEdit'];
        $desc  = $_POST['descEdit'];

       $name = str_replace("&", "&amp;", $name); //senitization 
        $name = str_replace("<", "&lt;",  $name); //senitization 
        $name = str_replace(">", "&gt;",  $name); //senitization  
        $name = str_replace("'", "&apos;", $name); //senitization
        $name = str_replace('"', "&yen;", $name); //senitization  
        $name = str_replace("¢", "&cent;", $name); //senitization 
        $name = str_replace("£", "&pound;",$name); //senitization  
        $name = str_replace("¥", "&yen;" , $name); //senitization 
        $name = str_replace("©", "&copy;", $name); //senitization 
        $name = str_replace("€", "&euro;", $name); //senitization 
        $name = str_replace("®", "&reg;",  $name); //senitization 

        $desc = str_replace("&", "&amp;", $desc); //senitization 
        $desc = str_replace("<", "&lt;",  $desc); //senitization 
        $desc = str_replace(">", "&gt;",  $desc); //senitization 
        $desc = str_replace("'", "&apos;", $desc); //senitization
        $desc = str_replace('"', "&yen;" , $desc); //senitization  
        $desc = str_replace("¢", "&cent;", $desc); //senitization 
        $desc = str_replace("£", "&pound;",$desc); //senitization  
        $desc = str_replace("¥", "&yen;" , $desc); //senitization 
        $desc = str_replace("©", "&copy;", $desc); //senitization 
        $desc = str_replace("€", "&euro;", $desc); //senitization 
        $desc = str_replace("®", "&reg;",  $desc); //senitization 

        $title = str_replace("&", "&amp;"  ,$title); //senitization 
        $title = str_replace("<", "&lt;"   ,$title); //senitization 
        $title = str_replace(">", "&gt;"   ,$title); //senitization
        $title = str_replace("'", "&apos;" ,$title); //senitization
        $title = str_replace('"', "&yen;"  ,$title); //senitization  
        $title = str_replace("¢", "&cent;" ,$title); //senitization 
        $title = str_replace("£", "&pound;",$title); //senitization  
        $title = str_replace("¥", "&yen;"  ,$title); //senitization 
        $title = str_replace("©", "&copy;" ,$title); //senitization 
        $title = str_replace("€", "&euro;" ,$title); //senitization 
        $title = str_replace("®", "&reg;"  ,$title); //senitization 

        $sql = "UPDATE `nodes` SET `name` = '$name' , `title` = '$title' , `desc` = '$desc' WHERE `sno` = '$sno' ";
        $result = mysqli_query($conn, $sql);

        if($result){
          // echo "<br>Record updated successfully";
          $update = true;
      }
      // else{
      //     echo "<br>Record could not update";
      // }
      }
      else{
        $name  = $_POST['name']; 
        $title = $_POST['title'];
        $desc  = $_POST['desc'];

        $name = str_replace("&", "&amp;", $name); //senitization 
        $name = str_replace("<", "&lt;",  $name); //senitization 
        $name = str_replace(">", "&gt;",  $name); //senitization  
        $name = str_replace("'", "&apos;", $name); //senitization
        $name = str_replace('"', "&yen;", $name); //senitization  
        $name = str_replace("¢", "&cent;", $name); //senitization 
        $name = str_replace("£", "&pound;",$name); //senitization  
        $name = str_replace("¥", "&yen;" , $name); //senitization 
        $name = str_replace("©", "&copy;", $name); //senitization 
        $name = str_replace("€", "&euro;", $name); //senitization 
        $name = str_replace("®", "&reg;",  $name); //senitization 

        $desc = str_replace("&", "&amp;", $desc); //senitization 
        $desc = str_replace("<", "&lt;",  $desc); //senitization 
        $desc = str_replace(">", "&gt;",  $desc); //senitization 
        $desc = str_replace("'", "&apos;", $desc); //senitization
        $desc = str_replace('"', "&yen;" , $desc); //senitization  
        $desc = str_replace("¢", "&cent;", $desc); //senitization 
        $desc = str_replace("£", "&pound;",$desc); //senitization  
        $desc = str_replace("¥", "&yen;" , $desc); //senitization 
        $desc = str_replace("©", "&copy;", $desc); //senitization 
        $desc = str_replace("€", "&euro;", $desc); //senitization 
        $desc = str_replace("®", "&reg;",  $desc); //senitization 

        $title = str_replace("&", "&amp;"  ,$title); //senitization 
        $title = str_replace("<", "&lt;"   ,$title); //senitization 
        $title = str_replace(">", "&gt;"   ,$title); //senitization
        $title = str_replace("'", "&apos;" ,$title); //senitization
        $title = str_replace('"', "&yen;"  ,$title); //senitization  
        $title = str_replace("¢", "&cent;" ,$title); //senitization 
        $title = str_replace("£", "&pound;",$title); //senitization  
        $title = str_replace("¥", "&yen;"  ,$title); //senitization 
        $title = str_replace("©", "&copy;" ,$title); //senitization 
        $title = str_replace("€", "&euro;" ,$title); //senitization 
        $title = str_replace("®", "&reg;"  ,$title); //senitization 

        $sql = "INSERT INTO `nodes` (`name`, `title`, `desc`) VALUES ('$name', '$title', '$desc')";
        $result = mysqli_query($conn, $sql);

        if($result){
            $add = true;
        }
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <title>Add Points/Tasks/Information</title>
  </head>
  <body>
  <div class="modal" id="editModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update your Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
        <div class="modal-body">
          <input type="hidden" name="snoEdit" id="snoEdit">
          <div class="form-group mt-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="nameEdit" name = "nameEdit" aria-describedby="emailHelp" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="titleEdit" name = "titleEdit" aria-describedby="emailHelp" placeholder="Enter your title" required>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="desc">Desc</label>
            <textarea rows="5" class="form-control" name = "descEdit" id="descEdit" placeholder="Enter your desc" required></textarea>
          </div>
          <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
          <!-- <button type="submit" class="btn btn-primary">Update</button> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">SabkaCode</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://htmlify.artizote.com">HTMLify</a>
          <!--<a class="dropdown-item" href="#"></a>-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Feedback</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/upraity">Github</a>
      </li>
      <li class="nav-item">
        <!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
    if($add){
        echo '
        <div class="alert alert-success alert-success fade show" role="alert">
        <strong>Success!!</strong> Your data have been inserted successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        ';
    }

        if($update){
          echo '
          <div class="alert alert-success alert-success fade show" role="alert">
          <strong>Success!!</strong> Your data have been updated successfully.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          ';
    }
     if($delete){
         echo '
         <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Success!</strong> Your data have  been  deleted successfully .
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
         ';
     }
?>
<div class="container mt-3">

<form action="" method="POST">
  <h2>Add your Data</h2>
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "name" aria-describedby="emailHelp" placeholder="Enter your name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "title" aria-describedby="emailHelp" placeholder="Enter your title" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Desc</label>
    <textarea rows="5" class="form-control" name = "desc" id="exampleInputPassword1" placeholder="Enter your desc" required></textarea>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Add</button>
</form>
<table style="width:100%;" class="table mt-5" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT * FROM `nodes` ";
        $result = mysqli_query($conn, $sql);
        $sno = 0;
        while($row = mysqli_fetch_assoc($result)){
          $sno++;
            echo '
                <tr>
                    <th scope="row">'.$sno.'</th>
                    <td>'.$row['name'].'</td>
                    <td>'.$row["title"].'</td>
                    <td>'.$row["desc"].'</td>
                    <td>'.$row["data-time"].'</td>
                    <td><button id='.$row['sno'].' class="edit btn btn-sn btn-primary">Edit</button>
                    <button id=d'.$row['sno'].' class="delete btn btn-sn btn-primary">Delete</button></td>
                    </tr>
            ';
        }
        ?>
  </tbody>
</table> 

</div>
<hr>
<!-- <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous">
</script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script>
        // $(document).ready( function () {
        //     $('#myTable').DataTable();
        // })
        let table = new DataTable('#myTable');
    </script>
    <script>
      edit = document.getElementsByClassName('edit');
      Array.from(edit).forEach((element)=>{
        element.addEventListener("click", (e)=>{
          console.log("edit ", );
          tr = e.target.parentNode.parentNode;
          name = tr.getElementsByTagName("td")[0].innerText;
          title = tr.getElementsByTagName("td")[1].innerText;
          desc = tr.getElementsByTagName("td")[2].innerText;

          console.log(name, title, desc);
          nameEdit.value = name;
         titleEdit.value = title;
          descEdit.value = desc;
          snoEdit.value = e.target.id;
          console.log(e.target.id);
          $('#editModal').modal('toggle');
        })
      })  

      delet = document.getElementsByClassName('delete');
      Array.from(delet).forEach((element)=>{
        element.addEventListener("click", (e)=>{
        console.log("edit ", );
        sno = e.target.id.substr(1,)
        // tr = e.target.parentNode.parentNode;
        // name = tr.getElementsByTagName("td")[0].innerText;
        // title = tr.getElementsByTagName("td")[1].innerText;
        // desc = tr.getElementsByTagName("td")[2].innerText;

        if(confirm("Are you sure you want to delete this data!")){
          console.log("yes");
          window.location = `?delete=${sno}`;
        }
        else{
          console.log("no");
        }

        //   console.log(name, title, desc);
        //   nameEdit.value = name;
        //  titleEdit.value = title;
        //   descEdit.value = desc;
        //   snoEdit.value = e.target.id;
        //   console.log(e.target.id);
        //   $('#editModal').modal('toggle');
        })
      })  
    </script>
  </body>
</html>
