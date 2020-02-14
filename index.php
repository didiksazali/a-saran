<?php 
  session_start();
  error_reporting(0);
  include "config/koneksi.php";
  include "config/library.php";
  include "config/fungsi_indotgl.php";
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>

       Selamat datang di website kotak saran. 

    </title>

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.reveal.js"></script>
    <link rel="stylesheet" href="css/reveal.css">
    <script type="text/javascript" src="fancybox/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
    <script type="text/javascript">
        $(document).ready(function () {
			$(".carousel").carousel();
        });
		
		</script>

</head>

<body>

<!-- =============== HEADER BEGIN =============== -->
<header>
    <div class="container">
        <div class="row">
            <div class="span4 logo">
                <a href="index.php" title="Home"></a>
            </div>

            <div class="span5 search-top">
                <form class="search-form" method="get" action="#">
                    <input type="text" value="">
                    <a class="button-search" href="#">Search</a>
                </form>
            </div>

            <div class="span3 header-user clearfix">
                <ul>
                    <li><B><p style="font-family:Eurostar Regular;">Selamat Datang di website Kotak Saran</p></B></li>
                        
                </ul>
            </div>
        </div>
	</div>


<!-- HEADER MENU BEGIN -->
<div class="container">
  <div class="row">
      <div class="span12 hmenu">
          <ul>
              <li>
                <a style="font-family:Eurostar Regular;">login :
					<b></b>
                </a>
          <ul>
              <li>
          <a href="" data-toggle="modal" data-target="#myModal7" style="font-family:Eurostar Regular;">Login Bagian</a>
              </li>
              <li>
                <a href="" data-toggle="modal" data-target="#myModal6" style="font-family:Eurostar Regular;">Administrator</a>
              </li>
          </ul>
            </li>
		<li>
      <a href="#" data-toggle="modal" data-target="#myModal2" style="font-family:Eurostar Regular;font-size:21px;">Dosen
      <b id="second"></b>
      </a>
    </li>
		<li>
      <a href="" data-toggle="modal" data-target="#myModal" style="font-family:Eurostar Regular;font-size:21px;">Mahasiswa
				<b id="third"></b>
      </a>
    </li>
		<li>
      <a href="" data-toggle="modal" data-target="#myModal1" style="font-family:Eurostar Regular;font-size:21px;">Anggota
			<b id=""></b>
      </a>
    </li>
		<li>
      <a href="" data-toggle="modal" data-target="#myModal3" style="font-family:Eurostar Regular;font-size:21px;">Karyawan
		<b id="five"></b>
      </a>
    </li>
    <li>
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family:Eurostar Regular;">Daftar
    <b id="four"></b>
      </a>
    </li>
        </ul>
      </div>


			<!--BANNER WEB -->
      <div class="span12 slider">
				<div id="myCarousel" class="carousel slide">
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				  </ol>

  <!-- Carousel items -->
				  <div class="carousel-inner">
						<div class="item active">
							<a href="/taras/">
								<img src="images/slide-1.jpg" />
							</a>
						</div>
						<div class="item">
							<a href="/taras/">
								<img src="images/slide-2.jpg" />
							</a>
						</div>
						<div class="item">
							<a href="/taras/">
								<img src="images/slide-3.jpg" />
							</a>
						</div>
						<div class="item">
							<a href="/taras/">
								<img src="images/slide-4.jpg" />
							</a>
						</div>
				  </div>
  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
							
			</div>
			
		</div>
    </div>

<!-- HEADER MENU END -->
<div class="container">
<div class="content">
<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
       <div class="alert alert-danger alert-dismissable" style="border-radius: 0px; border:0px;background-color:#e21335;color:white;">
      <span class="" style="font-family:Eurostar Regular;">Untuk mengirim saran anda harus DAFTAR menjadi anggota terlebih dahulu </span> </div>
<div class="container"><div class="panel-body">
        <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label" style="font-family:Eurostar Regular;">Username :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Username" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label" style="font-family:Eurostar Regular;">Password :</label>
            <div class="col-sm-10">
            <input type="password" class="form-control"  name="password" placeholder="Password" required="" style="border-radius:0px;font-family:Eurostar Regular;"">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label" style="font-family:Eurostar Regular;">Email :</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="Email Anda" required="" style="border-radius:0px;font-family:Eurostar Regular;"">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label" style="font-family:Eurostar Regular;">Nama Lengkap : </label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap Anda" required="" 
            style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label" style="font-family:Eurostar Regular;">Alamat :</label>
            <div class="col-sm-10">
            <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat Aktif " required="" style="border-radius:0px;font-family:Eurostar Regular;"></textarea>
            </div>
        </div>
            <input type="hidden" class="form-control" name="level" value="anggota">
        </div>
      <div class="form-group">
       <input type="submit" class="btn btn-primary" name="daftar" value="DAFTAR" style="border-radius:0px;font-family:Eurostar Regular;">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius:0px;font-family:Eurostar Regular;">BATAL</button>
      </div>
      </form>
    </div></div>
    </div>
    </div>
    </div>
