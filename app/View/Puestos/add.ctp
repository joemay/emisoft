<h2>Agregar Puesto</h2>
<?php
echo $this->Form->create('Puesto');
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion', array('rows' => '10'));
echo $this->Form->end('Guardar');
?>