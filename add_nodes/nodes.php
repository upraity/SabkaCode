<?php 
$insert = false; 
$update = false; 
$delete = false; 
 
 
$servername = "sql202.infinityfree.com"; 
$username = "epiz_34301861"; 
$password = "jVGDaC5ddKyKJnd";//"Mohitshakya123"; 
$database = "epiz_34301861_nodes"; 
 
$conn = mysqli_connect($servername, $username, $password, $database); 
if(!$conn){ 
die("sorry we failed to connect: " . mysqli_connect_error()); 
}
//  else{
    //  echo "success";
//  }
 
if(isset($_GET['delete'])){ 
  $sno = $_GET['delete']; 
  $delete = true; 
//   echo $sno; 
  $sql = "delete from `nodes` where `sno` = '$sno'"; 
  $result = mysqli_query($conn , $sql); 
//   echo $result; 
//   header('refresh:1;url=')
} 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
  if(isset($_POST['snoEdit'])){ 
    $sno = $_POST['snoEdit']; 
    $title = $_POST['titleEdit'];     
    $desc = $_POST['descEdit']; 
     
  $sql = "UPDATE `nodes` SET `title` = '$title', `desc` = '$desc' WHERE `sno` = '$sno'"; 
  $result = mysqli_query($conn , $sql); 
  if($result){ 
    //echo "record inserted sucsess fully"; 
    $update=true; 
  } 
//   else{ 
    // echo "Not updated"; 
//   } 
  } 
  else{ 
      $title = $_POST['title']; 
      $desc = $_POST['desc']; 

  $sql = "insert into `nodes` (`title`, `desc`) values('$title' , '$desc')"; 
  $result = mysqli_query($conn , $sql); 
  if($result){ 
      $insert = true;//echo "The record was inserted successfully <br>"; 
  } 
//   else{ 
    // //   echo "The record was not inserted successsfully -- >" . mysqli_error($conn); 
//   } 
  } 
} 
 
 
 
?> 
 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
 
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
      <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css"> 
       
       
 
    <title>Project 1 - php project</title> 
     
  </head> 
  <body> 
 
  <!-- Button trigger modal --> 
<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal"> 
Edit Modal 
</button--> 
 
<!-- Modal --> 
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
      <div class="modal-header"> 
        <h5 class="modal-title" id="editModalLabel">Edit this Node</h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span> 
        </button> 
      </div> 
      <div class="modal-body"> 
      <form action="" method="POST"> 
        <input type="hidden" name="snoEdit" id="snoEdit"> 
 
        <div class="form-group"> 
          <label for="title">Note Title</label> 
          <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp"> 
 
        </div> 
 
        <div class="form-group"> 
          <label for="desc">Note Description</label> 
          <textarea class="form-control" id="descEdit" name="descEdit"  rows="3"></textarea> 
        </div> 
        <button type="submit" class="btn btn-primary">Update Node</button> 
      </form>
</div> 
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        <button type="button" class="btn btn-primary">Save changes</button> 
      </div> 
    </div> 
  </div> 
</div> 
     
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
  <a class="navbar-brand" href="#">PHP</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
    <span class="navbar-toggler-icon"></span> 
  </button> 
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav mr-auto"> 
      <li class="nav-item active"> 
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> 
      </li> 
      <li class="nav-item"> 
        <a class="nav-link" href="#">About</a> 
      </li> 
      <li class="nav-item"> 
        <a class="nav-link" href="#">Contect us</a> 
      </li> 
      <li class="nav-item dropdown"> 
         
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
          <a class="dropdown-item" href="#">Action</a> 
          <a class="dropdown-item" href="#">Another action</a> 
          <div class="dropdown-divider"></div> 
          <a class="dropdown-item" href="#">Something else here</a> 
        </div> 
      </li> 
       
    </ul> 
 
    <form class="form-inline my-2 my-lg-0"> 
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
    </form> 
  </div> 
</nav> 
 
<?php 
if($insert){ 
echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'> 
<strong>Succesfully! </strong> The record is inserted succesfully.! 
<button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
  <span aria-hidden='true'>&times;</span> 
</button> 
</div>"; 
} 
 
 if($update){ 
echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'> 
<strong>Succesfully! </strong> The record is updated succesfully.! 
<button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
  <span aria-hidden='true'>&times;</span> 
</button> 
</div>"; 
} 

if($delete){ 
echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'> 
<strong>Succesfully! </strong> The record is delete succesfully.! 
<button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
  <span aria-hidden='true'>&times;</span> 
</button> 
</div>"; 
} 
  

 
?> 
 
<div class="container my-4"> 
    <h1>Add a Node</h1> 
 
<form action="" method="POST"> 
 
  <div class="form-group"> 
    <label for="title">Note Title</label> 
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"> 
    
  </div> 
   
  <div class="form-group"> 
    <label for="desc">Note Description</label> 
    <textarea class="form-control" id="desc" name="desc"  rows="3"></textarea> 
  </div> 
  <button type="submit" class="btn btn-primary">Add Node</button> 
</form> 
</div> 
 
<div class="container my-4"> 
 
 
<table class="table" id="myTable"> 
  <thead> 
    <tr> 
      <th scope="col">S.No</th> 
      <th scope="col">Title</th> 
      <th scope="col">Description</th> 
      <th scope="col">Actions</th> 
    </tr> 
  </thead> 
  <tbody> 
    <?php 
    $sql = "select * from nodes"; 
    $result = mysqli_query($conn, $sql); 
    $Sno = 0; 
    while($row = mysqli_fetch_assoc($result)){ 
      $Sno = $Sno+1; 
        echo "<tr> 
        <th scope='row'>".$Sno."</th> 
        <td>".$row['title']."</td> 
        <td>".$row['desc']."</td> 
        <td><button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> 
        <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button> </td> 
      </tr>"; 
    } 
 
    ?> 
     
  </tbody> 
</table> 
 
</div> 
 
    <!-- Optiona
l JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script> 
       
      <script> 
        let table = new DataTable('#myTable'); 
      </script> 
      <script> 
      edits = document.getElementsByClassName('edit'); 
      Array.from(edits).forEach((element)=>{ 
        element.addEventListener("click",(e)=>{ 
          console.log("edit", ); 
         
        tr = e.target.parentNode.parentNode; 
        title = tr.getElementsByTagName("td")[0].innerText; 
        desc =tr.getElementsByTagName("td")[1].innerText; 
        console.log(title , desc); 
        titleEdit.value = title; 
        descEdit.value = desc; 
        snoEdit.value = e.target.id; 
        console.log(e.target.id); 
        $('#editModal').modal('toggle'); 
      }) 
    }) 
 
    deletes = document.getElementsByClassName('delete'); 
      Array.from(deletes).forEach((element)=>{ 
        element.addEventListener("click",(e)=>{ 
          console.log("edit", ); 
          sno = e.target.id.substr(1,); 
          if(confirm("Are you sure you want to delete")){ 
            console.log("yes"); 
            window.location = `?delete=${sno}`; 
          } 
          else{ 
            console.log("No"); 
          } 
        }) 
      }) 
    </script> 
  </body> 
</html>
