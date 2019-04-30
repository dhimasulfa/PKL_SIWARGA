<?php 
	include_once "koneksi.php";

	$rt = $_POST['keyword'];

	$query = mysqli_query($con, "SELECT * FROM rt WHERE rt LIKE '%".$rt."%'");

	$num_rows = mysqli_num_rows($query);

	if ($num_rows > 0){
		$json = '{"value":1, "results": [';

		while ($row = mysqli_fetch_array($query)){
			$char ='"';

			$json .= '{
				"id_rt": "'.str_replace($char,'`',strip_tags($row['id_rt'])).'",
				"rt": "'.str_replace($char,'`',strip_tags($row['rt'])).'",
				"rw": "'.str_replace($char,'`',strip_tags($row['rw'])).'",
				"nama_ketua": "'.str_replace($char,'`',strip_tags($row['nama_ketua'])).'"
			},';
		}

		$json = substr($json,0,strlen($json)-1);

		$json .= ']}';

	} else {
		$json = '{"value":0, "message": "RT tidak ditemukan."}';
	}

	echo $json;

	mysqli_close($con);
?>