<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva direccion'), ['action' => 'add']) ?></li>
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
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
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
                <td><?= $this->Number->format($direccion->idEstado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $direccion->idDireccion]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $direccion->idDireccion]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $direccion->idDireccion], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->idDireccion)]) ?>
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
