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
          	<h3><i class="fa fa-angle-right"></i> EDIT RT</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	
	<?php foreach($rt as $j){ ?>
	<form action="<?php echo base_url(). 'be/Landing/update_rt'; ?>" method="post">
		<table class="table">

			<tr>
				<td>Id RT</td>
				<td>
				<input type="text" name="id_rt" value="<?php echo $j->id_rt ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>RT</td>
				<td>
				<input type="text" name="rt" value="<?php echo $j->rt ?>"></td>
			</tr>
			<tr>
				<td>RW</td>
				<td>
				<input type="text" name="rw" value="<?php echo $j->rw ?>"></td>
			</tr>
			<tr>
				<td>Nama Ketua</td>
				<td>
				<input type="text" name="nama_ketua" value="<?php echo $j->nama_ketua ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
				<input type="text" name="alamat" value="<?php echo $j->alamat ?>"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>
				<input type="text" name="telp" value="<?php echo $j->telp ?>"></td>
			</tr>
			<tr>
				<td>No KK</td>
				<td>
				<input type="text" name="no_kk" value="<?php echo $j->no_kk ?>" readonly></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
				<input type="text" name="status" value="<?php echo $j->status ?>"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
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