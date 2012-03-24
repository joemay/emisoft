<h2>Editar Categoria</h2>
<?php
echo $this->Form->create('Categoria', array('action' => 'edit'));
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion', array('rows' => '10'));
$parametros = array('options' => $empresas );
echo $this->Form->input('departamento_id', $parametros);
echo $this->Form->end('Guardar');
?>