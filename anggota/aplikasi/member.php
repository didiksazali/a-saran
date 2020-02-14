<div class="banner">
<?php if ($_GET[act]==''){ ?> 
            <div class="col-xs-12">  
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Data Administrator </h3>
                  <a class='pull-right btn btn-primary btn-sm' href='index.php?view=member&act=tambah'>Tambahkan Data Member</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Usename</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Level</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $tampil = mysql_query("SELECT * FROM member ORDER BY id_member DESC");
                    $no = 1;
                    while($r=mysql_fetch_array($tampil)){
                    echo "<tr><td>$no</td>
                              <td>$r[username]</td>
                              <td>$r[nama_lengkap]</td>
                              <td>$r[email]</td>
                              <td>$r[phone]</td>
                              <td>OK</td>
                              <td><center>
                                <a class='fa fa-desktop' title='Edit Data' href='?view=member&act=edit&id_member=$r[id_member]'></a>
                                <a class='fa fa-pencil' title='Edit Data' href='?view=member&act=edit&id_member=$r[id_member]'></a>
                                <a class='fa fa-trash' title='Delete Data' href='?view=member&hapus=$r[id_member]'></a>
                              </center></td>";
                            echo "</tr>";
                      $no++;
                      }
                      if (isset($_GET[hapus])){
                          mysql_query("DELETE FROM member where id_member='$_GET[hapus]'");
                          echo "<script>document.location='index.php?view=member';</script>";
                      }

                  ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
<?php 
}elseif($_GET[act]=='edit'){
    if (isset($_POST[update])){
      $passs = md5($_POST[password]);
      if (trim($_POST[password])==''){
        mysql_query("UPDATE member SET username = '$_POST[username]',
                                         nama_lengkap = '$_POST[nama_lengkap]',
                                         Email        ='$_POST[email]',
                                         phone        ='$_POST[phone]',
                                         level        = '$_POST[level]' where id_member='$_POST[id_member]'");
      }else{
        mysql_query("UPDATE member SET username = '$_POST[username]',
                                         password = '$passs',
                                         nama_lengkap = '$_POST[nama_lengkap]',
                                         Email        ='$_POST[email]',
                                         phone        ='$_POST[phone]',
                                         level        = '$_POST[level]' where id_member='$_POST[id_member]'");
      }
      echo "<script>document.location='index.php?view=member';</script>";
    }
    $edit = mysql_query("SELECT * FROM member a where a.id_member='$_GET[id_member]'");
    $s = mysql_fetch_array($edit);
    echo "<div class='col-md-12'>
                  <h3 class='box-title'>Edit Data Member</h3>
                  <p><br/></p>
              <div class='box-body'>
              <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-hover table-striped'>
                  <tbody>
                    <input type='hidden' name='id_member' value='$s[id_member]'>
                    <tr><th width='170px' scope='row'>Username</th> <td><input type='text' class='form-control' name='username' value='$s[username]' style='border:0px;'> </td></tr>
                    <tr><th scope='row'>Password</th>               <td><input type='text' class='form-control' name='password' placeholder='Kosongkan saja Jika Password tidak diganti,...' style='border:0px;'></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>           <td><input type='text' class='form-control' name='nama_lengkap' value='$s[nama_lengkap]' style='border:0px;'></td></tr>
                    <tr><th scope='row'>Email</th>           <td><input type='text' class='form-control' name='email' value='$s[email]' style='border:0px;'></td></tr>
                    <tr><th scope='row'>No hp</th>           <td><input type='text' class='form-control' name='phone' value='$s[phone]' style='border:0px;'></td></tr>
                    <tr><th scope='row'>Level</th>           <td><input type='text' class='form-control' name='level' value='$s[level]' style='border:0px;'></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='update' class='btn btn-info'>Update</button>
                    <a href='index.php?view=member' class='btn btn-danger pull-right'>Cancel</a>
                    
                  </div>
              </form>";
}elseif($_GET[act]=='tambah'){
    if (isset($_POST[tambah])){
      $passs = md5($_POST[password]);
      mysql_query("INSERT INTO member VALUES('','$_POST[a]','$passs','$_POST[c]','$_POST[d]','$_POST[e]','superuser')");
      echo "<script>document.location='index.php?view=admin';</script>";
    }

    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Data Administrator</h3>
                </div>
              <div class='box-body'>
              <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$s[id_user]'>
                    <tr><th width='120px' scope='row'>Username</th> <td><input type='text' class='form-control' name='a'> </td></tr>
                    <tr><th scope='row'>Password</th>               <td><input type='text' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>           <td><input type='text' class='form-control' name='c'></td></tr>
                    <tr><th scope='row'>Email</th>           <td><input type='email' class='form-control' name='d'></td></tr>
                    <tr><th scope='row'>No. Hp</th>           <td><input type='number_format' class='form-control' name='e'></td></tr>
                    <tr><th scope='row'>Level</th>           <td><select class='form-control' name='f'> 
                                                                          <option value='0' selected>- Pilih Level -</option>
                                                                          <option value='Premium'>Premium</option>
                                                                          <option value='Reguler'>Reguler</option>
                                                                  </select>
                                                             </td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='tambah' class='btn btn-info'><span class='fa fa-save'></span> Tambahkan</button>
                    <a href='index.php?view=member' class='btn btn-danger pull-right'><span class='fa fa-remove'></span> Cancel </a>
                    
                  </div>
              </form>
            </div>
            </div>";
}
?>
<?php
if (isset($_POST[ubah])){
      $simpan=mysql_query("UPDATE member SET level ='$_POST[level]'
                                             where id_member='$_POST[id_member]'");
      if($simpan) {
      echo "
      <script>document.location='index.php?view=member'</script>";
    }else {
         echo "<script>window.alert('Maaf, level gagal di rubah');
                window.location='index.php'</script>";
    } 
}
    ?>