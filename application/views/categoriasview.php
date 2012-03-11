<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=7" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>EMISOFT - Categor&iacute;as</title>
	
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
				<div class="hdrl"></div>
				<div class="hdrr"></div>
				
				<h1><a href="<?= site_url("/emisoft/CategoriasController"); ?>">EMISOFT</a></h1>
				<?= $this->load->view("NavigationView"); ?>				
				<p class="user">usuario activo: <?= $this->session->userdata("usuario"); ?>| <a href="<?= site_url("LoginController/cerrarSesion"); ?>">Salir</a></p>
			</div>		<!-- #header ends -->
			

			<div class="block">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>Categor&iacute;as</h2>
					
					<ul>
						
					</ul>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				
							<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
						
							<thead>
								<tr>
							
									<th>Nombre</th>
                                    <th>Descripcion</td>
                                    <th>Departamento</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							
							<tbody>
					
					
					<? foreach($items as $item): ?>
								<? $detailsController =  site_url("CategoriasController/detallesCategoria/" . $item->id ); ?>
                                <? $deleteController =  site_url("CategoriasController/eliminarCategoria/" . $item->id ); ?>
                                <? $editController =  site_url( "CategoriasController/editarCategoria/" . $item->id ); ?>

                                <tr>
                                    <td><?= $item->nombre; ?>
                                    </td>

                                    <td><?= $item->descripcion; ?>
                                    </td>
                                    
                                    <td><?= $item->departamento_id; ?>
                                    </td>
                                    
                                  

                                    <td class="tc">
                                    
                                    <a class="tooltip ver" 
                                    href="<?= $detailsController; ?>" >
                                    Detalles
                                    </a>
                                    |
                                    <a class="tooltip edit" href="<?= $editController; ?>" >
                                    Editar
                                    </a> 
                                    |
                                    <a class="tooltip delete" 
                                    href="<?= $deleteController; ?>">
                                    Eliminar
                                    </a>
                                    
                                    
                                    </td>
                 					</tr><? endforeach; ?>

								
					
								
				
							</tbody>
							
						</table>
						
						
						
												
		
						<div class="pagination right">
						
						
						 <?= $linksPaginacion ?>
						
													
													
						</div>		<!-- .pagination ends -->
										
				</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>
				
				<div class="bendr"></div>
			</div>		<!-- .block ends -->
			
			

			<div class="block">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>Agregar Categor&iacute;a</h2>
					
				</div>		<!-- .block_head ends -->
				
				<div class="block_content">
					<form action="<?= site_url("CategoriasController/agregarCategoria"); ?>" method="post">
						<p>
						<label for="nombre">Nombre:</label>
						<input type="text"  class="text" name="nombre"/>
						</p>
						<p>
						<label for="descripcion">Descripci&oacute;n:</label>	
						<input type="text"  class="text" name="descripcion"/> 
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
		
		
			
			<div id="footer">
			
				<p class="left"><a href="#">EMISOFT</a></p>
				
			</div>
		
		
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
