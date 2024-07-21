<!-- Modal -->
<?php
   session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
        header("location: https://dj.000.pe/talksta");
    }
?>

<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign UP - Quizzy Loop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="handle_signup.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" required>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="password" name="cpassword" required>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
</div>
