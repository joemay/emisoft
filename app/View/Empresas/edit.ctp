<h2>Editar Empresa</h2>
<?php
echo $this->Form->create('Empresa');
echo $this->Form->input('nombre');
echo $this->Form->input('razonSocial');
echo $this->Form->input('rfc');
echo $this->Form->input('fechaRegistro');
echo $this->Form->input('direccion');
echo $this->Form->end('Guardar');
?>