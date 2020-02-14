
<div class="banner">
<div class="alert alert-info alert-dismissable" style="border-radius: 0px; border: 0px">
      Data Email Keluar</div>
       <table id="example1" class="table table-striped table-hover">

      <thead>
        <tr>
          <th>No</th>
          <th>Email Pengirim</th>
          <th>Email Penerima</th>
          <th>Nama Penerima</th>
          <th>Status</th>
          <th>Isi email</th>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Aksi</th>
        </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $tampil = mysql_query("SELECT * FROM out_email order by id_email desc");
                    $no = 1;
                    while($r=mysql_fetch_array($tampil)){
                    $tanggal = tgl_indo($r[date]);
                    echo "<tr>
                              <td>$no</td>
                              <td>$r[email_pengirim]</td>
                              <td><a href='index.php?view=detail&id_saran=$r[id_saran]' class='label label-info'>$r[email_penerima]</a></td>
                              <td>$r[nama_penerima]</td>
                              <td>$r[status_penerima]</td>
                              <td>";?> <?php echo substr($r['isi_pesan'],0,20);?>.... <?php echo"</td>
                              <td>$tanggal</td>
                              <td>$r[clock]</td>
                              <td><a class='btn btn-danger btn-xs' title='Delete Email' href=?view=email&hapus=$r[id_email]><span class='fa fa-trash'></span></a></td>";
                            echo "</tr>";
                      $no++;
                      }
                      if (isset($_GET[hapus])){
                          mysql_query("DELETE FROM out_email where id_email='$_GET[hapus]'");
                          echo "<script>document.location='index.php?view=email';</script>";
                      }
                  ?>
                    </tbody>
                  </table>
                </div>



