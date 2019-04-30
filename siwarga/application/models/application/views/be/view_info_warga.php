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
          	<h3><i class="fa fa-angle-right"></i>INFO WARGA</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
		<p><h3 align="center">Daftar Info Warga</h3></p>
		<p align="center"><a href="<?php echo base_url()?>be/Landing/input_info_warga">Tambah Info Warga</a></p>
		<p align="center">
			<table class="table">
				<tr>
					<th>No</th>
					<th>Id Info</th>
					<th>Judul Info</th>
					<th>Tanggal Info</th>
					<th>Info Warga</th>
					<th colspan="2">Opsi</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->id;?></td>
					<td><?php echo $row->judul;?></td>
					<td><?php echo $row->tanggal;?></td>
					<td><?php echo $row->isi;?></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/edit_info_warga/<?php echo $row->id;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/delete_info_warga/<?php echo $row->id;?>">Hapus</a></td>
				</tr>
				<?php $no++;
                endforeach;?>
			</table>
		</p>	</div>
					</div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		</section>
		<?php $this->load->view("be/footer.php") ?>
	  </section><!-- /MAIN CONTENT -->
	  <?php $this->load->view("be/js.php") ?>
	</body>
</html>