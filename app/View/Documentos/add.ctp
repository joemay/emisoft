<h2>Agregar Documento</h2>
<?php

echo $this->Form->create('Documento', array('enctype' => 'multipart/form-data'));

echo $this->Form->input('submittedfile', array(
    'between' => '<br />',
    'type' => 'file'
));

echo $this->Form->input('nombre');
echo $this->Form->input('categoria_id', array(
    'options' => $categorias
));
echo $this->Form->input('descripcion', array('rows' => '10'));
echo $this->Form->input('etiquetas');


echo $this->Form->input('fecha');
echo $this->Form->input('version');
echo $this->Form->input('autor');


echo $this->Form->end('Guardar');
?>