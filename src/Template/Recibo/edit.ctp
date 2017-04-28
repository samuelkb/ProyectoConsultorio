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
                ['action' => 'delete', $recibo->idRecibo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recibo->idRecibo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recibo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="recibo form large-9 medium-8 columns content">
    <?= $this->Form->create($recibo) ?>
    <fieldset>
        <legend><?= __('Edit Recibo') ?></legend>
        <?php
            echo $this->Form->control('fechaExpedido');
            echo $this->Form->control('Pago_idPago');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
