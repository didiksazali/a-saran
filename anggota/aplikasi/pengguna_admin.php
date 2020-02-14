<?php if ($_GET[act]==''){ ?> 
           
<div class="banner">
    <h3 class="">Data Pengguna </h3>
     <a class='pull-right btn btn-primary btn-sm' href='index.php?view=user&act=tambah'>Tambahkan Data User</a>
     <table id="example1" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $tampil = mysql_query("SELECT * FROM user ORDER BY id_user DESC");
                    $no = 1;
                    while($r=mysql_fetch_array($tampil)){
                    echo "<tr><td>$no</td>
                              <td>$r[username]</td>
                              <td>$r[password]</td>
                              <td>$r[email]</td>
                              <td>$r[nama_lengkap]</td>
                              <td>$r[level]</td>
                              <td><center>
                                <a class='btn btn-info btn-xs' title='Edit Data' href='?view=user&act=edit&id=$r[id_user]'><span class='fa fa-edit'></span> </a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='?view=user&hapus=$r[id_user]'><span class='fa fa-trash'></span></a>
                              </center></td>";
                            echo "</tr>";
                      $no++;
                      }
                      if (isset($_GET[hapus])){
                          mysql_query("DELETE FROM user where id_user='$_GET[hapus]'");
                          echo "<script>document.location='index.php?view=user';</script>";
                      }

                  ?>
                    </tbody>
                  </table>
            </div>
<?php 
}elseif($_GET[act]=='edit'){
    if (isset($_POST[update])){
      $passs = md5($_POST[b]);
      if (trim($_POST[b])==''){
        mysql_query("UPDATE user SET username = '$_POST[username]',
                                        email = '$_POST[email]',
                                         nama_lengkap = '$_POST[nama_lengkap]',
                                         alamat = '$_POST[alamat]',
                                         level = '$_POST[level]'
                               where id_user='$_POST[id_user]'");
      }else{
        mysql_query("UPDATE user SET username = '$_POST[username]',
                                         password = '$passs',
                                         email = '$_POST[email]',
                                         nama_lengkap = '$_POST[nama_lengkap]',
                                         alamat = '$_POST[alamat]',
                                         level = '$_POST[level]' where id_user='$_POST[id_user]'");
      }
      echo "<script>document.location='index.php?view=user';</script>";
    }
    $edit = mysql_query("SELECT * FROM user where id_user='$_GET[id]'");
    $s = mysql_fetch_array($edit);
    echo "<div class='col-md-12'>
                  <h3 class='box-title'>Tambah Data User</h3><br/>
              <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                  <table class='table table-striped table-hover'>
                  <tbody><input type='hidden' class='form-control' name='id_user' value='$s[id_user]'> 
                    <tr><th width='170px' scope='row'> Username </th> <td><input type='text' class='form-control' name='username' value='$s[username]'> </td></tr>
                    <tr><th scope='row'>Password</th>               <td><input type='text' class='form-control' name='b'value='$s[password]'></td></tr>
                    <tr><th scope='row'>Email</th>             <td><input type='text' class='form-control' name='email' value='$s[email]'></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>           <td><input type='text' class='form-control' name='nama_lengkap' value='$s[nama_lengkap]'></td></tr>
                    
                    <tr><th scope='row'>Alamat</th>          <td><input type='text' class='form-control' name='alamat' value='$s[alamat]'></td></tr>
                    <tr><th width='120px' scope='row'>Level</th>  <td><select name='level' class='form-control'>
                                                                  <option value='$s[level];'>$s[level]</option>
                                                                  <option value='anggota'>anggota</option>
                                                                  <option value='karyawan'>karyawan</option>
                                                                  <option value='admin_bagian'>Admin Bagian</option>
                                                                  <option value='superuser'>superuser</option>
                                                                  </select></td></tr>
                  </tbody>
                  </table>
              <br/>             
              <div class='box-footer'>
                    <button type='submit' name='update' class='btn btn-info'>UPDATE DATA</button>
                    <a href='index.php?view=user' class='btn btn-danger pull-right'>Cancel</a>
                    
                  </div>
              </form>
            </div>";
}elseif($_GET[act]=='tambah'){
    if (isset($_POST[tambah])){
      $passs = md5($_POST[password]);
      $simpan=mysql_query("INSERT INTO user VALUES('','$_POST[username]','$passs','$_POST[email]','$_POST[nama_lengkap]','$_POST[alamat]','$_POST[level]','')");
       if($simpan) {
      echo "<script>window.alert('Alhamdulillah.. data telah tersimpan..');
                window.location='index.php?view=user'</script>";
    }else {
         echo "<script>window.alert('anda');
                window.location='index.php?view=user'</script>";
    }
    }

    echo "<div class='banner'>
                  <h3 class='box-title'>Tambah Data Pengguna</h3><br/>
              <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                  <table class='table table-striped table-hover'>
                  <tbody>
                    <tr><th width='170px' scope='row'>Username </th> <td><input type='text' class='form-control' name='username'> </td></tr>
                    <tr><th scope='row'>Password</th>               <td><input type='password' class='form-control' name='password'></td></tr>
                    <tr><th scope='row'>Email</th>                  <td><input type='text' class='form-control' name='email'></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>           <td><input type='text' class='form-control' name='nama_lengkap'></td></tr>
                    
                    <tr><th scope='row'>Alamat</th>          <td><input type='text' class='form-control' name='alamat'></td></tr>
                    
                    <tr><th width='170px' scope='row'>Level</th>  <td><select name='level' class='form-control'>
                                                                  <option value=''>Pilih Level</option>
                                                                  <option value='dosen'>Dosen</option>
                                                                  <option value='mahasiswa'>Mahasiswa</option>
                                                                  <option value='anggota'>anggota</option>
                                                                  <option value='karyawan'>Karyawan</option>
                                                                  <option value='superuser'>superuser</option>
                                                                  </select></td></tr>
                   
                  </tbody>
                  </table>
              <br/>             
              <div class='box-footer'>
                    <button type='submit' name='tambah' class='btn btn-info'>Tambahkan</button>
                    <a href='index.php?view=user' class='btn btn-danger pull-right'>Cancel</a>
                    
                  </div>
              </form>
            </div>
            </div>";
          }

?>