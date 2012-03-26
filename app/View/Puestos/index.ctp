<h2>Puestos</h2>
<?php echo $this->Html->link('Agregar Puesto', array('controller' => 'puestos', 'action' => 'add')); ?>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('Id', 'id'); ?></th> 
        <th><?php echo $this->Paginator->sort('Nombre', 'nombre'); ?></th> 
        <th><?php echo $this->Paginator->sort('Descripcion', 'descripcion'); ?></th> 
        <th>&nbsp;</th> 
    </tr>
    <?php foreach ($puestos as $puesto): ?>
        <tr>
            <td><?php echo $puesto['Puesto']['id']; ?></td>
            <td><?php echo $puesto['Puesto']['nombre']; ?></td>
            <td><?php echo $puesto['Puesto']['descripcion']; ?></td>
            <td>
                <?php echo $this->Html->link('Editar', array('action' => 'edit', $puesto['Puesto']['id'])); ?>

                <?php
                echo $this->Form->postLink('Eliminar', array('action' => 'delete', $puesto['Puesto']['id']), array('confirm' => '¿En verdad desea eliminar este elemento?'));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Paginator->numbers(); ?>
<?php echo $this->Paginator->prev('« Anterior ', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->next(' Siguiente »', null, null, array('class' => 'disabled')); ?> 
