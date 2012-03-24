<h2>Empresas</h2>
<?php echo $this->Html->link('Agregar Empresa', array('controller' => 'empresas', 'action' => 'add')); ?>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('Id', 'id'); ?></th> 
        <th><?php echo $this->Paginator->sort('Nombre', 'nombre'); ?></th>
        <th><?php echo $this->Paginator->sort('Razon Social', 'razonSocial'); ?></th>
        <th><?php echo $this->Paginator->sort('RFC', 'rfc'); ?></th>
        <th><?php echo $this->Paginator->sort('Fecha Registro', 'fechaRegistro'); ?></th>
        <th><?php echo $this->Paginator->sort('Direccion', 'direccion'); ?></th>




        <th>&nbsp;</th> 
    </tr>
    <?php foreach ($empresas as $empresa): ?>
        <tr>
            <td><?php echo $empresa['Empresa']['id']; ?></td>
            <td><?php echo $empresa['Empresa']['nombre']; ?></td>
            <td><?php echo $empresa['Empresa']['razonSocial']; ?></td>
            <td><?php echo $empresa['Empresa']['rfc']; ?></td>
            <td><?php echo $empresa['Empresa']['fechaRegistro']; ?></td>
            <td><?php echo $empresa['Empresa']['direccion']; ?></td>
            <td>
                <?php echo $this->Html->link('Edit', array('action' => 'edit', $empresa['Empresa']['id'])); ?>

                <?php
                echo $this->Form->postLink('Eliminar', array('action' => 'delete', $empresa['Empresa']['id']), array('confirm' => '¿En verdad desea eliminar este elemento?'));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Paginator->numbers(); ?>
<?php echo $this->Paginator->prev('« Anterior ', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->next(' Siguiente »', null, null, array('class' => 'disabled')); ?> 
