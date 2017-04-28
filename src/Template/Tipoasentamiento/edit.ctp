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
                ['action' => 'delete', $tipoasentamiento->idTipoAsentamiento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoasentamiento->idTipoAsentamiento)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipoasentamiento'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoasentamiento form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoasentamiento) ?>
    <fieldset>
        <legend><?= __('Edit Tipoasentamiento') ?></legend>
        <?php
            echo $this->Form->control('descripciónAsentamiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
