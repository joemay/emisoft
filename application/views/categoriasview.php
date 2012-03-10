<!DOCTYPE html>
<html>
	<head>
		<title>EMISOFT</title>
		<link href="css/reset.css" type="text/css" rel="stylesheet"  />
		<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
		
		<style type="text/css">
		
		table{
	border: 1px solid black;
	}

	table thead{
	font-weight: bold;
	}
		
		
		</style>

	</head>
	<body id="homeview">
	

	<!-- header -->
	<div id="header">
	<div class="wrapper"></div>
	<h1 class="logo">EMISOFT</h1>
	<h2 class="legend"></h2>
	</div>
	</div>
	
	<!-- content -->
	<div class="content wrapper">
	
	<div class="hd">
	
	<form id="login" action="<?= site_url("CategoriasController/agregarCategoria"); ?>" method="post">
	<label for="nombre">Nombre:</label>	<input type="text"  class="text" name="nombre"/>
	<label for="descripcion">Descripci&oacute;n:</label>	<input type="text"  class="text" name="descripcion"/>
	<label for="departamento">Departamento:</label>	<input type="text"  class="text" name="departamento_id"/>
	
	<input id="submit" type="submit" class="button confirm"  value="Entrar"/>
	</form>
	
	</div>
	
	<div class="bd">
	
	
                        <table>
                            <thead>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Descripcion</td>
                                    <td>Departamento</td>
                                </tr>
                            </thead>

                            <tbody>
                                <? foreach($items as $item): ?>
                                <? $deleteController =  site_url("CategoriasController/eliminarCategoria/" . $item->id ); ?>
                                <? $editController =  site_url( "CategoriasController/editarCategoria/" . $item->id ); ?>

                                <tr>
                                    <td><?= $item->nombre; ?></td>

                                    <td><?= $item->descripcion; ?></td>
                                  <td><?= $item->departamento_id; ?></td>
                                  
                                    <td class="tc"><a class="tooltip edit" 
                                    href="<?= $editController; ?>" 
                                    title="Editar Usuario">
                                    <img src="<?= site_url('img/icons/small/user_edit.png'); ?>" alt="edit user" border="0" />
                                    </a> <a class="tooltip delete" href="<?= $deleteController; ?>" title="Eliminar Usuario"><img src="<?= site_url('img/icons/small/user_delete.png'); ?>" alt="delete user" border="0" /></a></td>
                                </tr><? endforeach; ?>
                                
                                
                                </tbody>
                        </table>

                        <div class="table-options">
                            <?= $linksPaginacion ?>
                            <br class="cl" />
                        </div>

	
	
	
	</div>
	
	
	<div class="ft">
	</div>
		
	
	</div>
	
	<!-- footer -->
	<div id="footer">
	<p>EMISOFT 2012</p>
	</div>
	

	</body>
</html>
