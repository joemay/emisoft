<!-- File: /app/View/Posts/index.ctp -->

<h1>Categorías</h1>
<?php echo $this->Html->link('Agregar Categoria', array('controller' => 'categorias', 'action' => 'add')); ?>


<table>
    <tr>
        <th><?php echo $this->Paginator->sort('Id', 'id'); ?></th> 
        <th><?php echo $this->Paginator->sort('Nombre', 'nombre'); ?></th> 
        <th><?php echo $this->Paginator->sort('Departamento', 'nombre'); ?></th> 
        <th>&nbsp;</th> 


    </tr>
    <?php foreach ($empleados as $empleado): ?>
    <tr>
        <td><?php echo $empleado['Empleado']['id']; ?></td>
        <td><?php echo $empleado['Empleado']['nombre']; ?></td>
        <td><?php echo $empleado['Departamento']['nombre']; ?></td>
        
        
        <td>
            
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $empleado['Empleado']['id']));?>
        
            <?php echo $this->Form->postLink('Eliminar',
                    array('action' => 'delete', $empleado['Empleado']['id']),
                    array('confirm' => 'Se eliminaran todos los datos del empleado ¿continuar?'));
            ?>
        </td>
        
        
    </tr>
    <?php endforeach; ?>
</table>

<!-- Shows the page numbers -->
<?php echo $this->Paginator->numbers(); ?>
<!-- Shows the next and previous links -->
<?php echo $this->Paginator->prev('« Anterior ', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->next(' Siguiente »', null, null, array('class' => 'disabled')); ?> 
<!-- prints X of Y, where X is current page and Y is number of pages -->
