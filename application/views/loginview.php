<!DOCTYPE html>
<html>
	<head>
		<title>EMISOFT</title>
		<link href="css/reset.css" type="text/css" rel="stylesheet"  />
		<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>

	</head>
	<body id="loginview">
	

	<!-- header -->
	<div id="header">
	<div class="wrapper"></div>
	<h1 class="logo">EMISOFT</h1>
	<h2 class="legend"></h2>
	</div>
	</div>
	
	<!-- content -->
	<div class="content wrapper">
	
	<div id="login" class="panel">
	<h2>Iniciar sesi&oacute;n</h2>
	<div class="bd">
	<form id="login" action="<?= site_url("LoginController/iniciarSesion"); ?>" method="post">
	<label for="username">Usuario:</label>	<input type="text"  class="text" name="usuario"/>
	<label for="password">Contrase&ntilde;a:</label>	<input type="password"  class="text" name="contrasena"/>
	<input id="submit" type="submit" class="button confirm"  value="Entrar"/>
	</form>
	</div>
	<div class="ft">
	<a href="#">&iquest;Olvid&oacute; su contrase&ntilde;a?</a>
	</div>
	</div>
	
	
	</div>
	
	<!-- footer -->
	<div id="footer">
	<p>EMISOFT 2012</p>
	</div>
	

	</body>
</html>
