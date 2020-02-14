<?php 
$as=mysql_query("SELECT * FROM tsaran where id_user=$kode");
$d=mysql_num_rows($as);
$a=mysql_fetch_array($as);

 if ($d > 0){
  echo'<div class="alert alert-info alert-dismissable" style="border-radius: 0px; border: 0px">
      Data Saran Anda  <a class="pull-right btn btn-success btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <span class="fa fa-plus"></span> Tambah Saran </a>
                     </div>';

 }else{
  echo'<div class="alert alert-danger alert-dismissable" style="border-radius: 0px; border: 0px">
      <i class="" style="font-family:Eurostar Regular;">Anda belum pernah mengirimkan saran. Ayoo kirimkan saran terbaik anda klik tambah saran di samping </i><a class="pull-right btn btn-success btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <span class="fa fa-plus"></span> TAMBAH SARAN </a>
                     </div>';
 }


  ?>

 <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
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
            <input type="hidden" name="id_user" value="<?php echo $kode; ?>" class="form-control" readonly>
            <input type="text" name="level" value="<?php echo $level; ?>" class="form-control" readonly>
            
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
<?php 
$tampil=mysql_query("SELECT * FROU out_email where id_saran")

?>               

<?php 

$tampil = mysql_query("SELECT * FROM tsaran,prodi,bagian where tsaran.id_prodi=prodi.id_prodi AND tsaran.id_bagian=bagian.id_bagian AND id_user=$kode order by id_saran desc");
while($a=mysql_fetch_array($tampil)){
    $tanggal = tgl_indo($a['tanggal']);
    $jam=date('H:m:s');
    $tgl=date('Y-m-d');
    
echo"
<table class='table'>
    <tr class='table-row'>
        <td class='table-img'>
          <img src='images/no-image.jpg' alt='' />
        </td>";
        $idn=$a[id_saran];
    $t=mysql_query("SELECT * FROM out_email where id_saran=".$idn."");
    $f=mysql_num_rows($t);
    echo"
        <td class='table-text'>
          <h6>$nama</h6>
          <h7>$level</h7>
        <p>$a[isi]</p>";
        if($f > 0){
        echo"<small>$a[jam] <a class='label label-success' href='index.php?view=balasan&id_saran=$a[id_saran]''>$f Balasan</a></small>";
      }else{
        echo"<small>$a[jam] <a class='label label-danger'> Belum ada Balasan</a></small>";
      }

echo"
        </td>
        <td>
          <span class='ur'>Tujuan Prodi : $a[nama_prodi]</span>
        </td>
        <td>
          <span class='ur'>Ke bagian: $a[nama_bagian]</span>
        </td>
        <td class='march'>
          $tanggal
        </td>
        <td >
          <i class='fa fa-star-half-o icon-state-warning'></i>
         </td>
        </tr>
            </table>"; 
          }
          
            
?>

    <?php
if (isset($_POST[kirim])){
      $simpan=mysql_query("INSERT INTO tsaran VALUES('','$_POST[id_bagian]','$_POST[id_prodi]','$_POST[id_user]','$_POST[level]','$_POST[isi]','$_POST[tanggal]','$_POST[jam]')");
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