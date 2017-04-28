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
                ['action' => 'delete', $pago->idPago],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pago->idPago)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pago'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pago form large-9 medium-8 columns content">
    <?= $this->Form->create($pago) ?>
    <fieldset>
        <legend><?= __('Edit Pago') ?></legend>
        <?php
            echo $this->Form->control('concepto');
            echo $this->Form->control('importe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>