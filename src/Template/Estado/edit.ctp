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
                ['action' => 'delete', $estado->idEstado],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estado->idEstado)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estado'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estado form large-9 medium-8 columns content">
    <?= $this->Form->create($estado) ?>
    <fieldset>
        <legend><?= __('Edit Estado') ?></legend>
        <?php
            echo $this->Form->control('nombreEstado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
