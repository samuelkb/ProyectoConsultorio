<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Expediente'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="expediente form large-9 medium-8 columns content">
    <?= $this->Form->create($expediente) ?>
    <fieldset>
        <legend><?= __('Add Expediente') ?></legend>
        <?php
            echo $this->Form->control('Paciente_idPaciente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
