
<?php 
$tampil=mysql_query("SELECT * FROM out_email where id_saran='$_GET[id_saran]'");
while($a=mysql_fetch_array($tampil)){
    $tanggal = tgl_indo($a['date']);
    $jam=date('H:m:s');
    $tgl=date('Y-m-d');
echo"
<table class='table'>
    <tr class='table-row pull-right'>
        <td class='table-img pull-right'>
          <img src='$foto' alt='' />
        </td>
        <td class='table-text'>
          <h6>$nama</h6>
          <h6>Admin Bagian $level</h6>
        <p>$a[isi_pesan]</p>
        <small>$a[clock]</small>
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
