<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Listado de razon social'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="razonsocial form large-10 medium-8 columns content">
    <?= $this->Form->create($razonsocial) ?>
    <fieldset>
        <legend><?= __('Añadir razon social') ?></legend>
        <?php
            echo $this->Form->control('nombreRazon');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('Direccion_idDireccion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
