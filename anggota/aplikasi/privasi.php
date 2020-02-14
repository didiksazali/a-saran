<div class='banner'>
<?php if ($_GET[act]==''){ ?> 
  <div class='col-xs-12 col-md-3'>
  	<div class="panel panel-primary"style="border-radius: 0px; border: 0px">
  <div class="panel-heading"style="border-radius: 0px; border: 0px"><?php echo $nama; ?> <span class="fa fa-star"></span> <?php echo $level; ?></div>
  <div class='panel-body'>
    <a href='' class='thumbnail'>
      <img src='<?php echo $foto; ?>' alt=''>
    </a><center><a class="btn btn-info" href='?view=privasi&act=editdosen&id=<?php echo $kd; ?>'><i class='fa fa-edit' ></i> EDIT DATA </a> </center>
  </div>
</div> 
  </div>
  <div class="col-xs-6 col-md-9">
  	<div class="panel panel-primary" style="border-radius: 0px; border: 0px">
  <div class="panel-heading" style="border-radius: 0px; border: 0px">Informasi Umum</div>
  <div class="panel-body">
    <table class="table table-striped">
    	<tr>
    		<th></th>
    		<th>: <?php echo $id; ?></th>
    	</tr>
    	<tr>
    		<th>Nama Lengkap</th>
    		<th> : <?php echo $nama; ?></th>
    	</tr>
    	<tr>
    		<th>Alamat </th>
    		<th> : <?php echo $alamat; ?></th>
    	</tr>
    	<tr>
    		<th>Tanggal Lahir</th>
    		<th> : <?php echo $ttl; ?></th>
    	</tr>
    	<tr>
    		<th>Jenis Kelamin</th>
    		<th> : <?php echo $jk; ?></th>
    	</tr>
    	<tr>
    		<th>Agama</th>
    		<th> : <?php echo $agama; ?></th>
    	</tr>

    </table>
    
  </div>
</div>

<?php 
}
   if($_GET[act]=='editdosen'){
  if (isset($_POST[update])){
      $dir_gambar = 'foto_dosen/';
      $filename = basename($_FILES['foto']['name']);
      $uploadfile = $dir_gambar . $filename;
      if ($filename != ''){      
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
          mysql_query("UPDATE dosen SET 
                           nip        = '$_POST[nip]',
                           password   = '$_POST[password]',
                           nama         = '$_POST[nama]',
                           alamat       = '$_POST[alamat]',
                           tanggallahir    = '$_POST[tanggallahir]',
                           jeniskelamin   = '$_POST[jeniskelamin]',
                           agama   = '$_POST[agama]',
                           foto         = '$filename' where id_dosen='$_GET[id]'");
            echo "<script>document.location='index.php?view=mahasiswa&act=editmahasiswa&id=".$_GET[id]."';</script>";
        }else{
          echo "<script>window.alert('Gagal Upload Foto Siswa.');
                      window.location='index.php?view=mahasiswa&act=editsiswa&id=".$_GET[id]."'</script>";
        }
      }else{
        mysql_query("UPDATE dosen SET 
                         nip        = '$_POST[nip]',
                         password       = '$_POST[password]',
                         nama         = '$_POST[nama]',
                         alamat       = '$_POST[alamat]',
                         tanggallahir   = '$_POST[tanggallahir]',
                         jeniskelamin   = '$_POST[jeniskelamin]',
                         agama        = '$_POST[agama]' where id_dosen='$_GET[id]'");
        echo "<script>document.location='index.php?view=dosen&act=editdosen&id=".$_GET[id]."';</script>";

      }
  }

    $edit = mysql_query("SELECT * FROM dosen where id_dosen='$_GET[id]'");
    $s = mysql_fetch_array($edit);
    echo "<h3 class='box-title'>Edit Data Dosen</h3><br/>
               
              <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-condensed table-striped table-hover'>
                  <tbody>
                    <tr><th style='background-color:#E7EAEC' width='160px' rowspan='9'>";
                        if (trim($s[foto])==''){
                          echo "<img class='img-thumbnail' style='width:155px' src='foto_dosen/no-image.jpg'>";
                        }else{
                          echo "<img class='img-thumbnail' style='width:155px' src='foto_dosen/$s[foto]'>";
                        }
                        echo "</th>
                    </tr><input type='hidden' class='form-control' value='$s[id_dosen]' name='id_dosen' readonly=on>
                    <tr><th width='170px' scope='row'>No Induk</th> <td><input type='text' class='form-control' value='$s[nip]' name='nip'> </td></tr>
                    <tr><th scope='row'>Password</th>               <td><input type='text' class='form-control' value='$s[password]' name='password'></td></tr>
                    
                    <tr><th scope='row'>Nama Siswa</th>             <td><input type='text' class='form-control' value='$s[nama]' name='nama'></td></tr>
                    <tr><th scope='row'>Alamat Siswa</th>           <td><input type='text' class='form-control' value='$s[alamat]' name='alamat'></td></tr>
                    <tr><th scope='row'>Tanggal Lahir</th>          <td><input type='text' class='form-control' value='$s[tanggallahir]' name='tanggallahir'></td></tr>
                    <tr><th scope='row'>Jenis Kelamin</th>  <td>"; 
                      if ($s[jeniskelamin]=='Laki-laki'){
                          echo "<input type='radio' name='jeniskelamin' class='flat-red' value='Laki-laki' checked> Laki-laki
                                <input type='radio' name='jeniskelamin' class='flat-red' value='Perempuan'> Perempuan";
                      }else{
                          echo "<input type='radio' name='jeniskelamin' class='flat-red' value='Laki-laki'> Laki-laki
                                <input type='radio' name='jeniskelamin' class='flat-red' value='Perempuan' checked> Perempuan";
                      }
                    echo "</td></tr>
                    <tr><th scope='row'>Agama</th>                        <td><input type='text' class='form-control' value='$s[agama]' name='agama'></td></tr>
                    <tr><th scope='row'>Ganti Foto</th>             <td><div  class='post-file'>
                                                                      <i class='fa fa-camera'></i>
                                                                      <input id='input-2' name='foto' type='file' multiple='' class=''> Tambahkan Foto [size=60x60]
                                                                      </div>
                    </td></tr>
                  </tbody>
                  </table>
                  <br/>
              <div class='box-footer'>
                    <button type='submit' name='update' class='btn btn-info'>Update</button>
                    <a href='index.php?view=dosen' class='btn btn-danger pull-right'>Cancel</a>
              </form>
            </div>";
}
?>