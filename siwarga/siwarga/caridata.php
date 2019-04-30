<?php 
	/* ===== www.dedykuncoro.com ===== */
	include_once "koneksi.php";

	$nik = $_POST['keyword'];

	$query = mysqli_query($con, "SELECT * FROM warga WHERE nik LIKE '%".$nik."%'");

	$num_rows = mysqli_num_rows($query);

	if ($num_rows > 0){
		$json = '{"value":1, "results": [';

		while ($row = mysqli_fetch_array($query)){
			$char ='"';

			$json .= '{
				"nik": "'.str_replace($char,'`',strip_tags($row['nik'])).'",
				"nama": "'.str_replace($char,'`',strip_tags($row['nama'])).'"
			},';
		}

		$json = substr($json,0,strlen($json)-1);

		$json .= ']}';

	} else {
		$json = '{"value":0, "message": "Anda Belum Terdaftar, Silahkan Mendaftar Di RT."}';
	}

	echo $json;

	mysqli_close($con);
?>