<h2>Agregar Categoria</h2>
<?php
echo $this->Form->create('Categoria');
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion', array('rows' => '10'));
echo $this->Form->input('departamento_id', array(
    'options' => $departamentos
));
echo $this->Form->end('Guardar');
?>