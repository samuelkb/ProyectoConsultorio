<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Direccion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="direccion form large-9 medium-8 columns content">
    <?= $this->Form->create($direccion) ?>
    <fieldset>
        <legend><?= __('Add Direccion') ?></legend>
        <?php
            echo $this->Form->control('nombreCalle');
            echo $this->Form->control('numeroExterno');
            echo $this->Form->control('numeroInterior');
            echo $this->Form->control('CodigoPostal_idCodigoPostal');
            echo $this->Form->control('Estado_idEstado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
