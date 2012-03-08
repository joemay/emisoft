              <!-- FORM EDITAR USUARIO -->
              
              
                 <? foreach($items as $item): ?>
                <? $updateController =  site_url("usuarios/update/" . $item->id ); ?>
                             
             
              
              
               
                <div id="edit-form" class="grid_7">
                    <div class="box-header" id="add-form">
                        Editar Usuario

                        <ul id="forms-tabs" class="tabs fr"></ul>
                    </div>

                    <div class="box">
                        <form method="post" action="<?= $updateController; ?>">
                        
                          <div class="row">
                                <label>Matr&iacute;cula:</label> <input type="text" name="matricula"  value="<?= $item->matricula; ?>" />
                            </div>
                        
                        
                            <div class="row">
                                <label>Nombre:</label> <input type="text" name="nombre"  value="<?= $item->nombre; ?>" />
                            </div>

                            <div class="row">
                                <label>Usuario:</label> <input type="text" name="usuario"  value="<?=  $item->usuario; ?>" />
                            </div>

                            <div class="row">
                                <label>Contraseña:</label> <input type="text" name="contrasena"  value="<?=  $item->contrasena; ?>" />
                            </div>

                            <div class="row">
                                <label>E-mail:</label> <input type="text" name="email"   value="<?=  $item->email; ?>"/>
                            </div>

                            <div class="row">
                            
                               <input type="submit" value="Guardar" class="button medium blue" /> <input type="submit" value="Borrar" class="button medium" />
                            </div>
                        </form>
                    </div>
                </div>
                
                
              <? endforeach; ?>
 
                <!-- END FORM EDITAR USUARIO -->