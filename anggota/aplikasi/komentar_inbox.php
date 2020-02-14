
<div class="container"></div>
<div class="container">
<div class="container">
<div class="container">
<?php  
            $tampil=mysql_query("SELECT * FROM kom_pemberitahuan where kom_pemberitahuan.id_member='$id' AND id_pemberitahuan='$_GET[id_pemberitahuan]' ORDER BY id_pemberitahuan DESC");

            while($data=mysql_fetch_assoc($tampil))

            { 
        $tanggal = tgl_indo($data['tanggal']);

          echo "<div class='comments'>
            <div class='comment'>
            
              <div class='client'>
                <img src='images/no-image.jpg' alt=''>
              </div>
              <div class='client-message'>
                <p><a href=''>$nama</a><i class='fa fa-calendar'></i>$tanggal <i class='fa fa-clock'></i> $data[jam] </p>
                <h6 style='font-family:Calibri;color:black;'>
                $data[isi_koment] </h6>
               </div>
              <div class='clearfix'></div>
            </div>
            </div>"; } ?>

</div>
</div>
</div>