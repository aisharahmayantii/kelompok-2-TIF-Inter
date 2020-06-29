
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
<!-- Suped Admin -->
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
								<th scope="col">Kewarganegara</th>
								<th scope="col">Image</th>
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
								<?php 
								if($u->negara !=null){
								echo"<td>.$u->negara</td>";
								}else{
									echo "<td style='color:grey'>Kewarganegaraan tidak diketahui</td>";
								} ?></td>
								<td>
								<?php if($u->image !=null){
								echo '<img src="'.base_url("uploads/".$u->image).'"width="100px" height="100px">';
								}else{
									echo 'Image Tidak Ada'; }?></td>
								<td><a href="<?php 
								if($u->image !=null){
								echo base_url('admin/hapus/'.$u->image);
								}else{
									echo base_url('admin/hapus1/'.$u->id_admin);
								}?>"><button type="button" class="la la-trash-o"></button></a>&nbsp;<button type="button" data-target="#<?php echo $u->id_admin?>" data-toggle="modal" class="la la-edit"></button></td>
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
	  <form method="post" action="<?=base_url('Admin/tambahuser_aksi')?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="username1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="password" id="exampleInputPassword1">
			</div>
			<?php
			function getUserIP()
			{
				// Get real visitor IP behind CloudFlare network
				if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
						  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
						  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
				}
				$client  = @$_SERVER['HTTP_CLIENT_IP'];
				$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
				$remote  = $_SERVER['REMOTE_ADDR'];
			
				if(filter_var($client, FILTER_VALIDATE_IP))
				{
					$ip = $client;
				}
				elseif(filter_var($forward, FILTER_VALIDATE_IP))
				{
					$ip = $forward;
				}
				else
				{
					$ip = $remote;
				}
			
				return $ip;
			}
			
			
			$user_ip = getUserIP();

			?>
			<label for="sel1">Kewarganegaraan</label>
      			<select class="form-control" name="negara" id="sel1">
        			<option value="Indonesia">Indonesia</option>
        			<option value="Malaysia">Malaysia</option>
					<option value="Singapore">Singapore</option>
					<option value="Timor Leste">Timor Leste</option>
				</select>
			</br>
			<div class="form-group">
				<label for="image_input">Gambar</label>
				<input type="file" class="form-control" name="image_input" id="image_input">
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
	  <form method="post" action="<?=base_url('Admin/update')?>" enctype="multipart/form-data">
			<div class="form-group">
			<input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $u->id_admin ?>" name="id" aria-describedby="emailHelp">
			<input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $u->image ?>" name="sekarang" aria-describedby="emailHelp">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $u->username ?>" name="username" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="password" value="<?php echo $u->password ?>" id="exampleInputPassword1">
			</div>
			<label for="sel1">Kewarganegaraan </label>
      			<select class="form-control" name="negara" id="sel1">
				  <?php 
				  
				  if ($u->negara == "Indonesia"){

					echo 
					"<option value='Indonesia' selected>Indonesia</option>
        			<option value='Malaysia'>Malaysia</option>
					<option value='Singapore'>Singapore</option>
					<option value='Timor Leste'>Timor Leste</option>";

				  }elseif ($u->negara == "Malaysia"){
					echo 
					"<option value='Indonesia'>Indonesia</option>
        			<option value='Malaysia' Selected>Malaysia</option>
					<option value='Singapore'>Singapore</option>
					<option value='Timor Leste'>Timor Leste</option>";

				  }elseif ($u->negara == "Malaysia"){
					echo 
					"<option value='Indonesia'>Indonesia</option>
        			<option value='Malaysia' Selected>Malaysia</option>
					<option value='Singapore'>Singapore</option>
					<option value='Timor Leste'>Timor Leste</option>";
				  }elseif ($u->negara =="Singapore"){
					echo 
					"<option value='Indonesia'>Indonesia</option>
        			<option value='Malaysia'>Malaysia</option>
					<option value='Singapore' Selected>Singapore</option>
					<option value='Timor Leste'>Timor Leste</option>";
				  }elseif ($u->negara =="Timor Leste"){
					echo 
					"<option value='Indonesia'>Indonesia</option>
        			<option value='Malaysia'>Malaysia</option>
					<option value='Singapore' Selected>Singapore</option>
					<option value='Timor Leste'>Timor Leste</option>";
				  }else{
					  echo" <option value='' disabled selected>Anda Belum Memilih Kewarganegaraan</option>
							<option value='Indonesia'>Indonesia</option>
							<option value='Malaysia'>Malaysia</option>
							<option value='Singapore'>Singapore</option>
							<option value='Timor Leste'>Timor Leste</option>";
				  }?>
				</select>
				</br>
			<div class="form-group">
				<label for="image_up">Image</label><br>
				<center><img src="<?php echo base_url("uploads/".$u->image) ?>" width="100px" height="100px"><center><br>
				<input type="file" class="form-control" name="image_up" id="image_up">
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
