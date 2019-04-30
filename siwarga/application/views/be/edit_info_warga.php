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
          	<h3><i class="fa fa-angle-right"></i> EDIT INFO WARGA</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	<?php foreach($info as $j){ ?>
	<form action="<?php echo base_url(). 'be/Landing/update_info_warga'; ?>" method="post">
		<table border="0" style="margin:20px auto;">

			<tr>
				<td>Id Info</td>
				<td>
				<input type="text" name="id" value="<?php echo $j->id ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Judul Info</td>
				<td>
				<input type="text" name="judul" value="<?php echo $j->judul ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Info</td>
				<td>
				<input type="date" name="tanggal" value="<?php echo $j->tanggal ?>"></td>
			</tr>
			<tr>
				<td>Info Warga</td>
				<td>
				<input type="text" name="isi" size="75" maxlength="700" value="<?php echo $j->isi ?>"></td>
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