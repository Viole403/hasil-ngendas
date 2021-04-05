<?php
include'conn/koneksi.php';
?>
<html>
<head>
	<title>Perpustakaan SMK 17 Agustus 1945 Surabaya</title>
	<link rel="stylesheet" type="text/css" href="style-depan.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
					<!-- <image id="logo-perpustakaan" src="images/logo.png"> -->
			</div>
			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1>PERPUSTAKAAN SMK 17 AGUSTUS 1945 SURABAYA</h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4>Jl.Nginden Semolo No.44 Surabaya</h4>
				</div>
			</div>
		</div>
		<div id="sidebar">
			<ul>
				<li><a href="index-depan.php?p=beranda-depan">Beranda</a></li>
				<li><a href="index-depan.php?p=info">Info Perpustakaan</a></li>
				<li><a href="index.php">Masuk Pustakawan</a></li>
				<li><a href="daftar.php">Daftar Pustakawan</a></li>
			</ul>
			
		</div>
		<div id="content-container">
			<div id="content">
		<?php
			$pages_dir='depan';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda-depan.php');
			}
		?>
		</div>
	</div>
		<div id="footer"><h3>TERIMA KASIH TELAH BERKUNJUNG</h3></div>
	</div>
</image>
</div>
</body>
</html>