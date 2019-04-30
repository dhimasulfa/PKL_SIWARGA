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
	
		<h4 align="center">Tambah Profil</h4>
		<div align="center">
		<p>
		<form method="post" action="input_profil">
		<table class="table">	
			<tr>
				<td>id_profil</td>
				<td>
				<input type="text" name="id_profil" size="10" maxlength="10" value="<?php if(isset($data)) { echo $data[0]->id_profil; } ?>">
				</td>
			</tr>
			<tr>
				<td>Profil</td>
				<td>
				<input type="text" name="profil" value="<?php if(isset($data)) { echo $data[0]->profil; } ?>"></td>
			</tr>
			<tr>
				<td>Isi Profil</td>
				<td>
				<input type="text" name="ket_profil"  value="<?php if(isset($data)) { echo $data[0]->ket_profil; } ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnTambah" value="Simpan"/></td>
				<td> <a href="<?php echo base_url()?>be/Landing/profil">Kembali</a></td>
			</tr>
		</table>
        
       
    </form>
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