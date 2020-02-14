

<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signin :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="">Sebelum Masuk Login dahulu</a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form action="" method="post">
			<div class="col-md-12">
				<div class="login-mail">
					<input type="text" placeholder="Email" name="a" required="">
					<i class="fa fa-envelope"></i>
				</div>
				 <div class="login-mail">
            	  <select name='level' class="form-control" required>
             		<option value='0' selected>- Pilih Level -</option>
              		<option value='kepala'>Loket 2</option>
              		<option value='layar'>Layar</option>
              		<option value='admin'>Loket 1</option>
            		</select>
          		</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="b" required="">
					<i class="fa fa-lock"></i>
				</div>
				<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" name="login" value="login">
					</label>
					</div>
					<div class="col-md-6 login-do">
				<a href="signup.html" class="hvr-shutter-in-horizontal">Signup</a>
			</div>
			</div>
			
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div> 
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

<?php 
  if(isset($_POST[login])){

    if ($_POST[level]=='admin'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM rb_users WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND level='superuser'");
      $cocok=mysql_num_rows($login);
      $r=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $r[id_user];
          $_SESSION[namalengkap]  = $r[nama_lengkap];
          $_SESSION[level]    = $r[level];
          
          echo "<script>window.alert('Sukses Login Sebagai Administrator.');
                window.location='index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }elseif($_POST[level]=='kepala'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM rb_users WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND level='kepala'");
      $cocok=mysql_num_rows($login);
      $r=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $r[id_user];
          $_SESSION[namalengkap]  = $r[nama_lengkap];
          $_SESSION[level]    = $r[level];
          
          echo "<script>window.alert('Sukses Login Sebagai Admin Loket 2');
                window.location='index.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }
    elseif($_POST[level]=='layar'){
      $pass=md5($_POST[b]);
      $login=mysql_query("SELECT * FROM rb_users WHERE username='".mysql_real_escape_string($_POST[a])."' AND password='$pass' AND level='layar'");
      $cocok=mysql_num_rows($login);
      $r=mysql_fetch_array($login);

        if ($cocok > 0){
          session_start();
          $_SESSION[id]     = $r[id_user];
          $_SESSION[namalengkap]  = $r[nama_lengkap];
          $_SESSION[level]    = $r[level];
          
          echo "<script>window.alert('Sukses Login.');
                window.location='index2.php'</script>";
        }else{
          echo "<script>window.alert('Username atau Password anda salah.');
                window.location='index.php?act=gagal'</script>";
        }
    }
  }
?>