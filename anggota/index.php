<?php 
  session_start();
  error_reporting(0);
  include "config/koneksi.php";
  include "config/library.php";
  include "config/fungsi_indotgl.php";
  if (isset($_SESSION[id])){
        if ($_SESSION[level]=='superuser'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where id_user='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $level = 'Administrator';
           $foto = 'images/no-image.jpg';
      }elseif($_SESSION[level]=='anggota'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'Anggota';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }elseif($_SESSION[level]=='karyawan'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'Karyawan';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }elseif($_SESSION[level]=='dosen'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'Dosen';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }elseif($_SESSION[level]=='mahasiswa'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'Mahasiswa';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }elseif($_SESSION[id_bagian]=='1'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'Keuangan';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }elseif($_SESSION[id_bagian]=='2'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'Administrasi';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }elseif($_SESSION[id_bagian]=='3'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'HRD';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }elseif($_SESSION[id_bagian]=='5'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'Pendidikan';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }elseif($_SESSION[id_bagian]=='4'){
          $iden = mysql_fetch_array(mysql_query("SELECT * FROM user where username='$_SESSION[id]'"));
           $nama =  $iden[nama_lengkap];
           $alamat =  $iden[alamat];
           $id =  $iden[usename];
           $kode =  $iden[id_user];
           $pass=$iden[password];
           $user=$iden[username];
           $email =  $iden[email];
           $level = 'Data Input';
           if (trim($gu[foto])==''){
              $foto = 'images/no-image.jpg';
           }else{
              $foto = 'foto_pegawai/'.$gu[foto];
           }     

      }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kotak Saran OK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=""/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="datatables/dataTables.bootstrap.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>

<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
<script src="js/Chart.js"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
 
      <link rel="stylesheet" href="css/clndr.css" type="text/css" />
      <script src="js/underscore-min.js" type="text/javascript"></script>
      <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
      <script src="js/clndr.js" type="text/javascript"></script>
      <script src="js/site.js" type="text/javascript"></script>
      <!----End Calender -------->
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}
			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
		});
		</script>
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">
        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
        });

    </script>
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

        <?php include "aplikasi/header-user.php"; ?>
<aside>
            <?php 
              if ($_SESSION[level]=='superuser'){

                  include "aplikasi/sidebar-left.php";

                  }elseif ($_SESSION[level]=='anggota'){
                include "aplikasi/menu-anggota.php";

                  }elseif ($_SESSION[level]=='karyawan'){
                include "aplikasi/menu-anggota.php";

                  }elseif ($_SESSION[level]=='dosen'){
                include "aplikasi/menu-dosen.php";

                  }elseif ($_SESSION[level]=='mahasiswa'){
                include "aplikasi/menu-mahasiswa.php";

              }elseif ($_SESSION[id_bagian]=='1'){
                include "aplikasi/menu_bagian.php";

              }elseif ($_SESSION[id_bagian]=='2'){
                include "aplikasi/menu_bagian.php";

              }elseif ($_SESSION[id_bagian]=='3'){
                include "aplikasi/menu_bagian.php";

              }elseif ($_SESSION[id_bagian]=='4'){
                include "aplikasi/menu_bagian.php";

              }elseif ($_SESSION[id_bagian]=='5'){
                include "aplikasi/menu_bagian.php";

              }else{

                include ""; 
              }
            ?>
      </aside>
<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

        <?php 
          if ($_GET[view]=='home' OR $_GET[view]==''){
            if($_SESSION[level]=='mahasiswa'){
              include "aplikasi/home-mahasiswa.php";

            }elseif($_SESSION[level]=='dosen'){
              include "aplikasi/home-dosen.php";

            }elseif($_SESSION[level]=='anggota'){
              include "aplikasi/home-anggota.php";

            }elseif($_SESSION[level]=='karyawan'){
              include "aplikasi/home-dosen.php";
              
            }elseif($_SESSION[id_bagian]=='1'){
              include "aplikasi/home_bagian.php";
              
            }elseif($_SESSION[id_bagian]=='2'){
              include "aplikasi/home_bagian.php";
              
            }elseif($_SESSION[id_bagian]=='3'){
              include "aplikasi/home_bagian.php";
              
            }elseif($_SESSION[id_bagian]=='4'){
              include "aplikasi/home_bagian.php";
              
            }elseif($_SESSION[id_bagian]=='5'){
              include "aplikasi/home_bagian.php";
              
            }else{
                include "aplikasi/home.php";
            }
          }elseif ($_GET[view]=='topic'){
                    include "aplikasi/forum.php";

          }elseif ($_GET[view]=='member'){
            echo  include "aplikasi/member.php";
          }elseif ($_GET[view]=='user'){

                    include "aplikasi/pengguna_admin.php";

          }elseif ($_GET[view]=='prodi'){

                    include "aplikasi/prodi.php";

          }elseif ($_GET[view]=='bagian'){

                    include "aplikasi/bagian.php";

          }elseif ($_GET[view]=='admin_bagian'){

                    include "aplikasi/admin-bagian.php";

          }elseif ($_GET[view]=='saran_bagian'){

                    include "aplikasi/saran_bagian.php";

          }elseif ($_GET[view]=='pegawai'){

                    include "application/pegawai.php";

          }elseif ($_GET[view]=='dosen'){

                    include "application/pegawai.php";

          }elseif ($_GET[view]=='tampil'){

                    include "aplikasi/tampil-saran.php";

          }elseif ($_GET[view]=='mahasiswa'){

                    include "aplikasi/mahasiswa.php";

          }elseif ($_GET[view]=='privasi'){

                    include "aplikasi/privasi.php";

          }elseif ($_GET[view]=='privasi-anggota'){

                    include "aplikasi/privasi-anggota.php";

          }elseif ($_GET[view]=='tampil-saran'){

                    include "aplikasi/saran.php";

          }elseif ($_GET[view]=='detail'){

                    include "aplikasi/detail-saran.php";
          
          }elseif ($_GET[view]=='balasan'){

                    include "aplikasi/balasan.php";
          
          }elseif ($_GET[view]=='email'){

                    include "aplikasi/email-keluar.php";
          }elseif ($_GET[view]=='dokumentasi'){

            echo "<div class='row'>";
                    include "application/dokumentasi.php";
            echo "</div>";
          }
        ?>



        <?php include "aplikasi/footer.php"; ?>
		    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <script>
                            $(document).on('ready', function() {
                                $("#input-1").fileinput({showCaption: false});
                            });
                            </script>
                            <script>
                            $(document).on('ready', function() {
                                $("#input-2").fileinput({showCaption: false});
                            });
                            </script>
                            <script>
                            $(document).on('ready', function() {
                                $("#input-3").fileinput({showCaption: false});
                            });
                            </script>
                            <script>
                            $(document).on('ready', function() {
                                $("#input-4").fileinput({showCaption: false});
                            });
                            </script>

        
		<!---->

		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
    <script src="datatables/jquery.dataTables.min.js"></script>
    <script src="datatables/dataTables.bootstrap.min.js"></script>
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
      <script>
        $(document).ready(function() {
          $("#owl-demo").owlCarousel({
            items : 3,
            lazyLoad : true,
            autoPlay : true,
            pagination : true,
            nav:true,
          });
        });
      </script>
</body>
</html>
<?php 
  }else{
    include "./index.php";
  }
?>


