
<div class="banner">
<div class="alert alert-info alert-dismissable" style="border-radius: 0px; border: 0px">
      Data Saran Masuk</div>
       <table id="example1" class="table table-striped table-hover">

      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pengirim</th>
          <th>Oleh</th>
          <th>Nama Prodi</th>
          <th>Nama Bagian</th>
          <th>Isi Topic</th>
          <th>Tanggal</th>
          <th>Jam</th>
        </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $tampil = mysql_query("SELECT * FROM tsaran,prodi,bagian,user where tsaran.id_prodi=prodi.id_prodi AND tsaran.id_bagian=bagian.id_bagian AND tsaran.id_user=user.id_user order by id_saran desc");
                    $no = 1;
                    while($r=mysql_fetch_array($tampil)){
                    $tanggal = tgl_indo($r[tanggal]);
                    echo "<tr>
                              <td>$no</td>
                              <td>$r[nama_lengkap]</td>
                              <td><a href='index.php?view=detail&id_saran=$r[id_saran]'><span class='label label-info'>$r[level]</span></a></td>
                              <td>$r[nama_prodi]</td>
                              <td>$r[nama_bagian]</td>
                              <td>";?> <?php echo substr($r['isi'],0,20);?>.... <?php echo"</td>
                              <td>$tanggal</td>
                              <td>$r[jam]</td>";
                            echo "</tr>";
                      $no++;
                      }
                  ?>
                    </tbody>
                  </table>
                </div>



