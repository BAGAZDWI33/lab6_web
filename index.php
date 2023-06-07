<!DOCTYPE html>
<html>
<head>
	<title>Modularisasi - Mobil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Modularisasi - Mobil</h1>
		<?php 
			include('form.php');
			include('database.php');

			$mobil = new Mobil($conn);

			if(isset($_POST['submit'])) {
				$merek = $_POST['merek'];
				$model = $_POST['model'];
				$tahun = $_POST['tahun'];
				$mobil->insertData($merek, $model, $tahun);
			}

			$data = $mobil->getData();

			if($data) {
				echo '<table>';
				echo '<tr><th>No</th><th>Merek</th><th>Model</th><th>Tahun</th></tr>';
				$no = 1;
				foreach ($data as $row) {
					echo '<tr><td>'.$no.'</td><td>'.$row['merek'].'</td><td>'.$row['model'].'</td><td>'.$row['tahun'].'</td></tr>';
					$no++;
				}
				echo '</table>';
			} else {
				echo 'Data mobil kosong';
			}
		?>
	</div>
</body>
</html>
