<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>EMISOFT - Acceso</title>
	
  <?= link_tag("css/style.css"); ?>
    <?= link_tag("css/jquery.wysiwyg.css"); ?>
    <?= link_tag("css/facebox.css"); ?>
    <?= link_tag("css/visualize.css"); ?>
    <?= link_tag("css/date_input.css"); ?>
	
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->

</head>




<body>
	
	<div id="hld">
	
		<div class="wrapper">		<!-- wrapper begins -->
		
		
		
		
		
		
			
			
			
			
			
			
			
			<div class="block small center login">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					<h2>EMISOFT</h2>
					<ul>
					<li></li>
					</ul>
				
				</div>		<!-- .block_head ends -->
				
				
				
				
				<div class="block_content">
					
					<div class="message info"><p>Ingrese su nombre de usuario y contrase&ntilde;a</p></div>
					
					<form action="<?= site_url("LoginController/iniciarSesion"); ?>" method="post">
						<p>
							<label>Usuario:</label> <br />
							<input type="text" class="text" value="" name="usuario" />
						</p>
						
						<p>
							<label>Contrasena:</label> <br />
							<input type="password" class="text" value=""  name="contrasena"/>
						</p>
						
						<p>
							<input type="submit" class="submit" value="Entrar" /> &nbsp; 
				
						</p>
					</form>
					
				</div>		<!-- .block_content ends -->
					
				<div class="bendl"></div>
				<div class="bendr"></div>
								
			</div>		<!-- .login ends -->
			
			
			
			
			
			
			
			
			
			
			
		
		
		</div>						<!-- wrapper ends -->
		
	</div>		<!-- #hld ends -->
	
	
	<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.img.preload.js"></script>
	<script type="text/javascript" src="js/jquery.filestyle.mini.js"></script>
	<script type="text/javascript" src="js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="js/jquery.date_input.pack.js"></script>
	<script type="text/javascript" src="js/facebox.js"></script>
	<script type="text/javascript" src="js/jquery.visualize.js"></script>
	<script type="text/javascript" src="js/jquery.visualize.tooltip.js"></script>
	<script type="text/javascript" src="js/jquery.select_skin.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="js/ajaxupload.js"></script>
	<script type="text/javascript" src="js/jquery.pngfix.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
	
</body>
</html>


