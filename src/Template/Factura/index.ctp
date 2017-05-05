<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva factura'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factura index large-10 medium-8 columns content">
    <h3><?= __('Factura') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idFactura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RFC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IVA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desglose') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Contacto_idContacto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RazonSocial_idRazonSocial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pago_idPago') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($factura as $factura): ?>
            <tr>
                <td><?= $this->Number->format($factura->idFactura) ?></td>
                <td><?= h($factura->RFC) ?></td>
                <td><?= $this->Number->format($factura->IVA) ?></td>
                <td><?= $this->Number->format($factura->desglose) ?></td>
                <td><?= $this->Number->format($factura->Contacto_idContacto) ?></td>
                <td><?= $this->Number->format($factura->RazonSocial_idRazonSocial) ?></td>
                <td><?= $this->Number->format($factura->Pago_idPago) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $factura->idFactura]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $factura->idFactura]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $factura->idFactura], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->idFactura)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primera')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
