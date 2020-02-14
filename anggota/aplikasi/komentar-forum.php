<table class='table'>
<?php  
            $tampil=mysql_query("SELECT * FROM komentar,member where komentar.id_member=member.id_member AND id_forum='$_GET[id_forum]' order by id_komentar ASC");

            while($data=mysql_fetch_assoc($tampil))

            { 
        $tanggal = tgl_indo($data['tanggal']);
        echo"
<div class='container'>
    <tr class='table-row pull-right'>
      <td class='table-img pull-right'>
        <img src='images/in6.png' alt='' />
      </td>
      <td class='table-text'>
        <h6> $data[nama_lengkap]</h6>
          <p>$data[isi_komentar]</p>
          <small>$data[jam]</small>
      </td>
       <td>
          <span class='ur fa fa-comment'></span>
        </td>
      <td class='march'>
       <small>$data[tanggal]</small> 
      </td>
      <td >
       <i class='fa fa-star-half-o icon-state-warning'></i>
      </td>
    </tr>";
    } ?>
  </table>
