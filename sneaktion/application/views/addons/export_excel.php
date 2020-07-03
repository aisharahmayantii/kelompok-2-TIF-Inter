<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi Tahun</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=data transaksi $tahun.xls");
	?>
    <center>
		<h1>Data Transaksi Sneaktion Tahun<?php echo $tahun?></h1>
	</center>
    <table border="1">
		<tr>
			<th>No</th>
			<th>User</th>
			<th>Admin</th>
			<th>Tanggal</th>
		</tr>
		<?php 
        
        $rery = $this->db->get_where("transaksi","YEAR(tanggal) = $tahun");
        $no =1 ;
		foreach($rery->result() as $aj){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php $query = $this->db->get_where("user","id_user = $aj->user_pengguna");
                $qq = $query->row()->nama;
                echo $qq; ?></td>
			<td><?php $query1 = $this->db->get_where("admin","id_admin = $aj->user_admin");
                $qq1 = $query1->row()->username;
                echo $qq1; ?></td>
            <td><?php 
            //  if($aj->produk != null)
            //  {
            //     if($aj->produk2 != null)
            //     {
            //         if($aj->produk3 != null)
            //         {
            //            if($aj->produk4 != null)
            //            {
            // echo "<img src='".base_url("uploads/".$aj->produk)."' style='width:10px !important; height:10px !important;' >";
            // echo "<img src='".base_url("uploads/".$aj->produk2)."' style='width:10px !important; height:10px !important;' >";
            // echo "<img src='".base_url("uploads/".$aj->produk3)."' style='width:10px !important; height:10px !important;' >";
            // echo "<img src='".base_url("uploads/".$aj->produk4)."' style='width:10px !important; height:10px !important;' >";
            //            }else{
            //             echo "<img src='".base_url("uploads/".$aj->produk)."' style='width:10px !important; height:10px !important;' >";
            //             echo "<img src='".base_url("uploads/".$aj->produk2)."' style='width:10px !important; height:10px !important;' >";
            //             echo "<img src='".base_url("uploads/".$aj->produk3)."' style='width:10px !important; height:10px !important;' >";
            //            }
            //            }else{
            //             echo "<img src='".base_url("uploads/".$aj->produk)."' style='width:10px !important; height:10px !important;' >";
            //             echo "<img src='".base_url("uploads/".$aj->produk2)."' style='width:10px !important; height:10px !important;' >";
            //            }
            //            }else{
            //             echo "<img src='".base_url("uploads/".$aj->produk)."' style='width:10px !important; height:10px !important;' >";
            //            }
            //         }else{
            //             echo"tidak ada gambar";
            //         }
            echo $aj->tanggal;
            ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>