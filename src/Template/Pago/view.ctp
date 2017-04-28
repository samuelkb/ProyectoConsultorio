<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pago'), ['action' => 'edit', $pago->idPago]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pago'), ['action' => 'delete', $pago->idPago], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->idPago)]) ?> </li>
        <li><?= $this->Html->link(__('List Pago'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pago'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pago view large-9 medium-8 columns content">
    <h3><?= h($pago->idPago) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Concepto') ?></th>
            <td><?= h($pago->concepto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPago') ?></th>
            <td><?= $this->Number->format($pago->idPago) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Importe') ?></th>
            <td><?= $this->Number->format($pago->importe) ?></td>
        </tr>
    </table>
</div>
