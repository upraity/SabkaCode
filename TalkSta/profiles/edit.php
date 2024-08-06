<!-- Modal -->
<?php
include 'dbcon.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    echo '<script>alert("You are not logged in. Please log in first!!");</script>';
    header("refresh:0;url=https://dj.000.pe/talksta");
    exit(); // Execution stop karne ke liye
}

$id = $_SESSION['user_id'];
$sql = "SELECT * FROM `user` WHERE `user_id` = $id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name101 = $_SESSION['name'];
$cts = $row['cts'];
?>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 43px;
  height: 25px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(17px);
  -ms-transform: translateX(17px);
  transform: translateX(17px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit - Talk Sta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editForm" action="handle_edit.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
          <div class="form-group">
              <label for="text">Username</label>
              <input type="text" class="form-control" id="user_name" aria-describedby="emailHelp" name="user_name" value="<?php echo $row['user_name']; ?>" readonly>
          </div>
          <div class="form-group">
              <label for="text">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="<?php echo $row['name']; ?>">
          </div>
          <div class="form-group">
              <label for="password">Email</label>
              <input type="email" class="form-control" id="email" name="user_email" value="<?php echo $row['user_email']; ?>" readonly><br>
              Click For Hidden your mail<br>
              <label class="switch">
                <input type="checkbox" id="contactCheckbox0" name="hidden" value="1" <?php echo $cts ? 'checked' : ''; ?>>
                <span class="slider round"></span>
              </label>
          </div>
          <div class="form-group">
            <label>Contact Me</label><br>
              <div>
                <input type="checkbox" id="contactCheckbox1" onchange="toggleInputField(1)" <?php if ($row['url1']) echo 'checked'; ?>>
                <span>Github: </span>
                <input type="text" id="contactURL1" name="url1" placeholder="Enter URL" value="<?php echo $row['url1']; ?>" style="display: <?php echo $row['url1'] ? 'inline' : 'none'; ?>;">
              </div>
              <div>
                <input type="checkbox" id="contactCheckbox2" onchange="toggleInputField(2)" <?php if ($row['url2']) echo 'checked'; ?>>
                <span>Twitter: </span>
                <input type="text" id="contactURL2" name="url2" placeholder="Enter URL" value="<?php echo $row['url2']; ?>" style="display: <?php echo $row['url2'] ? 'inline' : 'none'; ?>;">
              </div>
              <div>
                <input type="checkbox" id="contactCheckbox3" onchange="toggleInputField(3)" <?php if ($row['url3']) echo 'checked'; ?>>
                <span>Leetcode: </span>
                <input type="text" id="contactURL3" name="url3" placeholder="Enter URL" value="<?php echo $row['url3']; ?>" style="display: <?php echo $row['url3'] ? 'inline' : 'none'; ?>;">
              </div>
              <div>
                <input type="checkbox" id="contactCheckbox4" onchange="toggleInputField(4)" <?php if ($row['url4']) echo 'checked'; ?>>
                <span>Telegram: </span>
                <input type="text" id="contactURL4" name="url4" placeholder="Enter URL" value="<?php echo $row['url4']; ?>" style="display: <?php echo $row['url4'] ? 'inline' : 'none'; ?>;">
              </div>
              <div>
                <input type="checkbox" id="contactCheckbox5" onchange="toggleInputField(5)" <?php if ($row['url5']) echo 'checked'; ?>>
                <span>Linkedin: </span>
                <input type="text" id="contactURL5" name="url5" placeholder="Enter URL" value="<?php echo $row['url5']; ?>" style="display: <?php echo $row['url5'] ? 'inline' : 'none'; ?>;">
              </div>
          </div>
          <div class="form-group">
              <label for="text">Pic.</label>
              <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" accept="image/*" onchange="previewImage(event)" value="<?php echo $row['image']; ?>"><br>
              <center><img id="preview" src="preview.png" alt="Image Preview" width="150" height="150"></center>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="click">Update</button>
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

    function toggleInputField(index) {
        var checkbox = document.getElementById("contactCheckbox" + index);
        var inputField = document.getElementById("contactURL" + index);

        if (checkbox.checked) {
            inputField.style.display = "inline";
            inputField.required = true;
        } else {
            inputField.style.display = "none";
            inputField.required = false;
        }
    }

    document.getElementById('editForm').addEventListener('submit', function(e) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var formValid = true;

        checkboxes.forEach(function(checkbox, index) {
            var inputField = document.getElementById("contactURL" + (index + 1));
            if (checkbox.checked || inputField.value.trim() === "") {
                formValid = false;
                inputField.focus();
                // alert("Please fill in the URL for Contact Icon " + (index + 1));
            }
        });

        if (!formValid) {
            e.preventDefault();
        }
    });
</script>
