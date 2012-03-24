<h2>Documentos</h2>
<?php echo $this->Html->link('Agregar Documento', array('controller' => 'documentos', 'action' => 'add')); ?>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('Id', 'id'); ?></th> 
        <th><?php echo $this->Paginator->sort('Nombre', 'nombre'); ?></th> 
        <th><?php echo $this->Paginator->sort('Descripcion', 'descripcion'); ?></th>
        <th><?php echo $this->Paginator->sort('Etiquetas', 'etiquetas'); ?></th> 
        <th><?php echo $this->Paginator->sort('Fecha', 'fecha'); ?></th> 
        <th><?php echo $this->Paginator->sort('Version', 'version'); ?></th> 
        <th><?php echo $this->Paginator->sort('Categoria', 'categoria'); ?></th> 
        <th><?php echo $this->Paginator->sort('Autor', 'autor'); ?></th> 

        <th>&nbsp;</th> 
    </tr>
    <?php foreach ($documentos as $documento): ?>
        <tr>
            <td><?php echo $documento['Documento']['id']; ?></td>
            <td><?php echo $documento['Documento']['nombre']; ?></td>
            <td><?php echo $documento['Documento']['descripcion']; ?></td>
            <td><?php echo $documento['Documento']['etiquetas']; ?></td>
            <td><?php echo $documento['Documento']['fecha']; ?></td>
            <td><?php echo $documento['Documento']['version']; ?></td>
            <td><?php echo $documento['Categoria']['nombre']; ?></td>
            
            
            <td><?php echo $documento['Documento']['autor']; ?></td>
            
            
            <td>
                <?php echo $this->Html->link('Edit', array('action' => 'edit', $documento['Documento']['id'])); ?>

                <?php
                echo $this->Form->postLink('Eliminar', array('action' => 'delete', $documento['Documento']['id']), array('confirm' => '¿En verdad desea eliminar este elemento?'));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Paginator->numbers(); ?>
<?php echo $this->Paginator->prev('« Anterior ', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->next(' Siguiente »', null, null, array('class' => 'disabled')); ?> 