</header>



<!-- =============== FOOTER END =============== -->

</body>

</html>


<!--LOGIN MAHASISWA -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-radius:0pX;background-color:#0086c5;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="border-radius:0pX;border:0px;color:white;font-family:Eurostar Regular;">LOGIN MAHASISWA</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username : </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="a" placeholder="Username" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Password : </label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="b" placeholder="Password" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            <input type="hidden" class="form-control" id="inputPassword3" name="level" value="mahasiswa" placeholder="Password" required="" style="border-radius:0px;">
            </div>
        </div>
        </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-primary" name="login" value="LOGIN" style="border-radius:0px">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0px">BATAL</button>
      </div>
    </div>
    </form>
  </div>
</div>


<!--LOGIN DOSEN -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-radius:0pX;background-color:#00c579;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="border-radius:0pX;border:0px;color:white;font-family:Eurostar Regular;">LOGIN DOSEN</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="a" placeholder="Username" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Password :</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="b" placeholder="Password" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            <input type="hidden" class="form-control" id="inputPassword3" name="level" value="dosen" placeholder="Password" required="" style="border-radius:0px">
            </div>
        </div>
        </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-primary" name="login" value="Login" style="border-radius:0px">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0px">BATAL</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>


<!--LOGIN ANGGOTA -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-radius:0pX;background-color:#00c5be;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="border-radius:0pX;border:0px;color:white;font-family:Eurostar Regular;">LOGIN ANGGOTA/ UMUM</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="a" placeholder="Username" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Password :</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="b" placeholder="Password" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            <input type="hidden" class="form-control" id="inputPassword3" name="level" value="anggota" placeholder="Password" required="" style="border-radius:0px">
            </div>
        </div>
        </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-primary" name="login" value="Login" style="border-radius:0px">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0px">BATAL</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--LOGIN KARYAWAN -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-radius:0pX;background-color:#af022f;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="border-radius:0pX;border:0px;color:white;font-family:Eurostar Regular;">LOGIN KARYAWAN</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="a" placeholder="Username" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Password :</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="b" placeholder="Password" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            <input type="hidden" class="form-control" id="inputPassword3" name="level" value="karyawan" placeholder="Password" required="" style="border-radius:0px">
            </div>
        </div>
        </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-primary" name="login" value="Login" style="border-radius:0px">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0px">BATAL</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--DAFTAR ANGGOTA -->


