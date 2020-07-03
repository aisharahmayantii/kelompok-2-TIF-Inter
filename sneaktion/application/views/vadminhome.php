
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"><img src="<?php echo base_url('theme-assets/images/coversneaktion.png')?>" width="100%"></div>
        <div class="content-header row">
            <img src="<?php echo base_url('theme-assets/images/coversneaktion.png')?>" width="100%">
        </div>
<!-- Chart -->
<!-- eCommerce statistic -->
<div class="row match-height">
    <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted danger position-absolute p-1">Last Month Invoice</h5>
                <div>
                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                <div class="col-12">
                <center><p style="color:rgba(252,98,107,0.8);font-size:80px"><?php echo $last; ?></p></center>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">This Month Invoice</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                <div class="col-12">
                <center><label style="color:rgba(40,175,208,0.8);font-size:80px"><?php echo $wes; ?></label>
                <?php
                $selisih = $wes - $last;
                if($selisih < 0 ){

                    echo"<span style='color:rgba(252,98,107,0.8);font-size:30px' class='align-middle'>$selisih</span>"; 

                }elseif($selisih == 0){


                }else {

                echo "<span style='color:rgba(20,190,100,1);font-size:30px' class='align-middle'>+$selisih</span>" ;

                }?>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
            <div class="card transparan shadow-none">
                <div class="card-header transparan shadow-none">
                    <h4 class="card-title" id="heading-multiple-thumbnails">This Year Invoice</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div id="progress-stats-bar-chart2"></div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php

