<html>
	<head>
		<title>Perangkat Desa</title>
	</head>
	<body>
		<p><h3 align="center">PERANGKAT DESA</h3></p>
		<p align="center"><a href="<?php echo base_url()?>be/Landing/input_profil">Tambah Profil</a></p>
		<p align="center">
			<table border="1">
				<tr align="center">
					<th>Id RT</th>
					<th>RT</th>
					<th>RW</th>
                    <th>Nama Ketua</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>No KK</th>
					<th colspan="2">Opsi</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $row->id_rt;?></td>
					<td><?php echo $row->rt;?></td>
                    <td><?php echo $row->rw;?></td>
                    <td><?php echo $row->nama_ketua;?></td>
                    <td><?php echo $row->alamat;?></td>
                    <td><?php echo $row->telp;?></td>
					<td><?php echo $row->no_kk;?></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/edit_profil/<?php echo $row->id_profil;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>be/Landing/delete_rt/<?php echo $row->id_rt;?>">Hapus</a></td>
				</tr>
				<?php $no++;
                endforeach;?>
			</table>
		</p>
	</body>
</html>