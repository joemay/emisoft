<?php 
echo $this->Html->link('Empresas', array('controller' => 'empresas', 'action' => 'index')); 
?>

<?php 
echo $this->Html->link('Departamentos', array('controller' => 'departamentos', 'action' => 'index')); 
?>

<?php 
echo $this->Html->link('Categorias', array('controller' => 'categorias', 'action' => 'index')); 
?>

<?php 
echo $this->Html->link('Documentos', array('controller' => 'documentos', 'action' => 'index')); 
?>

<?php 
echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')); 
?>
