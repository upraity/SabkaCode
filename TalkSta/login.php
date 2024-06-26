<!-- Modal -->
<?php
//    session_start();
//   if(isset($_SESSION['loggedin'])){
//         header("location: https://dj.000.pe/comment");
//     }
?>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login - Talk Sta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="handle_login.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
              <label for="text">Username</label>
              <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
          </div>
           <div class="links">
                <a href="forgotpassword.php">Forgot Password</a>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
</div>
</div>
