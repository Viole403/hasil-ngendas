<?php
  include '../conn/koneksi.php';
?>
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Riwayat Transaksi
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=riwayat_search" method="post">
        	<table width="100%" height="100%">
            	<tr>
                	
                    <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Judul Buku, Peminjam"></td>
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
   	            <th width="30%">Judul Buku</th>
   	            <th width="20%">Pengarang</th>
   	            <th width="15%">Penerbit</th>
   	            <th width="15%">Jumlah</th>
                <th width="8%">Opsi</th>
                <th width="8%">Edit</th>
                <th width="8%">Hapus</th>
              </tr>
            </thead>
        <?php $no=1;?>
        <?php $tampil_buku=$konek->query ("SELECT * FROM tbl_buku ORDER by judul");?>
        <?php $total = mysqli_num_rows($tampil_buku);?>
        <?php while($data=$tampil_buku->fetch_assoc()){?>
          <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td align="center"><?php echo $data['judul']; ?></a></td>
   	            <td align="center"><?php echo $data['pengarang']; ?></td>
   	            <td align="center"><?php echo $data['penerbit']; ?></td>
   	            <td align="center"><?php echo $data['jumlah_buku']; ?></td>
                <td align="center"><div class="tombol-opsi-container"><a href="?page=detil-buku&judul=<?php echo $data['judul']; ?>" class="tombol">Detail</a></td></div>
                <td align="center"><a href="?page=buku_edit&id=<?php echo $data['id']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                <td align="center"><a href="?page=buku_hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data buku <?php echo $data['judul']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
              </tr>
            <?php $no++; } ?>
            </tbody>
          </table>
          </div>
          <ul class="pagination">     
            <?php 
            for($x=1;$x<=$halaman;$x++){
              ?>
              <li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
            <?php
          }
          ?>            
        </ul>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> buku</td>
                </tr>
            </table>
    	</div>
   	  </div>
    </div>