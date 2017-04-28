<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Razonsocial'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="razonsocial form large-9 medium-8 columns content">
    <?= $this->Form->create($razonsocial) ?>
    <fieldset>
        <legend><?= __('Add Razonsocial') ?></legend>
        <?php
            echo $this->Form->control('nombreRazon');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('Direccion_idDireccion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
