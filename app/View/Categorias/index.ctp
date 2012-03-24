<h2>Categorías</h2>
<?php echo $this->Html->link('Agregar Categoria', array('controller' => 'categorias', 'action' => 'add')); ?>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('Id', 'id'); ?></th> 
        <th><?php echo $this->Paginator->sort('Nombre', 'nombre'); ?></th> 
        <th><?php echo $this->Paginator->sort('Departamento', 'departamento'); ?></th> 
        <th>&nbsp;</th> 
    </tr>
    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?php echo $categoria['Categoria']['id']; ?></td>
            <td><?php echo $categoria['Categoria']['nombre']; ?></td>
            <td><?php echo $categoria['Departamento']['nombre']; ?></td>
            <td>
                <?php echo $this->Html->link('Editar', array('action' => 'edit', $categoria['Categoria']['id'])); ?>

                <?php
                echo $this->Form->postLink('Eliminar', array('action' => 'delete', $categoria['Categoria']['id']), array('confirm' => '¿En verdad desea eliminar este elemento?'));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Paginator->numbers(); ?>
<?php echo $this->Paginator->prev('« Anterior ', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->next(' Siguiente »', null, null, array('class' => 'disabled')); ?> 
