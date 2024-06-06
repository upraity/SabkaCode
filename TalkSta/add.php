<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Add - Talk Sta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="handle_add.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
              <label for="text">Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" placeholder="Enter Topic Name">
          </div>
          <div class="form-group">
              <label for="text">Desc.</label>
              <textarea class="form-control" id="desc" name="desc" rows="5" placeholder="Enter description"></textarea>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
</div>
</div>
