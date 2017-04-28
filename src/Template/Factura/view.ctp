<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Factura'), ['action' => 'edit', $factura->idFactura]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Factura'), ['action' => 'delete', $factura->idFactura], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->idFactura)]) ?> </li>
        <li><?= $this->Html->link(__('List Factura'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Factura'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="factura view large-9 medium-8 columns content">
    <h3><?= h($factura->idFactura) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('RFC') ?></th>
            <td><?= h($factura->RFC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdFactura') ?></th>
            <td><?= $this->Number->format($factura->idFactura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IVA') ?></th>
            <td><?= $this->Number->format($factura->IVA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desglose') ?></th>
            <td><?= $this->Number->format($factura->desglose) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacto IdContacto') ?></th>
            <td><?= $this->Number->format($factura->Contacto_idContacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RazonSocial IdRazonSocial') ?></th>
            <td><?= $this->Number->format($factura->RazonSocial_idRazonSocial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pago IdPago') ?></th>
            <td><?= $this->Number->format($factura->Pago_idPago) ?></td>
        </tr>
    </table>
</div>
