<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Factura'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factura index large-9 medium-8 columns content">
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $factura->idFactura]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factura->idFactura]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factura->idFactura], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->idFactura)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
