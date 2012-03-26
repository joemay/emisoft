<!-- File: /app/View/Empleado/add.ctp -->

<h1>Editar Empleado</h1>


<?php
echo $this->Form->create('Empleado', array('action' => 'edit'));
echo $this->Form->input('nombre');
echo $this->Form->input('apellido');
echo $this->Form->input('username');
echo $this->Form->input('password');

echo $this->Form->input('fechaNacimiento');
echo $this->Form->input('direccion');
echo $this->Form->input('telefono');
echo $this->Form->input('correo');

$parametros = array('options' => $departamentos );
echo $this->Form->input('departamento_id', $parametros);

$parametros = array('options' => $puestos );
echo $this->Form->input('puesto_id', $parametros);






echo $this->Form->end('Guardar');
?>