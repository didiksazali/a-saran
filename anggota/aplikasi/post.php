<div class="graph-grid">
	<?php include "aplikasi/diagram.php"; ?>
	</div>
	<div class="col-md-6 graph-2">
		<div class="grid-1">
			<center><h4>Diagram Saran Responden  </h4></center>
			<?php 
			$tampil=mysql_query("SELECT * FROM tsaran where level='Anggota'");
			$a=mysql_num_rows($tampil);
			?><?php 
			$tampil=mysql_query("SELECT * FROM tsaran where level='Mahasiswa'");
			$s=mysql_num_rows($tampil);
			?>
			<?php 
			$tampil=mysql_query("SELECT * FROM tsaran where level='Dosen'");
			$d=mysql_num_rows($tampil);
			?>
            <?php 
			$tampil=mysql_query("SELECT * FROM tsaran where level='Karyawan'");
			$f=mysql_num_rows($tampil);
			?>
			<div class="grid-graph">
				<div class="grid-graph1">

					<div id="os-Other-lbl">Saran Responden Anggota <span><?php echo $a; ?></span></div>
						<div id="os-Mac-lbl">Responden Mahasiswa <span> <?php echo $s; ?></span></div>
							<div id="os-Mac-lbl">Responden Dosen<span><?php echo $d; ?></span></div>
                            <div id="os-Win-lbl">Responden Karyawan <span> <?php echo $f; ?></span></div>
						</div>
					</div>
					<div class="grid-2">
						<canvas id="pie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
<script>
	var pieData = [
	{
	value: <?php echo $a; ?>,
		color:"#D95459"
	},
	{
	value : <?php echo $s; ?>,
		color : "#00cfcd"
	},
	{
	value : <?php echo $d; ?>,
		color : "green"
	},
	{
	value : <?php echo $f; ?>,
		color : "#00cfcd"
	}
	];
	new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
</script>
							</div>
							<div class="clearfix"> </div>
						</div>
						
					</div>	
					</div>
	<?php  include "aplikasi/date.php"; ?>
