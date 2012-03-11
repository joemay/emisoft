<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=7" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>EMISOFT - Agregar Categor&iacute;a</title>
	
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
	
	
			
			<div id="header">
			
			<?= $this->load->view("HeaderView"); ?>

			
							</div>		<!-- #header ends -->
			
			
			
			<div>
			<div class="block" style="width: 50%;" id="box">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>Agregar Categor&iacute;a</h2>
					
				</div>		<!-- .block_head ends -->
				
				<div class="block_content" >
					<form action="<?= site_url("CategoriasController/agregarCategoria"); ?>" method="post">
						<p>
						<label for="nombre">Nombre:</label>
						<input type="text"  class="text" name="nombre"/>
						</p>
						<p>
						<label for="descripcion">Descripci&oacute;n:</label>	
						<textarea class="text" name="descripcion" ></textarea>
						</p>
						<p>
						<label for="departamento">Departamento:</label>	
						<input type="text"  class="text" name="departamento_id"/>
						</p>
						
						<input type="submit" class="submit small" value="Agregar" />
						
					</form>
				</div>
								
				<div class="bendl"></div>
				<div class="bendr"></div>
					
			</div>		<!-- .block ends -->
		</div>
		
			
			<div id="footer">
			
				<p class="left"><a href="#">EMISOFT</a></p>
				
			</div>
		
		
		</div>						<!-- wrapper ends -->
		
	</div>		<!-- #hld ends -->
	
	
	<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->	
	

	
<?= js("js/jquery.js"); ?>
<?= js("js/jquery.img.preload.js"); ?>
<?= js("js/jquery.filestyle.mini.js"); ?>
<?= js("js/jquery.wysiwyg.js"); ?>
<?= js("js/jquery.date_input.pack.js"); ?>
<?= js("js/facebox.js"); ?>
<?= js("js/jquery.visualize.js"); ?>
<?= js("js/jquery.visualize.tooltip.js"); ?>
<?= js("js/jquery.select_skin.js"); ?>
<?= js("js/jquery.tablesorter.min.js"); ?>
<?= js("js/ajaxupload.js"); ?>
<?= js("js/jquery.pngfix.js"); ?>
<?= js("js/custom.js"); ?>
<?= js("js/SimpleBox.1.02.js"); ?>

</body>
</html>
