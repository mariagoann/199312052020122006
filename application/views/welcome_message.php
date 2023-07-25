<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>DATA PESERTA</h1>

	<div id="body">
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Tanggal/Jam Daftar</th>
					<th>Nama</th>
					<th>Nip</th>
					<th>Satuan Kerja</th>
					<th>Posisi yang Dipilih</th>
					<th>Bahasa Pemrograman</th>
					<!-- <th>Framework</th> -->
					<th>Database</th>
					
					<th>Tools</th>
					<th>Is Mobile</th>
					<th>Nilai T1</th>
					<th>Nilai T2</th>
					<th>Nilai T3</th>
					<th>Download</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// echo "<pre>";
				// // print_r($peserta);die;
					$i = 1;
					foreach ($peserta as $key => $value) {
						echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$value['timestamp']."</td>";
						echo "<td>".$value['nama']."</td>";
						echo "<td>".$value['nip']."</td>";
						echo "<td>".$value['satuan_kerja']."</td>";
						echo "<td>".$value['posisi_yang_dipilih']."</td>";
						echo "<td>".$value['bahasa_pemrograman_yang_dikuasai']."</td>";
						// echo "<td>".array_key_exists('framework_bahasa_pemrograman_yang_dikuasai', $value)===true?$value['framework_bahasa_pemrograman_yang_dikuasai']:NULL."</td>";
						echo "<td>".$value['database_yang_dikuasai']."</td>";
						echo "<td>".$value['tools_yang_dikuasai']."</td>";
						echo "<td>".$value['pernah_membuat_mobile_apps']."</td>";
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>