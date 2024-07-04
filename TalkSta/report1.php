
<?php 
    $subid = $_GET['subid'];
    $id    = $_GET['id'];
    echo $_POST['id'];
    echo $id;
    echo $subid;
?>
<div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Report - Talk Sta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form action="handle_report.php" method="POST">
                        <h6 for="reportReason">Reason for reporting</h6>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="text">Desc.</label>
                                <textarea class="form-control" id="desc" name="desc" rows="5" placeholder="Enter description" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button name="report" type="submit" class="btn btn-primary">Report</button>
                            </div>
                            <input type="hidden" name="id">
                            <input type="hidden" name="subid">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
