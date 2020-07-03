<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"><img src="<?php echo base_url('theme-assets/images/coversneaktion.png')?>" width="100%"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Thread
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Line Awesome section start -->
<section id="line-awesome-icons">
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Recent Threads</h4>
        <div class="card-content collapse show">
				<div class="card-body">
				<a href="#"><button style="float:right;margin-bottom:10px;margin-top:-20px;" type="button" data-target="#exampleModal" data-toggle="modal" class="btn btn-secondary">New Threads</button></a>
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Judul</th>
								<th scope="col">Pict</th>
								<th scope="col">Isi</th>
								<th scope="col">Opsi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach($threads as $u){ 
						?>
							<tr>
								<th scope="row"><?php echo $no++ ?></th>
								<td><?php echo $u->title_threads ?></td>
                <td><img src="<?php echo base_url("uploads/".$u->img_threads)?>"width="100px" height="100px"></td>
                <td><?php echo $u->isi_threads ?></td>
                <td><a href="<?php echo base_url('admin/hapusthread/'.$u->id_threads);?>"><button type="button" class="la la-trash-o"></button></a>&nbsp;<button type="button" data-target="#<?php echo $u->id_threads?>" data-toggle="modal" class="la la-edit"></button></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
        </section>
<!-- // Line Awesome section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php 
$no = 1;
foreach($threads as $u){ 
?>

<!-- Modal Update -->
<div class="modal fade" id="<?php echo $u->id_threads ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update SuperAdmin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method="post" action="<?=base_url('Admin/update_threads')?>" enctype="multipart/form-data">
			<div class="form-group">
			<input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $u->id_threads ?>" name="id" aria-describedby="emailHelp">
			<input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $u->img_threads?>" name="sekarang" aria-describedby="emailHelp">
				<label for="exampleInputEmail1">Judul</label>
				<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $u->title_threads ?>" name="judul" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="image_up">Gambar</label><br>
				<center><img src="<?php echo base_url("uploads/".$u->img_threads) ?>" width="100px" height="100px"><center><br>
				<input type="file" class="form-control" name="image_up" id="image_up">
			</div>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Isi Thread </label>
    <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"><?php echo $u->isi_threads?></textarea>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-danger">Save</button>
		</form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Model Update End -->
<?php } ?>


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
        </ul>
      </div>
    </footer>

    
	<!-- Modal Insert-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Thread</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method="post" action="<?=base_url('Admin/tambah_threads')?>" enctype="multipart/form-data">
    <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php 
    $tanggal =  date("Y-m-d");
    echo $tanggal?>" name="tanggal" aria-describedby="emailHelp">
			<div class="form-group">
				<label for="exampleInputEmail1">Judul</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="judul" aria-describedby="emailHelp">
			</div>
			</br>
			<div class="form-group">
				<label for="image_input">Gambar</label>
				<input type="file" class="form-control" name="image_input" id="image_input">
			</div>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Isi Thread </label>
    <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-danger">Add</button>
		</form>
      </div>
    </div>
  </div>
</div>