<!DOCTYPE html>
<html lang="en">
<!-- header -->
<?php $this->load->view("be/header.php") ?>
<!-- end header -->
<body>
<section id="container" >
<!-- navbar -->
<?php $this->load->view("be/navbar.php") ?>
<!-- end navbar -->
<!-- sidebar -->
<?php $this->load->view("be/sidebar.php") ?>
<!-- end sidebar -->
	 <!--main content start-->
	 <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> TAMBAH PROFIL</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
		<p><h3 align="center">Daftar Emergency</h3></p>
		<p align="center"><a href="<?php echo base_url()?>be/Landing/input_emergency">Tambah Emergency</a></p>
		<p align="center">
			<table class="table">
				<tr>
					<th>No</th>
					<th>Id Emergency</th>
					<th>Tanggal</th>
					<th>Lokasi</th>
					<th>Pelapor</th>
					<th>Keterangan</th>
					<!-- <th>Status</th> -->
					<th colspan="2">Opsi</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->id_emergency;?></td>
					<td><?php echo $row->tanggal;?></td>
					<td><?php echo $row->lokasi;?></td>
					<td><?php echo $row->pelapor;?></td>
					<td><?php echo $row->keterangan;?></td>
					<!-- <td><?php echo $row->status;?></td> -->
					<td><a href="<?php echo base_url(); ?>be/Landing/edit_emergency/<?php echo $row->id_emergency;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/delete_emergency/<?php echo $row->id_emergency;?>">Hapus</a></td>
				</tr>
				<?php $no++;
                endforeach;?>
			</table>
		</p>
		</div>
		</div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		</section>
		<?php $this->load->view("be/footer.php") ?>
	  </section><!-- /MAIN CONTENT -->
	  <?php $this->load->view("be/js.php") ?>
	</body>
</html>