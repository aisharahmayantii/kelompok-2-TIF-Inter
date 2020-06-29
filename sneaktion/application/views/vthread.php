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
                <td><?php echo $u->img_threads ?></td>
                <td><?php echo $u->isi_threads ?></td>
                <td><button type="button" class="la la-trash-o"></button></a>&nbsp;<button type="button" data-target="#<?php echo $u->id_threads?>" data-toggle="modal" class="la la-edit"></button></td>
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


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer>