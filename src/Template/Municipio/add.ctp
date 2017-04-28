<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Municipio'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="municipio form large-9 medium-8 columns content">
    <?= $this->Form->create($municipio) ?>
    <fieldset>
        <legend><?= __('Add Municipio') ?></legend>
        <?php
            echo $this->Form->control('nombreMunicipio');
            echo $this->Form->control('Estado_idEstado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
