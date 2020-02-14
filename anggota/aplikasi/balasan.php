<div class="banner">
<?php 
$tampil=mysql_query("SELECT * FROM tsaran,bagian,prodi,user where tsaran.id_bagian=bagian.id_bagian AND tsaran.id_prodi=prodi.id_prodi AND tsaran.id_user=user.id_user AND id_saran='$_GET[id_saran]'");
$a=mysql_fetch_array($tampil);
    $tanggal = tgl_indo($a['tanggal']);
    $jam=date('H:m:s');
    $tgl=date('Y-m-d');
echo"
<table class='table'>
    <tr class='table-row'>
        <td class='table-img'>
          <img src='images/no-image.jpg' alt='' />
        </td>
        <td class='table-text'>
          <h6>$a[nama_lengkap]</h6>
          <h6>$a[level]</h6>
        <p>$a[isi]</p>
        <small>$a[jam]</small>
        </td>
        <td>
          <span class='ur'>Prodi : $a[nama_prodi]</span>
        </td>
        <td>
          <span class='ur'>bagian: $a[nama_bagian]</span>
        </td>
        <td class='march'>
          $tanggal
        </td>
        <td >
          <i class='fa fa-star-half-o icon-state-warning'></i>
         </td>
        </tr>
            </table>";
            include "aplikasi/balasan_saran.php"; 
            include "aplikasi/tanggapan.php"; 


$tampil=mysql_query("SELECT * FROM out_email where id_saran='$_GET[id_saran]'");
$a=mysql_fetch_array($tampil);
    $tanggal = tgl_indo($a['tanggal']);
    $jam=date('H:m:s');
    $tgl=date('Y-m-d');
            echo"<form action='' method='post'>
                    <div class='form-group'>
                     <input type='hidden' name='id_email' value='$a[id_email]' class='form-control'>
                     <input type='hidden' name='id_saran' value='$a[id_saran]' class='form-control'>
                     <input type='hidden' name='id_user' value='$kode' class='form-control'>
                     <input type='hidden' name='email_pengirim' value='$email' class='form-control'>
                      <input type='text' class='form-control' name='email_penerima' value='$a[email_pengirim]' readonly>
                     <input type='hidden' name='email_pengirim' value='mail@adminkotaksaran.com' class='form-control'>
                    </div>"; ?>
                    <div>
                      <textarea name='isi_balasan' placeholder="Tanggapi Balasan" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <input type="hidden" name="jam" value="<?php echo $jam; ?>" class="form-control">
                    <input type="hidden" name="tanggal" value="<?php echo $tgl; ?>" class="form-control">
                      <?php 
                        if (isset($_POST[kirim])){
                          $name='sisteminformasi-sekolah.co';
                          $email=$_POST['email_penerima'];
                          $message=$_POST['isi_pesan'];

                          $to=$email;

                          $message="From:$name <br />".$message;

                          $headers = "MIME-Version: 1.0" . "\r\n";
                          $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

                          // More headers
                          $headers .= 'From: admin@sistemkotaksaran.com <noreply@sistemkotaksaran.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
                          $headers .= 'Cc: admin@sistemkotaksaran.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
                          @mail($to,$subject,$message,$headers);
                          if(@mail){
                            echo "<center>Email sent successfully !!</center>";  
                          }
                        }
                      ?>
                <div class="box-footer clearfix">
                  <button type='submit' name='kirim' class="btn btn-success" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                </form>
                <?php
if (isset($_POST[kirim])){
      $simpan=mysql_query("INSERT INTO balas VALUES('','$_POST[id_email]','$_POST[id_saran]','$_POST[id_user]','$_POST[email_pengirim]','$_POST[email_penerima]','$_POST[isi_balasan]','$_POST[jam]','$_POST[tanggal]')");
      if($simpan) {
      echo "
      <script>window.alert('Balasan Telah terkirim..');
                window.location='index.php?view=balasan&id_saran=".$_GET[id_saran]."'</script>";
    }else {
         echo "<script>window.alert('Maaf, email gagal terkirim');
                window.location='index.php'</script>";
    } 
}
    ?>