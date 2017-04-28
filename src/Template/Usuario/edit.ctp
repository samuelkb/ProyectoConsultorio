<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuario->idUsuario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuario form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Edit Usuario') ?></legend>
        <?php
            echo $this->Form->control('nombreUsuario');
            echo $this->Form->control('apellidoPaterno');
            echo $this->Form->control('apellidoMaterno');
            echo $this->Form->control('password');
            echo $this->Form->control('Direccion_idDireccion');
            echo $this->Form->control('Contacto_idContacto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
