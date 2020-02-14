
<div class="banner">
<div class="alert alert-info alert-dismissable" style="border-radius: 0px; border: 0px">
      Data Saran Terkirim ke Administrator <a class="pull-right btn btn-success btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <span class="fa fa-plus"></span> Tambahkan Saran </a></div>


      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

        <form action="" method="POST" enctype="multipart/form-data">
        <select name='id_bagian' class="form-control" required>
                      <option value='0' selected>- Kirim Ke bagian- </option>
                      <?php 
                      $tampil=mysql_query("SELECT * FROM bagian where id_bagian !=0 order by nama_bagian DESC");
                      while($a=mysql_fetch_array($tampil))
                      {
                     ?>
                      <option value='<?php echo $a[id_bagian]; ?>'><?php echo $a['nama_bagian'] ?></option>
                      <?php } ?></select><br/>
                    <select name='id_prodi' class="form-control" required>

                      <option value='0' selected>- Program Studi </option>
                        <?php 
                      $tampil=mysql_query("SELECT * FROM prodi where id_prodi !=0 order by nama_prodi DESC");
                      while($a=mysql_fetch_array($tampil))
                      {
                     ?>
                      <option value='<?php echo $a[id_prodi]; ?>'><?php echo $a['nama_prodi'] ?></option>
                      <?php } ?>
                    </select><br/><p></p>
            <input type="hidden" name="id_user" value="<?php echo $kode; ?>" class="form-control" readonly>
            
            <br/>
        <div class="post">
          <div class="text-area">
            <textarea required="" placeholder="" name="isi" rows="6" value="Tulis Status di sini" style="font-size:14px;"></textarea>
          <div class="post-at">
            <input type="hidden" name="tanggal" value="<?php echo $tgl; ?>" class="form-control">
            <input type="hidden" name="jam" value="<?php echo $jam; ?>" class="form-control">
            <div class="text-sub">
            </div>
              <input type="submit" value="kirimkan" name="kirim" class="btn btn-primary">
          </form>
          </div></div></div>
</div>  
</div>  
       <table id="example1" class="table table-striped table-hover">

      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pengirim</th>
          <th>Oleh</th>
          <th>Ke Prodi</th>
          <th>Ke Bagian</th>
          <th>Isi Topic</th>
          <th>Tanggal</th>
          <th>Jam</th>
        </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $tampil = mysql_query("SELECT * FROM tsaran,prodi,bagian,user where tsaran.id_prodi=prodi.id_prodi AND tsaran.id_bagian=bagian.id_bagian AND tsaran.id_user=user.id_user order by id_saran desc");
                    $no = 1;
                    while($r=mysql_fetch_array($tampil)){
                    $tanggal = tgl_indo($r[tanggal]);
                    echo "<tr>
                              <td>$no</td>
                              <td>$r[nama_lengkap]</td>
                              <td>$r[level]</td>
                              <td>$r[nama_prodi]</td>
                              <td>$r[nama_bagian]</td>
                              <td>";?> <?php echo substr($r['isi'],0,20);?>.... <?php echo"</td>
                              <td>$tanggal</td>
                              <td>$r[jam]</td>";
                            echo "</tr>";
                      $no++;
                      }
                  ?>
                    </tbody>
                  </table>
                </div>



 <?php
if (isset($_POST[kirim])){
      $simpan=mysql_query("INSERT INTO tsaran VALUES('','$_POST[id_bagian]','$_POST[id_prodi]','$_POST[id_user]','','$_POST[isi]','$_POST[tanggal]','$_POST[jam]')");
      if($simpan) {
      echo "
      <script>window.alert('Terimakasih, Saran anda sudah terkirim..');
                window.location='index.php'</script>";
    }else {
         echo "<script>window.alert('Maaf, Anda saran anda gagal terkirim, mohon periksa kembali pengisian data anda');
                window.location='index.php'</script>";
    } 
}
    ?>