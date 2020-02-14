<nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header" style="background-color:#3c8dbc;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php" style="background-color:#3c8dbc;"><?php echo $level; ?></a></h1>         
			   </div>
			 <div class=" border-bottom" style="background-color:#fff;">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $nama; ?><i class="caret"></i></span><img src="<?php echo $foto; ?>" width="60px" height="60px"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="?view=privasi"><i class="fa fa-user"></i>Login Us <?php echo $level; ?></a></li>
		                <li><a href="logout.php"><i class="fa fa-off"></i>Logout</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
     </div>