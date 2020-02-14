<?php
$tampil=mysql_query("SELECT * FROM saran,bagian,prodi where saran.id_bagian=bagian.id_bagian AND saran.id_prodi=prodi.id_prodi AND id_saran='$_GET[id_saran]'");
$a=mysql_fetch_array($tampil);
    $tanggal = tgl_indo($a['tanggal']);
    $jam=date('H:m:s');
    $tgl=date('Y-m-d');
            echo"<form action='' method='post'>
                    <div class='form-group'>
                     <input type='hidden' name='id_saran' value='$a[id_saran]' class='form-control'>
                     <input type='hidden' name='nama_penerima' value='$a[nama_pengirim]' class='form-control'>
                      <input type='text' class='form-control' name='email_penerima' value='$a[email]' readonly>
                     <input type='hidden' name='status_penerima' value='$a[status]' class='form-control'>
                     <input type='hidden' name='email_pengirim' value='mail@adminkotaksaran.com' class='form-control'>
                    </div>"; ?>
                    <div>
                      <textarea name='isi_pesan' placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <input type="hidden" name="clock" value="<?php echo $jam; ?>" class="form-control">
                    <input type="hidden" name="date" value="<?php echo $tgl; ?>" class="form-control">
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