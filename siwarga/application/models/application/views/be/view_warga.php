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
          	<h3><i class="fa fa-angle-right"></i> DAFTAR WARGA</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
		<p><h3 align="center">Daftar Warga</h3></p>
		<p align="center"><a href="<?php echo base_url()?>be/Landing/input_warga">Tambah Warga</a></p>
		<p align="center">
			<table class="table">
				<tr>
					<th>No</th>
					<th>NIK</th>
					<th>Nama Warga</th>
					<th>No KK</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Telepon</th>
					<!-- <th>Status</th> -->
					<th>RT</th>
					<th>RW</th>
					<th colspan="2">Opsi</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nik;?></td>
					<td><?php echo $row->nama;?></td>
					<td><?php echo $row->no_kk;?></td>
					<td><?php echo $row->tmp_lahir;?></td>
					<td><?php echo $row->tgl_lahir;?></td>
					<td><?php echo $row->telp;?></td>
					<!-- <td><?php echo $row->status;?></td> -->
					<td><?php echo $row->id_rt;?></td>
					<td><?php echo $row->rw;?></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/edit_warga/<?php echo $row->nik;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/delete_warga/<?php echo $row->nik;?>">Hapus</a></td>
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