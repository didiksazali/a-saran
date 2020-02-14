<div class="banner">
<?php if ($_GET[act]==''){ ?> 
            
                  <h3 class="box-title">Data Bagian Kampus</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='index.php?view=bagian&act=tambah'>Tambahkan Data Bagian</a>
    
                  <table id="example1" class="table table-striped">
                    <thead>
                     <tr>
                                            <th>No</th>
                                            <th>ID Bagian</th>
                                            <th>Nama Bagian</th>
                                            <th>Action</th>
                                        </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $tampil = mysql_query("SELECT * FROM bagian ORDER BY id_bagian DESC");
                    $no = 1;
                    while($r=mysql_fetch_array($tampil)){
                    echo "<tr><td>$no</td>
                              <td>$r[id_bagian]</td>
                              <td>$r[nama_bagian]</td>
                              <td><a class='btn btn-success btn-sm' title='Edit Data' href='?view=bagian&act=edit&id=$r[id_bagian]'><span class='fa fa-edit'></span></a>
                                <a class='btn btn-danger btn-sm' title='Delete Data' href='?view=bagian&hapus=$r[id_bagian]'><span class='fa fa-trash'></span></a>
                              </td>";
                            echo "</tr>";
                      $no++;
                      }
                      if (isset($_GET[hapus])){
                          mysql_query("DELETE FROM bagian where id_bagian='$_GET[hapus]'");
                          echo "<script>document.location='index.php?view=bagian';</script>";
                      }

                  ?>
                    </tbody>
                  </table>
                
<?php 
}elseif($_GET[act]=='tambah'){
    if (isset($_POST[tambah])){
        mysql_query("INSERT INTO bagian VALUES('','$_POST[nama_bagian]')");
        echo "<script>document.location='index.php?view=bagian';</script>";
    }
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Data Bagian Kampus</h3>
                </div>
              <div class='box-body'>
              <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-hover table-striped'>
                  <tbody>
                    <tr><th scope='row'>Nama Prodi</th>               <td><input type='text' class='form-control' name='nama_bagian'></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='tambah' class='btn btn-info'> <span class='fa fa-plus'></span> Tambahkan</button>
                    <a href='index.php?view=bagian' class='btn btn-danger pull-right'><span class='fa fa-remove'></span> Cancel</a>
                    
                  </div>
              </form>
            </div>";
}elseif($_GET[act]=='edit'){
   if (isset($_POST[update])){
        mysql_query("UPDATE bagian SET nama_bagian = '$_POST[nama_bagian]'
                                          where id_bagian='$_POST[id_bagian]'");
      echo "<script>document.location='index.php?view=bagian&act=edit&id=".$_POST[id_bagian]."';</script>";
    }

    $edit = mysql_query("SELECT * FROM bagian where id_bagian='$_GET[id]'");
    $s = mysql_fetch_array($edit);
    echo "<div class='banner'>
          <h3 class='box-title'>Edit Bagian</h3><br/>
             <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                  <table class='table table-striped'>
                  <tbody>
                    <input type='hidden' name='id_bagian' value='$s[id_bagian]'>
                    
                    <tr><th width='120px' scope='row'>Nama Bagian</th>      <td><input type='text' class='form-control' name='nama_bagian' value='$s[nama_bagian]'> </td></tr>                 
              </tbody>
              </table>
              <br/>
              <div class='box-footer'>
                    <button type='submit' name='update' class='btn btn-info'><span class='fa fa-refresh'></span> Update</button>
                    <a href='index.php?view=bagian' class='btn btn-danger pull-right'><span class='fa fa-remove'></span> Cancel</a>
                    
                  </div>

              </form>";
}
?>