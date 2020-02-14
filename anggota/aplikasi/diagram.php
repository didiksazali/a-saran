<?php 
$bulan=date("m");
$tahun=date("Y");

?>
<?php 
$tampil=mysql_query("SELECT * FROM tsaran where level='mahasiswa'");
$a=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM tsaran where level='karyawan'");
$s=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM tsaran where level='dosen'");
$d=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM tsaran where level='anggota'");
$x=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM tsaran where tanggal!=".$bulan."");
$w=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM tsaran where tanggal!=".$tahun."");
$t=mysql_num_rows($tampil);
?>

<?php 
$tampil=mysql_query("SELECT * FROM tsaran where id_prodi=2");
$ks=mysql_num_rows($tampil);
?>

<?php 
$tampil=mysql_query("SELECT * FROM tsaran where id_prodi=1");
$km=mysql_num_rows($tampil);
?>

<?php 
$tampil=mysql_query("SELECT * FROM tsaran where id_prodi=3");
$kl=mysql_num_rows($tampil);
?>

<?php 
$tampil=mysql_query("SELECT * FROM tsaran where id_prodi=5");
$sa=mysql_num_rows($tampil);
?>

<?php 
$tampil=mysql_query("SELECT * FROM tsaran where id_prodi=4");
$wa=mysql_num_rows($tampil);
?>

<?php 
$tampil=mysql_query("SELECT * FROM tsaran where id_prodi=7");
$qw=mysql_num_rows($tampil);
?>

<?php 
$tampil=mysql_query("SELECT * FROM tsaran where id_prodi=6");
$ad=mysql_num_rows($tampil);
?>

<?php 
$tampil=mysql_query("SELECT * FROM out_email where status_penerima='Mahasiswa'");
$m=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM out_email where status_penerima='Dosen'");
$n=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM out_email where status_penerima='Anggota'");
$p=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM out_email where status_penerima='Karyawan'");
$xz=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM out_email");
$xx=mysql_num_rows($tampil);
?>
<?php 
$tampil=mysql_query("SELECT * FROM tsaran");
$yf=mysql_num_rows($tampil);
?>

<div class="graph">
<div class="graph-grid">
  <div class="col-md-6 graph-1">
                  <br/><center><h4>Grafik Saran Responden</h4></center>
                  <canvas id="bar1" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
                  <script>
                    var barChartData = {
                      labels : ["Mahasiswa","Karyawan","Dosen","Anggota","Bulan ini","Jumlah Saran","Jumlah Email Keluar"],
                      datasets : [
                        {
                          fillColor : "#FBB03B",
                          strokeColor : "#FBB03B",
                          data : [<?php echo $a; ?>,<?php echo $s; ?>,<?php echo $d; ?>,<?php echo $x; ?>,<?php echo $w; ?>,<?php echo $yf; ?>,<?php echo $xx; ?>]
                        },
                        {
                          fillColor : "#f56954",
                          strokeColor : "#f56954",
                          data : [<?php echo $m; ?>,<?php echo $xz; ?>,<?php echo $n; ?>,<?php echo $p; ?>,<?php echo $xx; ?>]
                        }
                      ]
                      
                    };
                      new Chart(document.getElementById("bar1").getContext("2d")).Bar(barChartData);
                  </script>
                </div>
                </div>
    <div class="col-md-6 graph-2">
    <div class="grid-1">

      <h4><center>Grafik saran Berdasarkan Program studi </center></h4>
        <canvas id="line1" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
        <script>
            var lineChartData = {
              labels : ["T. Sipil","T. Informatika","Adm. Bisnis","T. Mesin","Bahasa Inggris Bisnis","T. Elektro","T. Listrik"],
              datasets : [
          {
            fillColor : "#fff",
            strokeColor : "#1ABC9C",
            pointColor : "#1ABC9C",
            pointStrokeColor : "#1ABC9C",
            data : [<?php echo $km; ?>,<?php echo $ks; ?>,<?php echo $kl; ?>,<?php echo $wa; ?>,<?php echo $sa; ?>,<?php echo $ad; ?>,<?php echo $qw; ?>]
          }
        ]
                      
      };
      new Chart(document.getElementById("line1").getContext("2d")).Line(lineChartData);
  </script>
</div>
  </div>

  <div class="clearfix"> </div>

  

