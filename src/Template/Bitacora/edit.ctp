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
                ['action' => 'delete', $bitacora->idBitacora],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bitacora->idBitacora)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bitacora'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bitacora form large-9 medium-8 columns content">
    <?= $this->Form->create($bitacora) ?>
    <fieldset>
        <legend><?= __('Edit Bitacora') ?></legend>
        <?php
            echo $this->Form->control('operacion');
            echo $this->Form->control('usuario');
            echo $this->Form->control('servidor');
            echo $this->Form->control('modificado');
            echo $this->Form->control('tabla');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
