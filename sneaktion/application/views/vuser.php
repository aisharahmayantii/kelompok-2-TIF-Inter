
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"><img src="<?php echo base_url('theme-assets/images/coversneaktion.png')?>" width="100%"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Manajemen User</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Manajemen User
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
<!-- Table head options start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">SuperAdmin</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
				<a href="#"><button style="float:right;margin-bottom:10px;margin-top:-20px;" type="button" data-target="#exampleModal" data-toggle="modal" class="btn btn-secondary">New SuperAdmin</button></a>
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Username</th>
								<th scope="col">Password</th>
								<th scope="col">Opsi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach($admin as $u){ 
						?>
							<tr>
								<th scope="row"><?php echo $no++ ?></th>
								<td><?php echo $u->username ?></td>
								<td><?php echo $u->password ?></td>
								<td><a href="<?php echo base_url('admin/hapus/'.$u->id_admin)?>"><button type="button" class="la la-trash-o"></button></a>&nbsp;<button type="button" data-target="#<?php echo $u->id_admin?>" data-toggle="modal" class="la la-edit"></button></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Table head options end -->

<!-- Bordered table start -->
<!-- <div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Admin</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
				<a href="#"><button style="float:right;margin-bottom:10px;margin-top:-20px;" type="button" class="btn btn-secondary">New Admin</button></a>
				<div class="table-responsive">
					<table class="table table-bordered mb-0">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Password</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach($admin as $u){ 
						?>
							<tr>
								<th scope="row"><?php echo $no++ ?></th>
								<td><?php echo $u->username ?></td>
								<td><?php echo $u->password ?></td>
								<td><a href="<?php echo base_url('admin/hapus/'.$u->id_admin)?>"><button type="button" class="la la-trash-o"></button></a>&nbsp;<button type="button"  class="la la-edit"></button></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- Bordered table end -->
        </div>
      </div>
    </div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->
	
	<!-- Modal Insert-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert SuperAdmin</h5>
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

<?php 
$no = 1;
foreach($admin as $u){ 
?>

<!-- Modal Update -->
<div class="modal fade" id="<?php echo $u->id_admin ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update SuperAdmin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<form action="<?php echo base_url().'admin/update'; ?>" method="post">
			<div class="form-group">
			<input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $u->id_admin ?>" name="id" aria-describedby="emailHelp">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $u->username ?>" name="username" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="password" value="<?php echo $u->password ?>" id="exampleInputPassword1">
			</div>
      	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-danger">Save</button>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Model Update End -->
<?php } ?>


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer>
