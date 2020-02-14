       <div class="banner" role="alert">
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Selamat Datang  website Kotak Saran Anda Login Sebagai Admin Bagian <strong style="color:red;"><?php echo $level ?> </strong></span>
				</h2>
		    
		    </div>
		    <br/>
		    <div class="banner">
		    	<?php            
$ok=mysql_query("SELECT * FROM tsaran,prodi where tsaran.id_prodi=prodi.id_prodi AND id_bagian=$_SESSION[id_bagian] order by id_saran desc");

$k=mysql_num_rows($ok);

echo"
<h5>Ada $k saran masuk di bagian <strong style='color:red;'> $level</strong></h5>";
?>

		    </div>


		    <div class="banner">
		    	<?php  include "aplikasi/saran-bagian.php"; ?>



		    </div>
<br/>
			 
			
