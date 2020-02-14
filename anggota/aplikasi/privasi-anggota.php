<div class='banner'>
<?php if ($_GET[act]==''){ ?> 
  <div class='col-xs-12 col-md-3'>
  	<div class="panel panel-primary"style="border-radius: 0px; border: 0px">
  <div class="panel-heading"style="border-radius: 0px; border: 0px"><?php echo $nama; ?> <span class="fa fa-star"></span> <?php echo $level; ?></div>
  <div class='panel-body'>
    <a href='' class='thumbnail'>
      <img src='<?php echo $foto; ?>' alt=''></a>
    
  </div>
</div> 
  </div>
  <div class="col-xs-6 col-md-9">
  	<div class="panel panel-primary" style="border-radius: 0px; border: 0px">
  <div class="panel-heading" style="border-radius: 0px; border: 0px">Informasi Umum</div>
  <div class="panel-body">
    <table class="table table-striped">
    	<tr>
    		<th>Username: </th>
    		<th><?php echo $user; ?></th>
    	</tr>
    	<tr>
    		<th>Password</th>
    		<th> : <?php echo $pass; ?></th>
    	</tr>
    	<tr>
    		<th>Alamat </th>
    		<th> : <?php echo $alamat; ?></th>
    	</tr>
    	<tr>
    		<th>Nama Lengkap</th>
    		<th> : <?php echo $nama; ?></th>
    	</tr>
    	<tr>
    		<th>Email</th>
    		<th> : <?php echo $email; ?></th>
    	</tr>
    	<tr>
    		<th>Status</th>
    		<th> : <?php echo $level; ?></th>
    	</tr>

    </table>
    
  </div>
</div>
<?php
}
?>
