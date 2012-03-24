<h2>Departamentos</h2>
<?php echo $this->Html->link('Agregar Departamento', array('controller' => 'departamentos', 'action' => 'add')); ?>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('Id', 'id'); ?></th> 
        <th><?php echo $this->Paginator->sort('Nombre', 'nombre'); ?></th> 
        <th><?php echo $this->Paginator->sort('Empresa', 'empresa'); ?></th> 
        <th>&nbsp;</th> 
    </tr>
    <?php foreach ($departamentos as $departamento): ?>
        <tr>
            <td><?php echo $departamento['Departamento']['id']; ?></td>
            <td><?php echo $departamento['Departamento']['nombre']; ?></td>
            <td><?php echo $departamento['Empresa']['nombre']; ?></td>
            <td>
                <?php echo $this->Html->link('Edit', array('action' => 'edit', $departamento['Departamento']['id'])); ?>

                <?php
                echo $this->Form->postLink('Eliminar', array('action' => 'delete', $departamento['Departamento']['id']), array('confirm' => '¿En verdad desea eliminar este elemento?'));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Paginator->numbers(); ?>
<?php echo $this->Paginator->prev('« Anterior ', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->next(' Siguiente »', null, null, array('class' => 'disabled')); ?> 
