<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar pago'), ['action' => 'edit', $pago->idPago]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar pago'), ['action' => 'delete', $pago->idPago], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->idPago)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de pagos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo pago'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pago view large-9 medium-8 columns content">
    <h3><?= h($pago->idPago) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdPago') ?></th>
            <td><?= $this->Number->format($pago->idPago) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Concepto') ?></th>
            <td><?= h($pago->concepto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Importe') ?></th>
            <td><?= $this->Number->format($pago->importe) ?></td>
        </tr>
    </table>
</div>
