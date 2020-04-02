
<!-- Modal Update -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update SuperAdmin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<form action="<?php echo base_url().'admin/tambahuser_aksi'; ?>" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="password" id="exampleInputPassword1">
			</div>
      	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-danger">Add</button>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Model Update End -->
