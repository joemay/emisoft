<!DOCTYPE html>

<html>
<head>
    <title>SICEM</title>
    <link href="css/reset.css" type="text/css" rel="stylesheet">
    <link href="css/global.css" type="text/css" rel="stylesheet">
    <link href="css/modules.css" type="text/css" rel="stylesheet">
    <link href="css/classes.css" type="text/css" rel="stylesheet">
    <link href="css/typografy.css" type="text/css" rel="stylesheet">
    <?= link_tag("css/reset.css"); ?>
    <?= link_tag("css/global.css"); ?>
    <?= link_tag("css/modules.css"); ?>
    <?= link_tag("css/classes.css"); ?>
    <?= link_tag("css/typografy.css"); ?>
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <?= js("js/jquery.js"); ?>
    <?= js("js/jquery-ui-1.8.12.custom.min.js"); ?>
    <?= js("js/home.js"); ?>
</head>

<body id="home" class="default-state">
    <!-- header -->
    

    <div id="header">
        <div class="wrapper">
            <div class="brand">
                <h1 class="logo">SICEM</h1>

                <h2 class="legend">Sistema de Informaci&oacute;n y Control Escolar <span class="">Sin Mochilita</span></h2>
            </div>

            <div class="settings">
                <div class="pic">
                    <img src="" class="pic">
                </div>

                <div class="user-info">
                    <ul>
                        <li>Bienvenido <a href="#" class="logged-user">
                        <?= $username; ?>   
                     </a></li>

                       
                    </ul>
                </div>

                <div class="controls">
                    <a class="button close-session" href="<?=  site_url("login/signOut"); ?>">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->

    <div class="content wrapper">
        <div id="inscripcion" class="panel">
            <h2>Proceso de inscripci&oacute;n</h2>

            <div class="tabs">
                <div class="wrapper">
                    <ul>
                        <li><a href="#" class="current" id="step-1"><span>Paso 1)</span> Llenar Hoja Estad&iacute;stica</a></li>

                        <li><a href="#" class="disabled" id="step-2"><span>Paso 2)</span> Elegir asignaturas</a></li>

                        <li><a href="#" class="disabled" id="step-3"><span>Paso 3)</span> Consultar Horario</a></li>
                        
                        <li><a href="#" class="disabled" id="step-4"><span>Paso 4)</span> Ubicaci&oacute;n</a></li>
                    </ul>
                </div>
            </div>

            <div class="bd">
                
            </div>

            <div class="ft">
                <a id="next-button" href="#" class="button confirm" >Siguiente</a>
            </div>
        </div>
    </div>

    <!-- footer -->

    <div id="footer">
        <p>Universidad Auton&oacute;ma de Yucat&aacute;n 2020</p>
    </div>
</body>
</html>
