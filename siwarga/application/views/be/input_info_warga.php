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
          	<h3><i class="fa fa-angle-right"></i> TAMBAH DATA INFO WARGA</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
		<h4 align="center">Tambah Data Info Warga</h4>
		<div align="center">
		<p>
		<form method="post" action="input_info_warga">
		Id Info<br/><input type="text" name="id" size="10" maxlength="10" value="<?php echo $kode_info;?>"><br/><br/>
        Judul Info<br/><input type="text" name="judul" maxlength="500" value="<?php if(isset($data)) { echo $data[0]->judul; } ?>"><br/><br/>
        Tanggal Info<br/><input type="date" name="tanggal" size="30" maxlength="30" value="<?php if(isset($data)) { echo $data[0]->tanggal; } ?>"><br/><br/>
        Info Warga<br/><textarea type="textarea" name="isi" size="700" maxlength="700" value="<?php if(isset($data)) { echo $data[0]->isi; } ?>"></textarea><br/><br/>
		<br/><br/>
        <input type="submit" name="btnTambah" value="Simpan"/>
        <a href="<?php echo base_url()?>be/Landing/info_warga">Kembali</a>
    </form>
		</p>
		</div>
	</body>
</html>