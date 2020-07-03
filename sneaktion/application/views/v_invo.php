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
		$this->db->where("(user_admin = $user OR user_admin='') AND (status ='Proses' OR status ='')");
		$query = $this->db->get();
						foreach( $query->result() as $u){ 
						?>
							 <tr >
								<th scope="row"><?php echo $no++ ?></th>
                <td><?php $query = $this->db->get_where("user","id_user = $u->user_pengguna");
                $qq = $query->row()->nama;
                echo $qq; ?></td>
                <td>
                <a href="#<?php echo $u->id_transaksi ?>"data-toggle="modal" data-target="#<?php echo $u->id_transaksi ?>">
                <?php
                if($u->produk != null)
                {
                    if($u->produk2 != null)
                    {
                        if($u->produk3 != null)
                        {
                           if($u->produk4 != null)
                           {
                              echo "
                              <div class='row' id='box-search'>
                                <div class='thumbnail text-center'>
                                  <img src='".base_url("uploads/".$u->produk)."' alt='' style='object-fit: contain;' width='100px' height='100px' class='img-responsive'>
                                  <div class='caption'>
                                      <h1 style='font-weight:bold;text-shadow: 2px 2px 4px #000000;color:white;'>+3</h1>
                                  </div>
                              </div>
                          </div>";
                          }else{
                                echo "
                                <div class='row' id='box-search'>
                                  <div class='thumbnail text-center'>
                                    <img src='".base_url("uploads/".$u->produk)."' alt='' style='object-fit: contain;' width='100px' height='100px' class='img-responsive'>
                                    <div class='caption'>
                                        <h1 style='font-weight:bold;text-shadow: 2px 2px 4px #000000;color:white;'>+2</h1>
                                    </div>
                                </div>
                            </div>";
                          }
                          
                      }
                      else
                      {
                          echo "
                          <div class='row' id='box-search'>
                            <div class='thumbnail text-center'>
                              <img src='".base_url("uploads/".$u->produk)."' alt='' style='object-fit: contain;' width='100px' height='100px' class='img-responsive'>
                              <div class='caption'>
                                  <h1 style='font-weight:bold;text-shadow: 2px 2px 4px #000000;color:white;'>+1</h1>
                              </div>
                          </div>
                      </div>";
                      }
                    }
                    else
                    {
                      echo "
                      <div class='row' id='box-search'>
                        <div class='text-center'>
                          <img src='".base_url("uploads/".$u->produk)."' alt='' style='object-fit: contain;' width='100px' height='100px' class='img-responsive'>
                      </div>
                  </div>";
                    }
                  }
                  else{
                  echo "tidak ada gambar";
                }
                ?>
                </a>
                 </td>
                <td><?php echo $u->bukti ?> </td>
                <td><?php 
                if($u->user_admin != null){
                $query = $this->db->get_where("admin","id_admin = $u->user_admin");
                $qq = $query->row()->username;
                echo $qq;
                }else{
                  echo "Belum Ada Admin Penanggung";
                } ?></td>
                <td>
                <?php
                $logged =  $admin->row()->id_admin;
                if($u->user_admin == null){ ?>
                  <a onclick="return confirm('Apakah anda yakin akan mengambil inv ini?')" href="<?php echo base_url('admin/ambilinvoice/'.$u->id_transaksi)?>"><button type="button" class="btn btn-dark">Ambil Invoice!</button></a>
                  <?php
                }elseif($u->user_admin == $logged){
                  ?>
                  <a onclick="return confirm('Apakah anda yakin akan memberikan Fake?')" href="<?php echo base_url('admin/fakeinv/'.$u->id_transaksi)?>"><button type="button" class="btn btn-sm btn-danger">Fake!</button></a>
                  <a onclick="return confirm('Apakah anda yakin akan memberikan Legit?')" href="<?php echo base_url('admin/legitinv/'.$u->id_transaksi)?>"><button type="button" class="btn btn-sm btn-success">Legit!</button></a>
                  <?php
                }
                ?>
                </td>
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
         </ul>
      </div>
    </footer>

<?php
$no = 1;
$this->db->select('*');
$this->db->from('transaksi');
$this->db->where("user_admin = $user OR user_admin=''");
$query = $this->db->get();
foreach($query->result() as $g){ ?>
    <!-- Modal -->
<div class="modal fade" id="<?php echo $g->id_transaksi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
        if($g->produk != null && $g->produk2 != null && $g->produk3 != null && $g->produk4 != null ){  
          echo "<img src='".base_url("uploads/".$g->produk)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
          echo "<img src='".base_url("uploads/".$g->produk2)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
          echo "<img src='".base_url("uploads/".$g->produk3)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
          echo "<img src='".base_url("uploads/".$g->produk4)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
        }else{
              if($g->produk != null && $g->produk2 != null && $g->produk3 != null ){  
                echo "<img src='".base_url("uploads/".$g->produk)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
                echo "<img src='".base_url("uploads/".$g->produk2)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
                echo "<img src='".base_url("uploads/".$g->produk3)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
              }else{
                if($g->produk != null && $g->produk2 != null){  
                  echo "<img src='".base_url("uploads/".$g->produk)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
                  echo "<img src='".base_url("uploads/".$g->produk2)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
                }else{
                  if($g->produk != null  ){  
                    echo "<img src='".base_url("uploads/".$g->produk)."' alt='' style='object-fit: contain;' width='400px' height='400px' class='img-responsive'>";
                }else{
                  echo 'tidak ada gambar';
                }  
              }
            }
          }
        ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> 
<?php }?> 