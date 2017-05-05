<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar factura'), ['action' => 'edit', $factura->idFactura]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar factura'), ['action' => 'delete', $factura->idFactura], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->idFactura)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de facturas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva factura'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="factura view large-10 medium-8 columns content">
    <h3><?= h($factura->idFactura) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdFactura') ?></th>
            <td><?= $this->Number->format($factura->idFactura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RFC') ?></th>
            <td><?= h($factura->RFC) ?></td>
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
