		<?php
		$tgl=date('Y-m-d');
		$jam=date('H:m:s');
		?>
				<form action="" method="POST" enctype="multipart/form-data">
				<select name='id_bagian' class="form-control" required>
              				<option value='0' selected>- Kirim Ke bagian- </option>
              				<?php 
            					$tampil=mysql_query("SELECT * FROM bagian order by nama_bagian DESC");
            					while($a=mysql_fetch_array($tampil))
            					{
            				 ?>
              				<option value='<?php echo $a[id_bagian]; ?>'><?php echo $a['nama_bagian'] ?></option>
              				<?php } ?></select><br/>
            				<select name='id_prodi' class="form-control" required>

              				<option value='0' selected>- Program Studi </option>
              					<?php 
            					$tampil=mysql_query("SELECT * FROM prodi order by nama_prodi DESC");
            					while($a=mysql_fetch_array($tampil))
            					{
            				 ?>
              				<option value='<?php echo $a[id_prodi]; ?>'><?php echo $a['nama_prodi'] ?></option>
              				<?php } ?>
            				</select><br/><p></p>
						<input type="text" name="nama_pengirim" value="<?php echo $nama; ?>" class="form-control" readonly>
						<input type="hidden" name="status" value="<?php echo $level; ?>" class="form-control">
						<input type="hidden" name="email" value="<?php echo $email; ?>" class="form-control">
						<br/>
				<div class="post">
					<div class="text-area">
						<textarea required="" placeholder="" name="isi" value="Tulis Status di sini" style="font-size:14px;"></textarea>
					<div class="post-at">
						<input type="hidden" name="tanggal" value="<?php echo $tgl; ?>" class="form-control">
						<input type="hidden" name="jam" value="<?php echo $jam; ?>" class="form-control">
						<div class="text-sub">
						</div>
							<input type="submit" value="kirimkan" name="kirim" class="btn btn-primary">
					</form>
					</div></div></div>


					<?php
if (isset($_POST[kirim])){
      $simpan=mysql_query("INSERT INTO saran VALUES('','$_POST[id_bagian]','$_POST[id_prodi]','$_POST[nama_pengirim]','$_POST[email]','$_POST[status]','$_POST[isi]','$_POST[tanggal]','$_POST[jam]')");
      if($simpan) {
      echo "
      <script>window.alert('Terimakasih, Saran anda sudah terkirim..');
                window.location='index.php?view=tampil'</script>";
    }else {
         echo "<script>window.alert('Maaf, Anda gagal menjadi member kami. Harap periksa kembali pengisian data anda');
                window.location='index.php'</script>";
    } 
}
    ?>