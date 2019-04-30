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
          	<h3><i class="fa fa-angle-right"></i> TABEL PROFIL</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">	
		<p><h3 align="center">PROFIL DESA</h3></p>
		<button type="button" class="btn btn-theme03" align="center"><a href="<?php echo base_url()?>be/Landing/input_profil">Tambah Profil</a></button>
		<p align="center">
			<table class="table">
				<tr>
					<th>Id Profil</th>
					<th>Judul</th>
					<th>Profil</th>
					<th colspan="2">Opsi</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $row->id_profil;?></td>
					<td><?php echo $row->profil;?></td>
					<td><?php echo $row->ket_profil;?></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/edit_profil/<?php echo $row->id_profil;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/delete_profil/<?php echo $row->id_profil;?>">Hapus</a></td>
				</tr>
				<?php $no++;
                endforeach;?>
			</table>
		</p>
					</div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		</section>
		<?php $this->load->view("be/footer.php") ?>
	  </section><!-- /MAIN CONTENT -->
	  <?php $this->load->view("be/js.php") ?>
	</body>
</html>