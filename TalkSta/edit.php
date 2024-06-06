<!-- Modal -->
<?php
  include 'dbcon.php';
   session_start();
   if(!isset($_SESSION['loggedin'])){
    echo '<script>alert("You are not logged in. Please log in first!!");</script>';
    header("refresh:0;url=https://dj.000.pe/talksta");
    exit(); // Execution stop karne ke liye
}

  $id = $_SESSION['user_id'];
  $sql = "SELECT * FROM `user` WHERE `user_id` = $id ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $name101 =  $_SESSION['name'];
  // echo $id;
?>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit - Talk Sta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="handle_edit.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
          <div class="form-group">
              <label for="text">Username</label>
              <input type="text" class="form-control" id="user_name" aria-describedby="emailHelp" name="user_name" value="<?php echo $row['user_name']; ?>" readonly>
          </div>
          <div class="form-group">
              <label for="text">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="<?php echo $row['name'];?>" >
          </div>
          <div class="form-group">
              <label for="password">Email</label>
              <input type="email" class="form-control" id="email" name="user_email" value="<?php echo $row['user_email']; ?>" readonly>
          </div>
          <div class="from-group">
            <label>
              <!--<input type="radio" id="contactCheckbox1" onchange="toggleInputField(1)">
              <span>Contact Icon 1</span>
              <input type="text" id="contactURL1" placeholder="Enter URL" style="display: none" name="url1" required><br>
              <input type="checkbox" id="contactCheckbox2" onchange="toggleInputField(2)"> 
              <span>Contact Icon 2</span>
              <input type="text" id="contactURL2" placeholder="Enter URL" style="display: none" name="url2" required><br>
              <input type="checkbox" id="contactCheckbox3" onchange="toggleInputField(3)">
              <span>Contact Icon 3</span>
              <input type="text" id="contactURL3" placeholder="Enter URL" style="display: none" name="url3" required><br>
              <input type="checkbox" id="contactCheckbox4" onchange="toggleInputField(4)">
              <span>Contact Icon 4</span>
              <input type="text" id="contactURL4" placeholder="Enter URL" style="display: none" name="url4" required><br>
              <input type="checkbox" id="contactCheckbox5" onchange="toggleInputField(5)">
              <span>Contact Icon 5</span>
              <input type="text" id="contactURL5" placeholder="Enter URL" style="display: none" name="url5" required><br> -->
            </label>
          </div>
          <div class="form-group">
              <label for="text">Pic.</label>
              <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" accept="image/*" onchange="previewImage(event)" value="<?php echo $row['image'];?>"><br>
              <center><img id="preview" src="preview.png" alt="Image Preview" width="150" height="150"></center>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="myform" onlick="submitform()" class="btn btn-primary" name="click">Update</button>
        </div>
      </form>
    </div>
</div>
</div>
<script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <script>
      function toggleInputField(index) {
          var checkbox = document.getElementById("contactCheckbox" + index);
          var inputField = document.getElementById("contactURL" + index);

          if (checkbox.checked) {
              inputField.style.display = "inline";
          } else {
              inputField.style.display = "none";
          }
      }
    </script>

 
 <script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
