<h2>Editar Departamento</h2>
<?php
echo $this->Form->create('Departamento');
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion', array('rows' => '10'));
echo $this->Form->end('Guardar');
?>