foreach($tahun as $h){
?>
<div class="modal fade " id="<?php echo $h->tahunsekarang ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $h->tahunsekarang ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Admin</th>
                <th scope="col">Produk</th>
                <th scope="col">tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                $n = $this->db->query("Select * from transaksi where year(tanggal)= $h->tahunsekarang");
                foreach($n->result() as $j){
                ?>
                <tr>
                <th scope="row"><?php echo $nomor++ ?></th>
                <td><?php $query = $this->db->get_where("user","id_user = $j->user_pengguna");
                $qq = $query->row()->nama;
                echo $qq; ?> </td>
                <td><?php 
                if($j->user_admin != null){
                    $query1 = $this->db->get_where("admin","id_admin = $j->user_admin");
                    if($query1->num_rows() == null){
                            echo "Id admin tidak ditemukan!";
                        }else{
                            $qq = $query1->row()->username;
                            echo $qq;
                        }
                }else{
                  echo "Belum Ada Admin Penanggung";
                } ?></td>
                <td><?php
                if($j->produk != null)
                {
                    if($j->produk2 != null)
                    {
                        if($j->produk3 != null)
                        {
                           if($j->produk4 != null)
                           {
                              echo "
                              <div class='row' id='box-search'>
                                <div class='thumbnail text-center'>
                                  <img src='".base_url("uploads/".$j->produk)."' alt='' style='object-fit: contain;' width='100px' height='100px' class='img-responsive'>
                                  <div class='caption'>
                                      <h1 style='font-weight:bold;text-shadow: 2px 2px 4px #000000;color:white;'>+3</h1>
                                  </div>
                              </div>
                          </div>";
                          }else{
                                echo "
                                <div class='row' id='box-search'>
                                  <div class='thumbnail text-center'>
                                    <img src='".base_url("uploads/".$j->produk)."' alt='' style='object-fit: contain;' width='100px' height='100px' class='img-responsive'>
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
                              <img src='".base_url("uploads/".$j->produk)."' alt='' style='object-fit: contain;' width='100px' height='100px' class='img-responsive'>
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
                          <img src='".base_url("uploads/".$j->produk)."' alt='' style='object-fit: contain;' width='100px' height='100px' class='img-responsive'>
                      </div>
                  </div>";
                    }
                  }
                  else{
                  echo "tidak ada gambar";
                }
                ?></td>
                <td><?php echo $j->tanggal ?></td>
                </tr>
                <?php } ?> 
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url("admin/printexcel/".$h->tahunsekarang); ?>"><button type="button" class="btn btn-primary">Print</button></a>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!--/ eCommerce statistic -->

<!-- Statistics -->
<div class="row match-height">
<div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-multiple-thumbnails">List data per tahun</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        
                    <table id="tablelist" class="table">
                        <thead>
                        <tr>
                            <th class="text-center">List Data Per Tahun</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($tahun as $h){
                        ?>
                        <tr class='clickable-row' data-toggle="modal" data-target="#<?php echo $h->tahunsekarang ?>" style="cursor:pointer">
                            <td class="text-center"><?php echo $h->tahunsekarang ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">Recent threads</h4>
                </div>
                <div id="carousel-area" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-area" data-slide-to="1"></li>
                        <li data-target="#carousel-area" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active ">
                        <?php
                            $title1 = $this->db->query("SELECT * FROM `threads` WHERE id_threads = (SELECT MAX(id_threads) from threads)");
                            $judul1 = $title1->row()->title_threads;
                            $gambar1 = $title1->row()->img_threads;
                            ?>
                            <img src="<?php echo base_url("uploads/".$gambar1) ?>" class="d-block w-100" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 style=" font-weight:bold;text-shadow: 2px 2px 4px #000000;color:white;"><?php echo $judul1 ?></h3>
                            </div>
                        </div>
                        <div class="carousel-item ">
                        <?php
                            $title2 = $this->db->query("SELECT * FROM `threads` WHERE id_threads = (SELECT MAX(id_threads)-1 from threads)");
                            $judul2 = $title2->row()->title_threads;
                            $gambar2 = $title2->row()->img_threads;
                            ?>
                            <img src="<?php echo base_url("uploads/".$gambar2) ?>" class="d-block w-100" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 style=" font-weight:bold;text-shadow: 2px 2px 4px #000000;color:white;"><?php echo $judul2 ?></h3>
                            </div>
                        </div>
                        <div class="carousel-item ">
                        <?php
                            $title3 = $this->db->query("SELECT * FROM `threads` WHERE id_threads = (SELECT MAX(id_threads)-2 from threads)");
                            $judul3 = $title3->row()->title_threads;
                            $gambar3 = $title3->row()->img_threads;
                            ?>
                            <img src="<?php echo base_url("uploads/".$gambar3) ?>" class="d-block w-100" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 style=" font-weight:bold;text-shadow: 2px 2px 4px #000000;color:white;"><?php echo $judul3 ?></h3>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                            <span class="la la-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                            <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
            <span class="float-left" style="font-size:17px;font-weight:bold;">Terakhir ditambahkan:
            <br>
            <?php
            $tanggalt = $this->db->query("SELECT * FROM `threads` where id_threads = (select MAX(id_threads) from threads)");
            $now = $tanggalt->row()->tgl_threads;
            $now1 = date_create($now);
            $date = date("Y-m-d");
            $date1 = date_create($date);
            $diff = abs(strtotime($now) - strtotime($date));
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
            if($days == 0){
                echo "<label style='font-size:13px'>Hari ini<label></span>";
            }elseif($days > 0 ){
                echo "<label style='font-size:13px'>$days hari lalu<label></span>";
            }else{
                echo "<label style='font-size:13px'>Telah Terjadi Error<label></span>"; 
            }
            ?>
                <span class="tags float-right">
                    <span class="badge badge-pill badge-primary">Branding</span>
                    <span class="badge badge-pill badge-danger">Design</span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Unfinished Invoice</h4>
                <a class="heading-elements-toggle">
                    <i class="fa fa-ellipsis-v font-medium-3"></i>
                </a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div id="recent-buyers" class="media-list">
                <?php
                         $recentbuyers = $this->db->query("SELECT * FROM (
                            SELECT * FROM transaksi ORDER BY id_transaksi DESC 
                         )Var1
                            WHERE user_admin = 1 AND status='Proses' ORDER BY id_transaksi ASC");
                        foreach($recentbuyers->result() as $rb){
                        ?>
                    <a href="<?php echo base_url('admin/invo')?>" class="media border-0">
                        <div class="media-left pr-1">
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">
                            <?php
                            $query = $this->db->get_where("user","id_user = $rb->user_pengguna");
                            $qq = $query->row()->nama;
                            echo $qq;
                            ?>
                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <?php
                                  if($rb->produk != null && $rb->produk2 != null && $rb->produk3 != null && $rb->produk4 != null ){  
                                      echo 
                                    "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                    <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk)."' alt='Avatar'>
                                    </li>";
                                        echo 
                                    "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                    <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk2)."' alt='Avatar'>
                                    </li>";
                                    echo 
                                    "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                    <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk3)."' alt='Avatar'>
                                    </li>";
                                    echo 
                                    "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                    <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk4)."' alt='Avatar'>
                                    </li>";
                                  }else{
                                    if($rb->produk != null && $rb->produk2 != null && $rb->produk3 != null ){  
                                        echo 
                                    "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                    <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk)."' alt='Avatar'>
                                    </li>";
                                        echo 
                                    "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                    <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk2)."' alt='Avatar'>
                                    </li>";
                                    echo 
                                    "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                    <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk3)."' alt='Avatar'>
                                    </li>";
                                  }else{
                                    if($rb->produk != null && $rb->produk2 != null){
                                        echo 
                                        "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                        <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk)."' alt='Avatar'>
                                        </li>";
                                            echo 
                                        "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                        <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk2)."' alt='Avatar'>
                                        </li>";  
                                  }else{
                                    if($rb->produk != null  ){
                                        echo 
                                        "<li data-toggle='tooltip' data-popup='tooltip-custom' data-original-title='Product 1' class='avatar avatar-sm pull-up'>
                                        <img class='media-object rounded-circle no-border-top-radius no-border-bottom-radius' src='".base_url("uploads/".$rb->produk)."' alt='Avatar'>
                                        </li>";
                                  }else{
                                      echo"<p style='font-size:11px;'>tidak ada gambar</p>";
                                  }
                                }
                            }
                        }
                                ?>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-<?php echo $rb->id_transaksi ?> </span>
                            </p>
                        </div>
                    </a>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Statistics -->
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
