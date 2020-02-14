<div class="banner">
<?php if ($_GET[act]==''){ ?> 
            
                  <h3 class="box-title">Data Program Studi</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='index.php?view=prodi&act=tambah'>Tambahkan Data Prodi</a>
    
                  <table id="example1" class="table table-striped">
                    <thead>
                     <tr>
                                            <th>No</th>
                                            <th>ID Prodi</th>
                                            <th>Nama Prodi</th>
                                            <th>Action</th>
                                        </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $tampil = mysql_query("SELECT * FROM prodi ORDER BY id_prodi DESC");
                    $no = 1;
                    while($r=mysql_fetch_array($tampil)){
                    echo "<tr><td>$no</td>
                              <td>$r[id_prodi]</td>
                              <td>$r[nama_prodi]</td>
                              <td>
                                <a class='btn btn-info btn-sm' title='Lihat Detail' href='?view=prodi&act=detail$r[id_prodi]'><span class='fa fa-search'></span></a>
                                <a class='btn btn-success btn-sm' title='Edit Data' href='?view=prodi&act=edit&id=$r[id_prodi]'><span class='fa fa-edit'></span></a>
                                <a class='btn btn-danger btn-sm' title='Delete Data' href='?view=prodi&hapus=$r[id_kategori]'><span class='fa fa-trash'></span></a>
                              </td>";
                            echo "</tr>";
                      $no++;
                      }
                      if (isset($_GET[hapus])){
                          mysql_query("DELETE FROM prodi where id_prodi='$_GET[hapus]'");
                          echo "<script>document.location='index.php?view=prodi';</script>";
                      }

                  ?>
                    </tbody>
                  </table>
                
<?php 
}elseif($_GET[act]=='tambah'){
    if (isset($_POST[tambah])){
        mysql_query("INSERT INTO prodi VALUES('','$_POST[nama_prodi]')");
        echo "<script>document.location='index.php?view=prodi';</script>";
    }
    echo "<div class='banner'>
    <h3 class='box-title'>Tambah Data Program Studi</h3><br/>
             <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-hover table-striped'>
                  <tbody>
                    <tr><th scope='row'>Nama Prodi</th>               <td><input type='text' class='form-control' name='nama_prodi'></td></tr>
                  </tbody>
                  </table>
              <br/>
        <div class='box-footer'>
        <button type='submit' name='tambah' class='btn btn-info'> <span class='fa fa-plus'></span> Tambahkan</button>
      <a href='index.php?view=kategori' class='btn btn-danger pull-right'><span class='fa fa-trash'></span> Cancel</a>
                    
                  </div>
              </form>";
}elseif($_GET[act]=='edit'){
   if (isset($_POST[update])){
        mysql_query("UPDATE prodi SET nama_prodi = '$_POST[nama_prodi]'
                                          where id_prodi='$_POST[id_prodi]'");
      echo "<script>document.location='index.php?view=prodi&act=edit&id=".$_POST[id_prodi]."';</script>";
    }

    $edit = mysql_query("SELECT * FROM prodi where id_prodi='$_GET[id]'");
    $s = mysql_fetch_array($edit);
    echo "<div class='banner'>
    <h3 class='box-title'>Edit Program Studi</h3><br/>
      <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-hover table-striped'>
                  <tbody>
                    <input type='hidden' name='id_prodi' value='$s[id_prodi]'>
                    
                    <tr><th width='120px' scope='row'>Nama Kategori</th>      <td><input type='text' class='form-control' name='nama_prodi' value='$s[nama_prodi]'> </td></tr>                 
              </tbody>
              </table><br/>
              <div class='box-footer'>
                    <button type='submit' name='update' class='btn btn-info'><span class='fa fa-refresh'></span> Update</button>
                    <a href='index.php?view=kategori' class='btn btn-danger pull-right'><span class='fa fa-remove'></span> Cancel</a>
                    
                  </div>
              </form>
              </div>";
}
?>