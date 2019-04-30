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

	<center>
		<h1>Update Profil</h1>
		
	</center>
	<?php foreach($profil as $j){ ?>
	<form action="<?php echo base_url(). 'be/Landing/update_profil'; ?>" method="post">
		<table class="table">

			<tr>
				<td>id_profil</td>
				<td>
				<input type="text" name="id_profil" value="<?php echo $j->id_profil ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Profil</td>
				<td>
				<input type="text" name="profil" value="<?php echo $j->profil ?>"></td>
			</tr>
			<tr>
				<td>Isi Profil</td>
				<td>
				<input type="text" name="ket_profil" value="<?php echo $j->ket_profil ?>" readonly></td>
			</tr>
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