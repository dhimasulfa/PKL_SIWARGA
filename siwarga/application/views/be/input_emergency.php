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
          	<h3><i class="fa fa-angle-right"></i> TAMBAH EMERGENCY</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
		<h4 align="center">Tambah Data Emergency</h4>
		<div align="center">
		<p>
		<form method="post" action="input_emergency">
		<table class="table">	
			<tr>
				<td>Id Emergency</td>
				<td>
				<input type="text" name="id_emergency" size="10" maxlength="10"  value="<?php echo $kode_emergency;?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>
				<input type="date" name="tanggal" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->tanggal; } ?>">
				</td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td>
				<input type="text" name="lokasi" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->lokasi; } ?>">
				</td>
			</tr>
			<tr>
				<td>Pelapor</td>
				<td>
				<input type="text" name="pelapor" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->pelapor; } ?>">
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>
				<input type="text" name="keterangan" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->keterangan; } ?>">
				</td>
			</tr>
			<!-- <tr>
				<td>Status</td>
				<td>
				<input type="text" name="status" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->status; } ?>">
				</td>
			</tr> -->
			<tr>
				<td></td>
				<td><input type="submit" name="btnTambah" value="Simpan"/></td>
				<td> <a href="<?php echo base_url()?>be/Landing/emergency">Kembali</a></td>
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