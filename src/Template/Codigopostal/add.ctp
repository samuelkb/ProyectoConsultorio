<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Codigopostal'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="codigopostal form large-9 medium-8 columns content">
    <?= $this->Form->create($codigopostal) ?>
    <fieldset>
        <legend><?= __('Add Codigopostal') ?></legend>
        <?php
            echo $this->Form->control('ciudad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
