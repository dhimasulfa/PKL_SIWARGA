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
          	<h3><i class="fa fa-angle-right"></i>EDIT EMERGENCY</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	<?php foreach($emergency as $j){ ?>
	<form action="<?php echo base_url(). 'be/Landing/update_emergency'; ?>" method="post">
		<table class="table">

			<tr>
				<td>Id Emergency</td>
				<td>
				<input type="text" name="id_emergency" value="<?php echo $j->id_emergency ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>
				<input type="text" name="tanggal" value="<?php echo $j->tanggal ?>"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td>
				<input type="text" name="lokasi" value="<?php echo $j->lokasi ?>"></td>
			</tr>
			<tr>
				<td>Pelapor</td>
				<td>
				<input type="text" name="pelapor" value="<?php echo $j->pelapor ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>
				<input type="text" name="keterangan" value="<?php echo $j->keterangan ?>"></td>
			</tr>
			<!-- <tr>
				<td>Status</td>
				<td>
				<input type="text" name="status" value="<?php echo $j->status ?>"></td>
			</tr> -->
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