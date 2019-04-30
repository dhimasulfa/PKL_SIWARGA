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
          	<h3><i class="fa fa-angle-right"></i> TAMBAH WARGA</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	<?php foreach($warga as $j){ ?>
	<form action="<?php echo base_url(). 'be/Landing/update_warga'; ?>" method="post">
		<table class="table">

			<tr>
				<td>NIK</td>
				<td>
				<input type="text" name="nik" value="<?php echo $j->nik ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Nama Warga</td>
				<td>
				<input type="text" name="nama" value="<?php echo $j->nama ?>"></td>
			</tr>
			<tr>
				<td>No KK</td>
				<td>
				<input type="text" name="no_kk" value="<?php echo $j->no_kk ?>" readonly></td>
			</tr>
			<tr>
				<td>Tempat_Lahir</td>
				<td>
				<input type="text" name="tmp_lahir" value="<?php echo $j->tmp_lahir ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
				<input type="date" name="tgl_lahir" value="<?php echo $j->tgl_lahir ?>"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>
				<input type="text" name="telp" value="<?php echo $j->telp ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
				<input type="text" name="status" value="<?php echo $j->status ?>"></td>
			</tr>
			<tr>
				<td>RT</td>
				<td>
				<input type="text" name="id_rt"  disabled value="<?php echo $j->id_rt ?>"readonly></td>
			</tr>
			<tr>
				<td>RW</td>
				<td>
				<input type="text" name="rw" value="<?php echo $j->rw ?>"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
	</div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		</section>
		<?php $this->load->view("be/footer.php") ?>
	  </section><!-- /MAIN CONTENT -->
	  <?php $this->load->view("be/js.php") ?>
	</body>
</html>