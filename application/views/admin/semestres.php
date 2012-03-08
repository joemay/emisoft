<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /><?= link_tag("css/base.css"); ?>
    <?= link_tag("css/grid.css"); ?>
    <?= link_tag("css/extensions.css"); ?>
    <?= link_tag("js/fancybox/jquery.fancybox-1.3.4.css"); ?>
    <?= js("js/jquery.js"); ?>
    <?= js("js/fancybox/jquery.fancybox-1.3.4.pack.js"); ?>
    <?= js("js/admin/usuarios.js"); ?>

    <title>Semestres</title><!--[if IE]>
<script type="text/javascript" src="js/excanvas.js"></script>
<![endif]-->
</head>

<body class="layout980" id="signatures-page">
    <div id="page-wrapper" class="width">
        <!-- HEADER -->

        <div id="header">
            <!-- USERAREA -->

            <div class="user-area fr">
                <span class="spacer">Hola <strong>John Doe</strong></span> | <a href="#" class="spacer">Cerrar Sesión</a>
            </div><!-- USERAREA END --><!-- LOGO --><img id="logo" src="<?= site_url('img/logo-admin.png'); ?>" alt="" border="border" name="logo" /> <!-- LOGO END -->
        </div><!-- HEADER END --><!-- NAV -->

      
              <ul id="nav">
              <li class="users"><a href="<?=site_url("admin"); ?>">Alumnos</a></li>
              <li class="signatures"><a href="<?=site_url("admin/asignaturas"); ?>">Asignaturas</a></li>
              <li class="semestres current"><a 
              href="<?=site_url("admin/semestres"); ?>">Semestres</a></li> 
              </ul>

        <div id="page">
            <!-- OPEN GRID CONTAINER -->

            <div class="container_12">
                <div class="grid_12">
                    <a href="#add-form" id="add" class="button medium blue" style="margin: 0 0 10px 0;" name="add">Nuevo semestre</a>
                </div><br class="cl" />
                <!-- TABLES -->

                <div class="grid_12">
                    <div class="box-header">
                        <ul id="tables-tabs" class="tabs fr"></ul>Asignaturas
                    </div><!-- TABLES - TAB 1 -->

                    <div id="table-tab1" class="box table tab-content">
                        <table cellspacing="0">
                            <thead>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Descripci&oacute;n</td>
                                    <td>Opciones</td>
                                </tr>
                            </thead>

                            <tbody>
                                <? foreach($items as $item): ?>
                                <? $deleteController =  site_url("semestres/delete/" . $item->id ); ?>
                                <? $editController =  site_url( "semestres/edit/" . $item->id ); ?>

                                <tr>
                                    <td><?= $item->numero; ?>
                                    </td>

                                    <td><?= $item->descripcion; ?>
                                    </td>
                                  

                                    <td class="tc"><a class="tooltip edit" href="<?= $editController; ?>" title="Editar Usuario"><img src="<?= site_url('img/icons/small/user_edit.png'); ?>" alt="edit user" border="0" /></a> <a class="tooltip delete" href="<?= $deleteController; ?>" title="Eliminar Usuario"><img src="<?= site_url('img/icons/small/user_delete.png'); ?>" alt="delete user" border="0" /></a></td>
                                </tr><? endforeach; ?>
                                
                                
                                </tbody>
                        </table>

                        <div class="table-options">
                            <?= $paginationLinks ?>
                            <br class="cl" />
                        </div>
                    </div><!-- TABLES END -->
                </div><br class="cl" />
                
                 <!-- FORM AGREGAR USUARIO -->
                 <div  style="display: none;" > 
                <div id="add-form" class="grid_7">
                    <div class="box-header" id="add-form">
                        Nuevo semestre
                        <ul id="forms-tabs" class="tabs fr"></ul>
                    </div>

                    <div class="box">
                        <form method="post" action="<?= site_url("semestres/add"); ?>">
                            <div class="row">
                                <label>N&uacute;mero:</label> <input type="text" name="numero" />
                            </div>

                            <div class="row">
                                <label>Descripci&oacute;n:</label> <input type="text" name="descripcion" />
                            </div>

                            
                            <div class="row">
                            
                               <input type="submit" value="Guardar" class="button medium blue" /> <input type="submit" value="Borrar" class="button medium" />
                            </div>
                        </form>
                    </div>
                </div>
         
                </div>
                <!-- END FORM AGREGAR USUARIO -->

                <div class="grid_5">
                    <div class="grid_12"></div><br class="cl" />
                </div>
            </div><br class="cl" />
            <!-- footer -->

            <div id="footer" class="tr">
                SICEM
            </div>
        </div>
    </div>
</body>
</html>