<!--LOGIN ADMINISTRATOR -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-radius:0pX;background-color:#fc0041;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="border-radius:0pX;border:0px;color:white;font-family:Eurostar Regular;">LOGIN ADMINISTRATOR</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="a" placeholder="Username" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Password :</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="b" placeholder="Password" required="" 
            style="border-radius:0px;font-family:Eurostar Regular;">
            <input type="hidden" class="form-control" id="inputPassword3" name="level" value="admin" placeholder="Password" required="" style="border-radius:0px">
            </div>
        </div>
        </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-primary" name="login" value="Login" style="border-radius:0px;font-family:Eurostar Regular;">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0px;font-family:Eurostar Regular;">BATAL</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!--LOGIN BAGIAN -->

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-radius:0pX;background-color:#fc0041;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="border-radius:0pX;border:0px;color:white;font-family:Eurostar Regular;">
        LOGIN BAGIAN</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="a" placeholder="Username" required="" style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Password :</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="b" placeholder="Password" required="" 
            style="border-radius:0px;font-family:Eurostar Regular;">
            </div>
        </div>
        <p></p>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Pilih Bagian</label>
            <div class="col-sm-10">
            <select name="id_bagian" class="form-control" style="border-radius:0px;font-family:Eurostar Regular;">
            <?php 
            $tampil=mysql_query("SELECT * FROM bagian ORDER BY nama_bagian DESC");
                                      while($data=mysql_fetch_array($tampil))
                                      {
                                      
                                          echo "<option value='$data[id_bagian]'> $data[nama_bagian]  </option>";

                                        }
                                        ?>
                          </select>
            </div>
        </div>
        </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-primary" name="login" value="Login" style="border-radius:0px;font-family:Eurostar Regular;">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0px;font-family:Eurostar Regular;">BATAL</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php 
  if(isset($_POST[login])){
    if ($_POST[level]=='admin'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND level='superuser'");
      $cocok=mysql_num_rows($login);
      $r=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $r[id_user];
          $_SESSION[namalengkap]  = $r[nama_lengkap];
          $_SESSION[level]    = $r[level];
          
          echo "<script>window.alert('Sukses Login Sebagai Administrator.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[level]=='anggota'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND level='anggota'");
      $cocok=mysql_num_rows($login);
      $a=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $a[username];
          $_SESSION[nama_lengkap]  = $a[nama_lengkap];
          $_SESSION[level]    = $a[level];
          
          echo "<script>window.alert('Sukses Login Sebagai Anggota.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[level]=='mahasiswa'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND level='mahasiswa'");
      $cocok=mysql_num_rows($login);
      $b=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $b[username];
          $_SESSION[nama_lengkap]  = $b[nama_lengkap];
          $_SESSION[level]    = $b[level];
          
          echo "<script>window.alert('Sukses Login Sebagai Mahasiswa.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[level]=='dosen'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND level='dosen'");
      $cocok=mysql_num_rows($login);
      $c=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $c[username];
          $_SESSION[nama_lengkap]  = $c[nama_lengkap];
          $_SESSION[level]    = $c[level];
          
          echo "<script>window.alert('Sukses Login Sebagai Dosen.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[level]=='karyawan'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND level='karyawan'");
      $cocok=mysql_num_rows($login);
      $x=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $x[username];
          $_SESSION[nama_lengkap]  = $x[nama_lengkap];
          $_SESSION[level]    = $x[level];
          
          echo "<script>window.alert('Sukses Login Sebagai Karyawan.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[id_bagian]=='1'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND id_bagian='1'");
      $cocok=mysql_num_rows($login);
      $x=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $x[username];
          $_SESSION[nama_lengkap]  = $x[nama_lengkap];
          $_SESSION[id_bagian]    = $x[id_bagian];
          
          echo "<script>window.alert('Sukses Login Sebagai Admin Bagian.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[id_bagian]=='2'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND id_bagian='2'");
      $cocok=mysql_num_rows($login);
      $x=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $x[username];
          $_SESSION[nama_lengkap]  = $x[nama_lengkap];
          $_SESSION[id_bagian]    = $x[id_bagian];
          
          echo "<script>window.alert('Sukses Login Sebagai Admin Bagian.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[id_bagian]=='3'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND id_bagian='3'");
      $cocok=mysql_num_rows($login);
      $x=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $x[username];
          $_SESSION[nama_lengkap]  = $x[nama_lengkap];
          $_SESSION[id_bagian]    = $x[id_bagian];
          
          echo "<script>window.alert('Sukses Login Sebagai Admin Bagian.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[id_bagian]=='4'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND id_bagian='4'");
      $cocok=mysql_num_rows($login);
      $x=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $x[username];
          $_SESSION[nama_lengkap]  = $x[nama_lengkap];
          $_SESSION[id_bagian]    = $x[id_bagian];
          
          echo "<script>window.alert('Sukses Login Sebagai Admin Bagian.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[id_bagian]=='5'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM user WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND id_bagian='5'");
      $cocok=mysql_num_rows($login);
      $x=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $x[username];
          $_SESSION[nama_lengkap]  = $x[nama_lengkap];
          $_SESSION[id_bagian]    = $x[id_bagian];
          
          echo "<script>window.alert('Sukses Login Sebagai Admin Bagian.');
                window.location='anggota/index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }
  }
?>







<?php
if (isset($_POST[daftar])){
      $passs = md5($_POST[password]);
      $simpan=mysql_query("INSERT INTO user VALUES('','$_POST[username]','$passs','$_POST[email]','$_POST[nama_lengkap]','$_POST[alamat]','$_POST[level]','')");
      if($simpan) {
      echo "
      <script>window.alert('Anda sukses terdaftar sebagai anggota. Selamat.. sekarang anda bisa mengirimkan saran kepada kami');
                window.location='index.php'</script>";
    }else {
         echo "<script>window.alert('Maaf, Anda gagal menjadi anggota kami. Harap periksa kembali pengisian data anda');
                window.location='index.php'</script>";
    }
}
    ?>



    