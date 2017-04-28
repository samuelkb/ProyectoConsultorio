<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Empleado'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="empleado form large-9 medium-8 columns content">
    <?= $this->Form->create($empleado) ?>
    <fieldset>
        <legend><?= __('Add Empleado') ?></legend>
        <?php
            echo $this->Form->control('Puesto');
            echo $this->Form->control('Salario');
            echo $this->Form->control('Usuario_idUsuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
