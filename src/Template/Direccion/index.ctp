<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Direccion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="direccion index large-9 medium-8 columns content">
    <h3><?= __('Direccion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idDireccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreCalle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeroExterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeroInterior') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CodigoPostal_idCodigoPostal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estado_idEstado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($direccion as $direccion): ?>
            <tr>
                <td><?= $this->Number->format($direccion->idDireccion) ?></td>
                <td><?= h($direccion->nombreCalle) ?></td>
                <td><?= $this->Number->format($direccion->numeroExterno) ?></td>
                <td><?= $this->Number->format($direccion->numeroInterior) ?></td>
                <td><?= $this->Number->format($direccion->CodigoPostal_idCodigoPostal) ?></td>
                <td><?= $this->Number->format($direccion->Estado_idEstado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $direccion->idDireccion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $direccion->idDireccion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $direccion->idDireccion], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->idDireccion)]) ?>
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
