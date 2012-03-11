<?


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=7" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>EMISOFT - Documentos</title>
	
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
			
			
			<div class="block">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>Documentos</h2>
					
					
					
					<ul>
						<li>
						<a href="<?= site_url("DocumentosController/mostrarFormularioDocumento"); ?>"> Agregar Documento
						</a>
						</li>
					</ul>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				
							<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
						
							<thead>
								<tr>
							
									<th>Nombre</th>
                                    <th>Descripcion</td>
                                    <th>Categor&iacute;a</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							
							<tbody>
					
					
					<? foreach($items as $item): ?>
								<? $detailsController =  site_url("DocumentosController/detallesDocuemento/" . $item->id ); ?>
                                <? $deleteController =  site_url("DocumentosController/eliminarDocumento/" . $item->id ); ?>
                                <? $editController =  site_url( "DocumentosController/editarDocumento/" . $item->id ); ?>

                                <tr>
                                    <td><?= $item->nombre; ?>
                                    </td>

                                    <td><?= $item->descripcion; ?>
                                    </td>
                                    
                                    <td><?= $item->categoria_id; ?>
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
			
			
			<div>

		
			
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
