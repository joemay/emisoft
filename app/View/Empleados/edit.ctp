<!-- File: /app/View/Categoria/add.ctp -->

<h1>Editar Categoria</h1>


<?php
echo $this->Form->create('Categoria', array('action' => 'edit'));
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion', array('rows' => '10'));
$parametros = array('options' => $departamentos );
echo $this->Form->input('departamento_id', $parametros);
echo $this->Form->end('Guardar');
?>