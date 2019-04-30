<?php 
	include_once "koneksi.php";

	$rw = $_POST['keyword'];

	$query = mysqli_query($con, "SELECT * FROM rw WHERE rw LIKE '%".$rw."%'");

	$num_rows = mysqli_num_rows($query);

	if ($num_rows > 0){
		$json = '{"value":1, "results": [';

		while ($row = mysqli_fetch_array($query)){
			$char ='"';

			$json .= '{
				"id_rw": "'.str_replace($char,'`',strip_tags($row['id_rw'])).'",
				"rw": "'.str_replace($char,'`',strip_tags($row['rw'])).'",
				"nama_ketua": "'.str_replace($char,'`',strip_tags($row['nama_ketua'])).'"
			},';
		}

		$json = substr($json,0,strlen($json)-1);

		$json .= ']}';

	} else {
		$json = '{"value":0, "message": "RW tidak ditemukan."}';
	}

	echo $json;

	mysqli_close($con);
?>