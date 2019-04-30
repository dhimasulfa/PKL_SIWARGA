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
          	<h3><i class="fa fa-angle-right"></i> TAMBAH RW</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	
		<p><h3 align="center">Daftar RW</h3></p>
		<p align="center"><a href="<?php echo base_url()?>be/Landing/input_rw">Tambah RW</a></p>
		<p align="center">
			<table class="table">
				<tr>
					<th>No</th>
					<!-- <th>Id RW</th> -->
					<th>RW</th>
					<th>Nama Ketua</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>No KK</th>
					<th>Status</th>
					<th colspan="2">Opsi</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<!-- <td><?php echo $row->id_rw;?></td> -->
					<td><?php echo $row->rw;?></td>
					<td><?php echo $row->nama_ketua;?></td>
					<td><?php echo $row->alamat;?></td>
					<td><?php echo $row->telp;?></td>
					<td><?php echo $row->no_kk;?></td>
					<td><?php echo $row->status;?></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/edit_rw/<?php echo $row->id_rw;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/delete_rw/<?php echo $row->id_rw;?>">Hapus</a></td>
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