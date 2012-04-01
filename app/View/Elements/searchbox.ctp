<?php
// Formulario de Busqueda
echo $this->Form->create('Categoria', array('action' => 'search', "class" => "buscarForm"));
echo $this->Form->input('nombre');
echo $this->Form->end('Buscar');
?>