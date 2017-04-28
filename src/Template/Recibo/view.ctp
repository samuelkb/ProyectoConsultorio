<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recibo'), ['action' => 'edit', $recibo->idRecibo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recibo'), ['action' => 'delete', $recibo->idRecibo], ['confirm' => __('Are you sure you want to delete # {0}?', $recibo->idRecibo)]) ?> </li>
        <li><?= $this->Html->link(__('List Recibo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recibo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recibo view large-9 medium-8 columns content">
    <h3><?= h($recibo->idRecibo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdRecibo') ?></th>
            <td><?= $this->Number->format($recibo->idRecibo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pago IdPago') ?></th>
            <td><?= $this->Number->format($recibo->Pago_idPago) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FechaExpedido') ?></th>
            <td><?= h($recibo->fechaExpedido) ?></td>
        </tr>
    </table>
</div>
