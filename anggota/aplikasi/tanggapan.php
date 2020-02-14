
<?php 
$tampil=mysql_query("SELECT * FROM balas,user where balas.id_user=user.id_user AND id_saran='$_GET[id_saran]'");
while($a=mysql_fetch_array($tampil)){
    $tanggal = tgl_indo($a['tanggal']);
    $jam=date('H:m:s');
    $tgl=date('Y-m-d');
echo"
<table class='table'>
    <tr class='table-row pull-right'>
        <td class='table-img'>
          <img src='images/no-image.jpg' alt='' />
        </td>
        <td class='table-text'>
          <h6 style=''>$a[nama_lengkap]</h6>
          <h6></h6>
        <p>$a[isi_balasan]</p>
        <small>$a[jam]</small>
        </td>
        <td>
          <span class='ur'>$a[email]</span>
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
