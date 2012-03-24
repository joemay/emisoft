<!-- File: /app/View/Categoria/add.ctp -->

<h1>Login</h1>

<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Empleado');?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
    <?php
        echo $this->Form->input('usuario');
        echo $this->Form->input('contrasena');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Entrar'));?>
</div>