   <?php
   include '../conn/koneksi.php';
   include 'transaksi_fungsi.php';
   ?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Transaksi
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=transaksi_search" method="post">
        	<table width="100%" height="100%" >
            	<tr>
                	<td width="50%"><a href="?page=transaksi_input" class=tombol>Input Transaksi</a></td>
                    <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Nama Peminjam"></td>
                    <td><input type="submit" id="submit" value="cari"></td>
                </tr>
            
            </table>
            </form>
            
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="25%">Judul Buku</th>
   	            <th width="25%">Peminjam</th>
   	            <th width="15%">Tgl Pinjam</th>
   	            <th width="15%">Tgl Kembali</th>
                <th width="10%">Terlambat</th>
                <th width="10%" id="label-opsi">Opsi</th>
                
              </tr>
            </thead>

        <?php $no=1;?>
        <?php $tampil_transaksi=$konek->query ("SELECT * FROM tbl_transaksi WHERE status='Pinjam' ORDER by id");?>
        <?php $total = mysqli_num_rows($tampil_transaksi);?>
        <?php while($data=$tampil_transaksi->fetch_assoc()){?>

   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td><?php echo $data['judul']; ?></a></td>
   	            <td><?php echo $data['nama']; ?></td>
   	            <td align="center"><?php echo $data['tgl_pinjam']; ?></td>
   	            <td align="center"><?php echo $data['tgl_kembali']; ?></td>
                <td align="center">
          <?php
					$tgl_dateline=$data['tgl_kembali'];
					$tgl_kembali=date('d-m-Y');
					$lambat=terlambat($tgl_dateline, $tgl_kembali);
					$denda=$lambat*$denda1;
					if ($lambat>0) {
						echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
					}
					else {
						echo $lambat." hari";
					}
				?>
                
          </td>
                <td align="center"><br>
                  <div class="tombol-opsi-container"><a href="?page=transaksi_proses_kembali&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']; ?>" class="tombol">Kembali</a>
                  <p class="tombol-opsi-container"><a href="?page=transaksi_proses_perpanjang&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul'];?>&tgl_kembali=<?php echo $data['tgl_kembali']; ?>&lambat=<?php echo $lambat; ?>" onclick="return confirm('Anda yakin ingin memperpanjang Transaksi <?php echo $data['judul']; ?> selama seminggu kedepan?') " class="tombol">Perpanjang</a></td></div>
              </tr>              
            <?php $no++; } ?>
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> Transaksi</td>
                    
                </tr>
            </table>
    	</div>
   	  </div>
    </div>