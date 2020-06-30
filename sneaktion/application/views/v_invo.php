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
				<h4 class="card-title">Invoice</h4>
        <div class="card-content collapse show">
				<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama Pengirim</th>
								<th scope="col">Gambar Produk</th>
								<th scope="col">Bukti Transfer</th>
                <th scope="col">Admin Penanggung</th>
								<th scope="col">Opsi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
            $no = 1;
            $this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where("user_admin = $user OR user_admin=''");
		$query = $this->db->get();
						foreach( $query->result() as $u){ 
						?>
							<tr>
								<th scope="row"><?php echo $no++ ?></th>
                <td><?php $query = $this->db->get_where("user","id_user = $u->user_pengguna");
                $qq = $query->row()->nama;
                echo $qq; ?></td>
                <td><?php echo $u->produk ?></td>
                <td><?php echo $u->bukti ?> </td>
                <td><?php 
                if($u->user_admin != null){
                $query = $this->db->get_where("admin","id_admin = $u->user_admin");
                $qq = $query->row()->username;
                echo $qq;
                }else{
                  echo "Belum Ada Admin Penanggung";
                } ?></td>
                <td><button type="button" class="la la-trash-o"></button></a>&nbsp;<button type="button" data-target="#<?php echo $u->id_transaksi?>" data-toggle="modal" class="la la-edit"></button></td>
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