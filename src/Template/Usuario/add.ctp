<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuario form large-10 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Añadir usuario') ?></legend>
        <?php
            echo $this->Form->control('nombreUsuario');
            echo $this->Form->control('apellidoPaterno');
            echo $this->Form->control('role', ['options' => ['admin' => 'Dentista', 'paciente' => 'paciente', 'inventario' => 'Control de inventario']]);
            echo $this->Form->control('password');
            echo $this->Form->control('Direccion_idDireccion');
            echo $this->Form->control('Contacto_idContacto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
