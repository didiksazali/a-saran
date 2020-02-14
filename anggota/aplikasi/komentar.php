
<div class="container"></div>
<div class="container">
<div class="container">
<div class="container">
<?php  
            $tampil=mysql_query("SELECT * FROM komentar,member where komentar.id_member=member.id_member AND id_forum='$_GET[id_forum]' order by id_komentar ASC");

            while($data=mysql_fetch_assoc($tampil))

            { 
        $tanggal = tgl_indo($data['tanggal']);

          echo "<div class='comments'>
            <div class='comment'>
            
              <div class='client'>
                <img src='images/no-image.jpg' alt=''>
              </div>
              <div class='client-message'>
                <p><a href=''>$data[nama_lengkap]</a><i class='fa fa-calendar'></i>$tanggal <i class='fa fa-clock'></i> $data[jam] </p>
                <h6 style='font-family:Calibri;color:black;'>
                $data[isi_komentar] </h6>
               </div>
              <div class='clearfix'></div>
            </div>
            </div>"; } ?>

</div>
</div>
</div>