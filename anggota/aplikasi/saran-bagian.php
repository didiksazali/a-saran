
<?php 
$tampil = mysql_query("SELECT * FROM tsaran,prodi where tsaran.id_prodi=prodi.id_prodi AND id_bagian=$_SESSION[id_bagian] order by id_saran desc");
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
          <h6>$r[nama_lengkap]</h6>
          <h7>$a[level]</h7>
        <p>$a[isi]</p>";
        if($f > 0){
        echo"<small>$a[jam] <a class='label label-success' href='index.php?view=detail&id_saran=$a[id_saran]'>$f Balasan</a></small>";
      }else{
        echo"<small>$a[jam] <a class='label label-danger' href='index.php?view=detail&id_saran=$a[id_saran]'> Balas saran</a></small>";
      }

echo"
        </td>
        <td>
          <span class='ur'>Tujuan Prodi : $a[nama_prodi]</span>
        </td>
        <td>
          <span class='ur'>Ke bagian: $level</span>
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